@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/form_deco4.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <center class="card-header">Add Decorator Details</center>

                <div class="card-body">
                    <form method="POST" action="/addDecorator" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Team_Name') ? ' has-error' : '' }}">
                            <label for="Team_Name" class="col-md-4 col-form-label text-md-right">Team/Organization Name</label>

                            <div class="col-md-6">
                                <input id="Team_Name" type="text" class="form-control @error('Team_Name') is-invalid @enderror" name="Team_Name" value="{{ old('Team_Name') }}"autocomplete="Team_Name" autofocus title="Fill this field with Decorator name or Group name">

                                @if ($errors->has('Team_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Team_Name') }}</strong>
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
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}" autocomplete="Contact_No" title="Fill this field with Contact Number" >

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc. ">

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" title="Fill this area with the description about your designs. You can include what are your specialities other details.">{{ old('Description') }}</textarea>
                            </div>
                        
                        </div>

                        


                        <label><b>Select Your Available Services</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Poruwa') ? ' has-error' : '' }}">
                        <label for="Poruwa" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa" value="Not Available">
                            <label for="Poruwa">Poruwa</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Flower') ? ' has-error' : '' }}">
                        <label for="Flower" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Flower" value="Not Available">
                            <label for="Flower">Flower</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Flower" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Table_Hall') ? ' has-error' : '' }}">
                        <label for="Table_Hall" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Table_Hall" value="Not Available">
                            <label for="Table_Hall">Table Hall</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Table_Hall" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Setty_Backs') ? ' has-error' : '' }}">
                        <label for="Setty_Backs" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Setty_Backs" value="Not Available">
                            <label for="Setty_Backs">Setty Backs</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Setty_Backs" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Lighting') ? ' has-error' : '' }}">
                        <label for="Lighting" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Lighting" value="Not Available">
                            <label for="Lighting">Lighting</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Lighting" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Traditional') ? ' has-error' : '' }}">
                        <label for="Traditional" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Traditional" value="Not Available">
                            <label for="Traditional">Traditional</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Traditional" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Wedding_Car') ? ' has-error' : '' }}">
                        <label for="Wedding_Car" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_Car" value="Not Available">
                            <label for="Wedding_Car">Wedding Car</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Car" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <label><b>Events That You Can Cover</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                        <label for="Birthday" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Birthday" value="Not Available">
                            <label for="Birthday">Birthday</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Get_Together') ? ' has-error' : '' }}">
                        <label for="Get_Together" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Get_Together" value="Not Available">
                            <label for="Get_Together">Get Together</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_Together" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Parties') ? ' has-error' : '' }}">
                        <label for="Parties" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Parties" value="Not Available">
                            <label for="Parties">Parties</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Parties" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Outside_events') ? ' has-error' : '' }}">
                        <label for="Outside_events" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Outside_events" value="Not Available">
                            <label for="Outside_events">Outside Events</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Outside_events" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <label><b>Main Logo of your group or Profile picture</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Main_Pic') ? ' has-error' : '' }}">
                            <label for="Main_Pic" class="col-md-4 col-form-label text-md-right">Main pic</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_Pic" id="Main_Pic" value="{{ old('Main_Pic') }}" class="form-control @error('Main_Pic') is-invalid @enderror" title="Upload the Main picture/Profile picture/Main logo">

                                    @if ($errors->has('Main_Pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_Pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><b>Pictures of the events that you recently covered</b></label><br><br>

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
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" class="form-control @error('pic2') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}" class="form-control @error('pic3') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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

