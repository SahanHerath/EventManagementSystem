@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Salon Details</div>

                <div class="card-body">
                    <form method="POST" action="/addSalon" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Salon_Name" class="col-md-4 col-form-label text-md-right">Salon Name</label>

                            <div class="col-md-6">
                                <input id="Salon_Name" type="text" class="form-control @error('Salon_Name') is-invalid @enderror" name="Salon_Name" value="{{ old('Salon_Name') }}" required autocomplete="Salon_Name" autofocus>

                                @if ($errors->has('Salon_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Salon_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address">

                                @if ($errors->has('Address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Contact_No" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}" required autocomplete="Contact_No" autofocus>

                                @if ($errors->has('Contact_No'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_No') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Link" class="col-md-4 col-form-label text-md-right">Link</label>

                            <div class="col-md-6">
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}" required autocomplete="Link" autofocus>

                                @if ($errors->has('Link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>
                            
                            <div class="col-md-6">
                                <textarea name='Description' cols='50' rows='5' id='Description' required></textarea>
                            </div>
                        </div>
                        </div>

                        

                        
                        



                        <label><b>Select Your Available Services</b></label><br><br>

                        <div class="form-group row">
                            <label for="Groom_Dressing" class="col-md-4 col-form-label text-md-right">Groom Dressing</label>
                            
                            <div class="col-md-6">
                                <select id="Groom_Dressing" class="form-control" name="Groom_Dressing" value="{{ old('Groom_Dressing') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Bride_Dressing" class="col-md-4 col-form-label text-md-right">Bride Dressing</label>
                            
                            <div class="col-md-6">
                                <select id="Bride_Dressing" class="form-control" name="Bride_Dressing" value="{{ old('Bride_Dressing') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Dress_Making" class="col-md-4 col-form-label text-md-right">Dress Making</label>
                            
                            <div class="col-md-6">
                                <select id="Dress_Making" class="form-control" name="Dress_Making" value="{{ old('Dress_Making') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jewelry" class="col-md-4 col-form-label text-md-right">Jewelry</label>
                            
                            <div class="col-md-6">
                                <select id="Jewelry" class="form-control" name="Jewelry" value="{{ old('Jewelry') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Makeup" class="col-md-4 col-form-label text-md-right">Makeup</label>
                            
                            <div class="col-md-6">
                                <select id="Makeup" class="form-control" name="Makeup" value="{{ old('Makeup') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Bridesman" class="col-md-4 col-form-label text-md-right">Bridesman Dressing</label>
                            
                            <div class="col-md-6">
                                <select id="Bridesman" class="form-control" name="Bridesman" value="{{ old('Bridesman') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Bridesmaid" class="col-md-4 col-form-label text-md-right">Bridesmaid Dressing</label>
                            
                            <div class="col-md-6">
                                <select id="Bridesmaid" class="form-control" name="Bridesmaid" value="{{ old('Bridesmaid') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="HairStyle" class="col-md-4 col-form-label text-md-right">Hair Style</label>
                            
                            <div class="col-md-6">
                                <select id="HairStyle" class="form-control" name="HairStyle" value="{{ old('HairStyle') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>
               

                        <label><b>Events That You Can Cover</b></label><br><br>

                        <div class="form-group row">
                            <label for="wedding" class="col-md-4 col-form-label text-md-right">Wedding</label>
                            
                            <div class="col-md-6">
                                <select id="wedding" class="form-control" name="wedding" value="{{ old('wedding') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parties" class="col-md-4 col-form-label text-md-right">Parties</label>
                            
                            <div class="col-md-6">
                                <select id="parties" class="form-control" name="parties" value="{{ old('parties') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fashion_show" class="col-md-4 col-form-label text-md-right">Fashion Show</label>
                            
                            <div class="col-md-6">
                                <select id="fashion_show" class="form-control" name="fashion_show" value="{{ old('fashion_show') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        

                        

                        

                     

                        <div class="form-group row">
                            <label for="Profile_Pic" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Profile_Pic" id="Profile_Pic" value="{{ old('Profile_Pic') }}" required>

                                    @if ($errors->has('Profile_Pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Profile_Pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" required>

                                    @if ($errors->has('pic1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pic2" class="col-md-4 col-form-label text-md-right">Picture 2</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" required>

                                    @if ($errors->has('pic2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pic3" class="col-md-4 col-form-label text-md-right">Picture 3</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}" required>

                                    @if ($errors->has('pic3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic3') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pic4" class="col-md-4 col-form-label text-md-right">Picture 4</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" required>

                                    @if ($errors->has('pic4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic4') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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

