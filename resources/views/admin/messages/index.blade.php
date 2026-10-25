@extends('admin.master')
@section('title', __('keywords.messages'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.messages') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                        <x-sucess-alert />
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th width="10%">{{ __('keywords.email') }}</th>
                                    <th width="10%">{{ __('keywords.subject') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($messages))
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->id }}</td>
                                            {{-- <td>{{ $message->firstItem() + $loop->index }}</td> --}}
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>
                                                <a href="{{ route('admin.messages.show', $message) }}"
                                                    class="btn btn-sm btn-outline-primary ">View</a>
                                                <form action="{{ route('admin.messages.destroy', $message) }}"
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
                            {{ $messages->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    {{-- <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="btn btn-sm btn-outline-primary ">Edit</a> --}}
