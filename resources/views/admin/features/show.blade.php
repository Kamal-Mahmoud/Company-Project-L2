@extends('admin.master')
@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_feature') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('keywords.title') }}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ $feature->title }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label">{{ __('keywords.icon') }}</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon"
                                    name="icon" value="{{ $feature->icon }}" readonly >
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('keywords.description') }}</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="3" readonly>{{ $feature->description }}</textarea>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
