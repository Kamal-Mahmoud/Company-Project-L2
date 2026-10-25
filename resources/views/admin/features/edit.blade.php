@extends('admin.master')
@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.edit_feature') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                        <form action="{{ route('admin.features.update', $feature) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <x-form-component title="title" />
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title', $feature->title) }}">
                                <x-validation-error field="title" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="icon" />
                                <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                    id="icon" name="icon" value="{{ old('icon', $feature->icon) }}">
                                <x-validation-error field="icon" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="description" />
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ old('description', $feature->description) }}</textarea>
                                <x-validation-error field="description" />
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
