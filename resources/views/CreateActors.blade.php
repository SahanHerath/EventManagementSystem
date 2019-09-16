@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Artist, Announcer or Entertainer </div>

                <div class="card-body">
                    <form method="POST" action="/addactor" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Actor_name') ? ' has-error' : '' }}">
                            <label for="Actor_name" class="col-md-4 col-form-label text-md-right">Person/Team Name</label>

                            <div class="col-md-6">
                                <input id="Actor_name" type="text" class="form-control @error('Actor_name') is-invalid @enderror" name="Actor_name" value="{{ old('Actor_name') }}"autocomplete="Actor_name" autofocus  title="Fill this field with Artist/Representor name or group name">

                                @if ($errors->has('Actor_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Actor_name') }}</strong>
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
                                <input id="Contact_No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}" autocomplete="Contact_No" title="Fill this field with Contact Number"  >

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc.  " >

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" title="Fill this area with the description about your Group/Artist. You can include what are your specialities other details."></textarea>
                                @if ($errors->has('Description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        

                        <label><b>Select Your Service Categories</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Singer') ? ' has-error' : '' }}">
                        <label for="Singer" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Singer" value="Not Available">
                            <label for="Singer">Singer </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Singer" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Magician') ? ' has-error' : '' }}">
                        <label for="Magician" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Magician" value="Not Available">
                            <label for="Magician">Magician </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Magician" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Actor') ? ' has-error' : '' }}">
                        <label for="Actor" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Actor" value="Not Available">
                            <label for="Actor">Actor/ Actress</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Actor" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Comedian') ? ' has-error' : '' }}">
                        <label for="Comedian" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Comedian" value="Not Available">
                            <label for="Comedian">Comedian</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Comedian" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Announcer') ? ' has-error' : '' }}">
                        <label for="Announcer" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Announcer" value="Not Available">
                            <label for="Announcer">Announcer</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Announcer" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Entertainer') ? ' has-error' : '' }}">
                        <label for="Entertainer" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Entertainer" value="Not Available">
                            <label for="Entertainer">Entertainer</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Entertainer" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Other') ? ' has-error' : '' }}">
                        <label for="Other" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Other" value="Not Available">
                            <label for="Other">Other</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Other" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <label><b>What are the events that you cover</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                        <label for="Birthday" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Birthday" value="Not Available">
                            <label for="Birthday">Birthday </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Party') ? ' has-error' : '' }}">
                        <label for="Party" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Party" value="Not Available">
                            <label for="Party">Party </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Professional_event') ? ' has-error' : '' }}">
                        <label for="Professional_event" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Professional_event" value="Not Available">
                            <label for="Professional_event">Professional Events </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_event" value="Available"title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Musical_event') ? ' has-error' : '' }}">
                        <label for="Musical_event" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Musical_event" value="Not Available">
                            <label for="Musical_event">Musical Events</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Musical_event" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Corporate_event') ? ' has-error' : '' }}">
                        <label for="Corporate_event" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Corporate_event" value="Not Available">
                            <label for="Corporate_event">Corporate Events</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>



                        <label><b>Main Logo of your group or your Profile picture</b></label><br>

                
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

                        <label><b>Pictures of the events that you recently covered</b></label><br>

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
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" class="form-control @error('pic4') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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

