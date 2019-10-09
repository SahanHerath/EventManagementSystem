@extends('layouts.app')

@section('content')
<div class="container" style="background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <div class="card-header">Your Suggestion</div>

                <div class="card-body">
                    <form method="POST" action="/addSuggestion" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Name') ? ' has-error' : '' }}">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}"  autocomplete="Name" autofocus title="Fill this field">

                                @if ($errors->has('Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Email') ? ' has-error' : '' }}">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}"  autocomplete="Email" title="Fill this field">

                                @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Contact_No') ? ' has-error' : '' }}">
                            <label for="Contact_No" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}" autocomplete="Contact_No" title="Fill this field with Contact Number">

                                @if ($errors->has('Contact_No'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_No') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Regarding') ? ' has-error' : '' }}">
                            <label for="Regarding" class="col-md-4 col-form-label text-md-right">Regarding</label>
                            
                            <div class="col-md-6">
                                <select id="Regarding" class="form-control" name="Regarding" value="{{ old('Regarding') }}" title="Fill this field with Avalability" >
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Financial">Financial</option>
                                    <option value="Services">Services</option>
                                    <option value="Community">Community</option>
                                    <option value="Development">Development</option>
                                    <option value="General Info">General Info</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Website Bug">Website Bug</option>
                                    <option value="Donations">Donations</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('Message') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="Message" class="col-md-4 col-form-label text-md-right">Message</label>
                            
                            <div class="col-md-6">
                                <textarea name='Message' cols='50' rows='5' id='Message' class="form-control @error('Message') is-invalid @enderror" title="Fill this field."></textarea>
                            </div>
                        </div>
                        </div>

      

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit Suggestion
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