@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Category" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Hall" checked><span class="custom-control-label">Hotels And Reservation Hall</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Photography"><span class="custom-control-label">Photography and Videography</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Music"><span class="custom-control-label">Music / DJ</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Dancing"><span class="custom-control-label">Dancing / Traditional Dancing</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Poruwa_Ceramony"><span class="custom-control-label">Poruwa Ceramony</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Wedding_Transport"><span class="custom-control-label">Wedding Transport</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Decoration"><span class="custom-control-label">Decoration</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Cake_Designers"><span class="custom-control-label">Cake Designers</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Actors"><span class="custom-control-label">Artists & Announcers</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Bridel_Designers"><span class="custom-control-label">Bridel & Gloom Designers , Beauticians</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Catering"><span class="custom-control-label">Catering</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Cloth_Designers"><span class="custom-control-label">Cloth Designers</span></label>
                                </div>
                                <div class="radio">
                                    <label class="custom-control custom-radio"><input class="custom-control-input" type="radio" name="category" value="Event_Planners"><span class="custom-control-label">Event Planners</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
