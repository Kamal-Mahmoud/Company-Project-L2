@extends('admin.master')
@section('title', __('keywords.subscribers'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.subscribers') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                        <x-sucess-alert />
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="10%">{{ __('keywords.email') }}</th>     
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers))
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $subscriber->id }}</td>
                                            {{-- <td>{{ $subscriber->firstItem() + $loop->index }}</td> --}}
                                            <td>{{ $subscriber->email }}</td>
                                            <td>
                                                <form action="{{ route('admin.subscribers.destroy', $subscriber) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else


                                    <x-empty-alert />
                                @endif
                            </tbody>
                        </table>
                        <div class=" d-flex justify-content-center">
                            {{ $subscribers->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    {{-- <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="btn btn-sm btn-outline-primary ">Edit</a> --}}
