@extends('admin.master')
@section('title', __('keywords.settings'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <success-alert />
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                        <form action="{{ route('admin.settings.update', $setting) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <x-form-component title="address" />
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ old('address', $setting->address) }}">
                                <x-validation-error field="address" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="email" />
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $setting->email) }}">
                                <x-validation-error field="email" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="phone" />
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone', $setting->phone) }}">
                                <x-validation-error field="phone" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="facebook" />
                                <input type="url" class="form-control @error('facebook') is-invalid @enderror"
                                    id="facebook" name="facebook" value="{{ old('facebook', $setting->facebook) }}">
                                <x-validation-error field="facebook" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="twitter" />
                                <input type="url" class="form-control @error('twitter') is-invalid @enderror"
                                    id="twitter" name="twitter" value="{{ old('twitter', $setting->twitter) }}">
                                <x-validation-error field="twitter" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="instagram" />
                                <input type="url" class="form-control @error('instagram') is-invalid @enderror"
                                    id="instagram" name="instagram" value="{{ old('instagram', $setting->instagram) }}">
                                <x-validation-error field="instagram" />

                            </div>
                            <div class="mb-3">
                                <x-form-component title="linkedin" />
                                <input type="url" class="form-control @error('linkedin') is-invalid @enderror"
                                    id="linkedin" name="linkedin" value="{{ old('linkedin', $setting->linkedin) }}">
                                <x-validation-error field="linkedin" />
                            </div>
                            <div class="mb-3">
                                <x-form-component title="youtube" />
                                <input type="url" class="form-control @error('youtube') is-invalid @enderror"
                                    id="youtube" name="youtube" value="{{ old('youtube', $setting->youtube) }}">
                                <x-validation-error field="youtube" />
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('keywords.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
