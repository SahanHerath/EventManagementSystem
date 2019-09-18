@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/form_poruwa.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <center class="card-header">Add Poruwa Ritual Makers & Poruwa Item Suppliers</center>

                <div class="card-body">
                    <form method="POST" action="/addPoruwa" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Name') ? ' has-error' : '' }}">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Organization/Group Name</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}"  autocomplete="Name" autofocus title="Fill this field with event  group name">

                                @if ($errors->has('Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}"  autocomplete="Address" title="Fill this field with Address">

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
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}"  autocomplete="Contact_No" title="Fill this field with Contact Number">

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc.  ">

                                @if ($errors->has('Link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Description') ? ' has-error' : '' }}">
                        
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>
                            
                            <div class="col-md-6">
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Address') is-invalid @enderror" title="Fill this area with the description about your group. You can include what are your specialities other details." ></textarea>
                            </div>
                        
                        </div>

                        <div class="form-group row{{ $errors->has('Cost') ? ' has-error' : '' }}">
                            <label for="Cost" class="col-md-4 col-form-label text-md-right">Normal Cost for Ashtaka & Rituals </label>

                            <div class="col-md-6">
                                <input id="Cost" type="decimal" min="0" class="form-control @error('Cost') is-invalid @enderror" name="Cost" value="{{ old('Cost') }}"  autocomplete="Cost" title="Fill this field with your cost" >

                                @if ($errors->has('Cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <label><b>Select Your Available Features of Service</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Poruwa_rituals') ? ' has-error' : '' }}">
                        <label for="Poruwa_rituals" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa_rituals" value="Not Available">
                            <label for="Poruwa_rituals">Poruwa rituals (Ashtaka & other Cultural Rituals) </label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa_rituals" value="Available" title="Mark if you have this service">
                        </div></div> 
                        </div>

                        <div class="form-group row{{ $errors->has('Poruwa_items') ? ' has-error' : '' }}">
                        <label for="Poruwa_items" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa_items" value="Not Available">
                            <label for="Poruwa_items">Suppling Poruwa Items</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa_items" value="Available"  title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('match_making') ? ' has-error' : '' }}">
                        <label for="match_making" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="match_making" value="Not Available">
                            <label for="match_making">Match Making</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="match_making" value="Available"  title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Astrological_support') ? ' has-error' : '' }}">
                        <label for="Astrological_support" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Astrological_support" value="Not Available">
                            <label for="Astrological_support">Astrological Support</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Astrological_support" value="Available"  title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('jayamangala_gatha') ? ' has-error' : '' }}">
                        <label for="jayamangala_gatha" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="jayamangala_gatha" value="Not Available">
                            <label for="jayamangala_gatha">Jayamangala Gatha Team</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="jayamangala_gatha" value="Available"  title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Wedding_dancers') ? ' has-error' : '' }}">
                        <label for="Wedding_dancers" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_dancers" value="Not Available">
                            <label for="Wedding_dancers">Wedding Dancers (Traditional)</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_dancers" value="Available"  title="Mark if you have this service">
                        </div>   
                        </div>



                        <label><b>Main Logo of your Company or Profile picture</b></label><br><br>

                
                        <div class="form-group row{{ $errors->has('Main_pic') ? ' has-error' : '' }}">
                            <label for="Main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_pic" id="Main_pic" value="{{ old('Main_pic') }}" class="form-control @error('Main_pic') is-invalid @enderror" title="Upload the Main picture/Profile picture/Main logo">

                                    @if ($errors->has('Main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><b>Main Logo of your group or Profile picture</b></label><br><br>

                        <div class="form-group row{{ $errors->has('pic1') ? ' has-error' : '' }}">
                            <label for="pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" class="form-control @error('pic1') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" class="form-control @error('pic2') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}" class="form-control @error('pic3') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" class="form-control @error('pic4') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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

