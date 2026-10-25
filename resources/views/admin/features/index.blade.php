@extends('admin.master')
@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div>
                    <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>
                    <div>
                        <x-action-button routeName="admin.services.create" type="create" />
                    </div>

                </div>

                <div class="shadow card">
                    <div class="card-body">
                        <x-sucess-alert />
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($features))
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $feature->id }}</td>
                                            {{-- <td>{{ $feature->firstItem() + $loop->index }}</td> --}}
                                            <td>{{ $feature->title }}</td>

                                            <td><i class="{{ $feature->icon }} fa-2x"></i></td>
                                            <td>
                                                <a href="{{ route('admin.features.show', $feature) }}"
                                                    class="btn btn-sm btn-outline-primary ">View</a>

                                                <x-action-button route-name="admin.features.edit" :route-param="$feature"
                                                    type="edit" />
                                                <form action="{{ route('admin.features.destroy', $feature) }}"
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
                            {{ $features->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    {{-- <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="btn btn-sm btn-outline-primary ">Edit</a> --}}
