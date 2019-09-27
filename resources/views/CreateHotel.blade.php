@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/hall.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Hotel / Reception Hall </div>

                <div class="card-body">
                    <form method="POST" action="/addhotel" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Hotel_Name') ? ' has-error' : '' }}">
                            <label for="Hotel_Name" class="col-md-4 col-form-label text-md-right">Hotel Name</label>

                            <div class="col-md-6">
                                <input id="Hotel_Name" type="text" class="form-control @error('Hotel_Name') is-invalid @enderror" name="Hotel_Name" value="{{ old('Hotel_Name') }}" autocomplete="Hotel_Name" title="Fill this field with Hotel Name">

                                @if ($errors->has('Hotel_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Hotel_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" autocomplete="Address" title="Fill this field with Address">

                                @if ($errors->has('Address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Contact_No') ? ' has-error' : '' }}">
                            <label for="Contact_No" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}"  autocomplete="Contact_No" autofocus>

                                @if ($errors->has('Contact_No'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_No') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Link') ? ' has-error' : '' }}">
                            <label for="Link" class="col-md-4 col-form-label text-md-right">Link</label>

                            <div class="col-md-6">
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}" autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc.  ">

                                @if ($errors->has('Link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">facebook</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}"  autocomplete="facebook" >

                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('instagram') ? ' has-error' : '' }}">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">Instagram</label>

                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}"  autocomplete="instagram" >

                                @if ($errors->has('instagram'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>
                            
                            <div class="col-md-6">
                                <textarea name='Description' cols='50' rows='5' id='Description'  class="form-control @error('Description') is-invalid @enderror" ></textarea>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Main_logo') ? ' has-error' : '' }}">
                            <label for="Main_logo" class="col-md-4 col-form-label text-md-right">Main Logo</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_logo" id="Main_logo" value="{{ old('Main_logo') }}"  class="form-control @error('Main_logo') is-invalid @enderror" >

                                    @if ($errors->has('Main_logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_logo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Cover_photo') ? ' has-error' : '' }}">
                            <label for="Cover_photo" class="col-md-4 col-form-label text-md-right">Cover photo</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Cover_photo" id="Cover_photo" value="{{ old('Cover_photo') }}"  class="form-control @error('Cover_photo') is-invalid @enderror" >

                                    @if ($errors->has('Cover_photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Cover_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        
                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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

