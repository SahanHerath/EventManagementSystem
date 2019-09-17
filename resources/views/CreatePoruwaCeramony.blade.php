@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/form_poruwa.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center class="card-header">Add Poruwa Ritual Makers & Poruwa Item Suppliers</center>

                <div class="card-body">
                    <form method="POST" action="/addPoruwa" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Organization/Group Name</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}" required autocomplete="Name" autofocus>

                                @if ($errors->has('Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
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

                        <div class="form-group row">
                            <label for="Cost" class="col-md-4 col-form-label text-md-right">Normal Cost for Ashtaka & Rituals </label>

                            <div class="col-md-6">
                                <input id="Cost" type="number" min="0" class="form-control @error('Cost') is-invalid @enderror" name="Cost" value="{{ old('Cost') }}" required autocomplete="Cost" autofocus>

                                @if ($errors->has('Cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <label><b>Select Your Available Features of Service</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="Poruwa_rituals" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa_rituals" value="Not Available">
                            <label for="Poruwa_rituals">Poruwa rituals (Ashtaka & other Cultural Rituals) </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa_rituals" value="Available">
                        </div></div> 
                        </div>

                        <div class="form-group row">
                        <label for="Poruwa_items" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa_items" value="Not Available">
                            <label for="Poruwa_items">Suppling Poruwa Items</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa_items" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="match_making" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="match_making" value="Not Available">
                            <label for="match_making">Match Making</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="match_making" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Astrological_support" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Astrological_support" value="Not Available">
                            <label for="Astrological_support">Astrological Support</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Astrological_support" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="jayamangala_gatha" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="jayamangala_gatha" value="Not Available">
                            <label for="jayamangala_gatha">Jayamangala Gatha Team</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="jayamangala_gatha" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Wedding_dancers" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_dancers" value="Not Available">
                            <label for="Wedding_dancers">Wedding Dancers (Traditional)</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_dancers" value="Available">
                        </div>   
                        </div>



                        <label><b>Main Logo of your Company or Profile picture</b></label><br><br>

                
                        <div class="form-group row">
                            <label for="Main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_pic" id="Main_Logo" value="{{ old('Main_pic') }}" required>

                                    @if ($errors->has('Main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><b>Main Logo of your group or band or Profile picture</b></label><br><br>

                        <div class="form-group row">
                            <label for="pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
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

