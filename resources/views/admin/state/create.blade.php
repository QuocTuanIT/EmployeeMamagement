@extends('layouts.admin')

@push('css')
@endpush

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create new state</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card-body">
                    <form method="POST" action="{{ route('states.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="country_id" class="col-md-4 col-form-label text-md-end">{{ __('Country code') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('country_id') is-invalid @enderror" name="country_id">
                                    <option >-- Select country --</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end">{{ __('State Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create new') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
@endpush
