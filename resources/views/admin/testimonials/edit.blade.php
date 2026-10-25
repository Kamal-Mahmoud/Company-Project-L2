@extends('admin.master')
@section('title', __('keywords.edit_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_testmonial') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <x-form-component title="name" />
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $testimonial->name) }}">
                                <x-validation-error field="name" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="position" />
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    id="position" name="position" value="{{ old('position', $testimonial->position) }}">
                                <x-validation-error field="position" />
                            </div>


                           <div class="mb-3">
                                <x-form-component title="image" />
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" value="{{ old('image', $testimonial->image) }}">
                                <x-validation-error field="image" />
                            </div>

                            
                            <div class="mb-3">
                                <x-form-component title="description" />
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ old('description', $testimonial->description) }}</textarea>
                                <x-validation-error field="description" />
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
