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

                        <div class="form-group row{{ $errors->has('Salon_Name') ? ' has-error' : '' }}">
                            <label for="Salon_Name" class="col-md-4 col-form-label text-md-right">Salon Name</label>

                            <div class="col-md-6">
                                <input id="Salon_Name" type="text" class="form-control @error('Salon_Name') is-invalid @enderror" name="Salon_Name" value="{{ old('Salon_Name') }}"  autocomplete="Salon_Name" autofocus>

                                @if ($errors->has('Salon_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Salon_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}"  autocomplete="Address">

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
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}" autocomplete="Contact_No" >

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" >

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Contact_No') is-invalid @enderror" ></textarea>
                            </div>
                        </div>
                        </div>

                        

                        
                        



                        <label><b>Select Your Available Services</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Groom_Dressing') ? ' has-error' : '' }}">
                        <label for="Groom_Dressing" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Groom_Dressing" value="Not Available">
                            <label for="Groom_Dressing">Groom Dressing </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Groom_Dressing" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Bride_Dressing') ? ' has-error' : '' }}">
                        <label for="Bride_Dressing	" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bride_Dressing" value="Not Available">
                            <label for="Bride_Dressing	">Bride Dressing</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Bride Dressing	" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Dress_Making') ? ' has-error' : '' }}">
                        <label for="Dress_Making" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Dress_Making" value="Not Available">
                            <label for="Dress_Making">Dress Making </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Dress_Making" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Jewelry') ? ' has-error' : '' }}">
                        <label for="Jewelry" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Jewelry" value="Not Available">
                            <label for="Jewelry">Jewelry </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Jewelry" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Makeup') ? ' has-error' : '' }}">
                        <label for="Makeup" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Makeup" value="Not Available">
                            <label for="Makeup">Make up </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Makeup" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Bridesman') ? ' has-error' : '' }}">
                        <label for="Bridesman" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bridesman" value="Not Available">
                            <label for="Bridesman">Bridesman</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Bridesman" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Bridesmaid') ? ' has-error' : '' }}">
                        <label for="Poruwa_rituals" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bridesmaid" value="Not Available">
                            <label for="Bridesmaid">Bridesmaid </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Bridesmaid" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('HairStyle') ? ' has-error' : '' }}">
                        <label for="HairStyle" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="HairStyle" value="Not Available">
                            <label for="HairStyle">Hair Style</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="HairStyle" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>
               

                        <label><b>Events That You Can Cover</b></label><br><br>

                        <div class="form-group row{{ $errors->has('wedding') ? ' has-error' : '' }}">
                        <label for="wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="wedding" value="Not Available">
                            <label for="wedding">Wedding </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="wedding" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('parties	') ? ' has-error' : '' }}">
                        <label for="Poruwa_rituals" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="parties	" value="Not Available">
                            <label for="parties	">Parties</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="parties" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('fashion_show') ? ' has-error' : '' }}">
                        <label for="fashion_show" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="fashion_show" value="Not Available">
                            <label for="fashion_show">Fashion show </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="fashion_show" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        

                        

                        

                     

                        <div class="form-group row{{ $errors->has('Profile_Pic') ? ' has-error' : '' }}">
                            <label for="Profile_Pic" class="col-md-4 col-form-label text-md-right">Profile Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Profile_Pic" id="Profile_Pic" value="{{ old('Profile_Pic') }}" class="form-control @error('Profile_Pic') is-invalid @enderror" >

                                    @if ($errors->has('Profile_Pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Profile_Pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('pic1') ? ' has-error' : '' }}">
                            <label for="Pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" class="form-control @error('pic1') is-invalid @enderror" >

                                    @if ($errors->has('pic1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('pic2') ? ' has-error' : '' }}">
                            <label for="pic2" class="col-md-4 col-form-label text-md-right">Picture 2</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" class="form-control @error('pic2') is-invalid @enderror" >

                                    @if ($errors->has('pic2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('pic3') ? ' has-error' : '' }}">
                            <label for="pic3" class="col-md-4 col-form-label text-md-right">Picture 3</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}" class="form-control @error('pic3') is-invalid @enderror" >

                                    @if ($errors->has('pic3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pic3') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('pic4') ? ' has-error' : '' }}">
                            <label for="pic4" class="col-md-4 col-form-label text-md-right">Picture 4</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" class="form-control @error('pic4') is-invalid @enderror" >

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

