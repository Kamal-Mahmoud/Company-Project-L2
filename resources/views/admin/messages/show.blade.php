@extends('admin.master')
@section('title', __('keywords.show_message'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{ __('keywords.show_message') }}</h2>
                <div class="shadow card">
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('keywords.name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $message->name }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('keywords.email') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ $message->email }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">{{ __('keywords.subject') }}</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject"
                                    name="subject" value="{{ $message->subject }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">{{ __('keywords.message') }}</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                    name="message" rows="3" readonly>{{ $message->message }}</textarea>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
