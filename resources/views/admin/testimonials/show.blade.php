@extends('admin.master')
@section('title', __('keywords.testmonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_testmonial') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('keywords.name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $testimonial->name }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">{{ __('keywords.position') }}</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror" id="position"
                                    name="position" value="{{ $testimonial->position }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">{{ __('keywords.image') }}</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                    name="image" value="{{ $testimonial->image }}" readonly>
                                <img src="{{ asset('public/storage/testimonials/' . $testimonial->image) }}"
                                    alt="{{ $testimonial->name }}" class="mt-2 img-fluid"
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('keywords.description') }}</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="3" readonly>{{ $testimonial->description }}</textarea>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
