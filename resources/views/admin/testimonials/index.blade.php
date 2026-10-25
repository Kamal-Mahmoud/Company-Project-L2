@extends('admin.master')
@section('title', __('keywords.testmonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div>
                    <h2 class="h5 page-title">{{ __('keywords.testmonials') }}</h2>
                    <div>
                        <x-action-button routeName="admin.testimonials.create" type="create" />
                    </div>

                </div>

                <div class="shadow card">
                    <div class="card-body">
                        <x-sucess-alert />
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th>{{ __('keywords.position') }}</th>
                                    <th width="10%">{{ __('keywords.image') }}</th>
                                    <th>{{ __('keywords.description') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testimonials))
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonial->id }}</td>
                                            {{-- <td>{{ $testimonial->firstItem() + $loop->index }}</td> --}}
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td>
                                                <img src="{{ asset('public/storage/testimonials/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->name }}" class="img-fluid"
                                                    style="max-width: 50px; max-height: 50px;">
                                            </td>
                                            <td>{{ $testimonial->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.testimonials.show', $testimonial) }}"
                                                    class="btn btn-sm btn-outline-primary ">View</a>

                                                <x-action-button route-name="admin.testimonials.edit" :route-param="$testimonial"
                                                    type="edit" />
                                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
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
                            {{ $testimonials->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    {{-- <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="btn btn-sm btn-outline-primary ">Edit</a> --}}
