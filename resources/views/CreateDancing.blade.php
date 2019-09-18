@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Dancing Team/Group </div>

                <div class="card-body">
                    <form method="POST" action="/adddancing" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Team_Name') ? ' has-error' : '' }}">
                            <label for="Team_Name" class="col-md-4 col-form-label text-md-right">Group/Team Name</label>

                            <div class="col-md-6">
                                <input id="Team_Name" type="text" class="form-control @error('Team_Name') is-invalid @enderror" name="Team_Name" value="{{ old('Team_Name') }}"  autocomplete="Team_Name" autofocus title="Fill this field with group name">

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc.">

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" title="Fill this area with the description about your group. You can include what are your specialities other details.">{{ old('Description') }}</textarea>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 col-form-label text-md-right">The Team Members</label>
                            
                            <div class="col-md-6">
                                <select id="Gender" class="form-control" name="Gender" value="{{ old('Gender') }}" class="form-control @error('Gender') is-invalid @enderror" title="Select the type">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Mix">Mix</option>
                                </select>
                                @if ($errors->has('Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('choreography') ? ' has-error' : '' }}">
                            <label for="choreography" class="col-md-4 col-form-label text-md-right">Choreographing</label>
                            
                            <div class="col-md-6">
                                <select id="choreography" class="form-control" name="choreography" value="{{ old('choreography') }}" class="form-control @error('choreography') is-invalid @enderror" title="Select the availability">
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                    
                                </select>
                                @if ($errors->has('choreography'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('choreography') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        <label><b>Select Your Available Dancing Categories</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Kandyan') ? ' has-error' : '' }}">
                        <label for="Kandyan" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Kandyan" value="Not Available">
                            <label for="Kandyan">Kandyan Dancing </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Kandyan" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Indian') ? ' has-error' : '' }}">
                        <label for="Indian" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Indian" value="Not Available">
                            <label for="Indian">Indian Dancing </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Indian" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Western') ? ' has-error' : '' }}">
                        <label for="Western" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Western" value="Not Available">
                            <label for="Western">Western Dancing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Western" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Traditional') ? ' has-error' : '' }}">
                        <label for="Traditional" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Traditional" value="Not Available">
                            <label for="Traditional">Traditional Dancing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Traditional" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Casual') ? ' has-error' : '' }}">
                        <label for="Casual" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Casual" value="Not Available">
                            <label for="Casual">Casulai Dancing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Casual" value="Available" title="Mark if you have this service">
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

                        
                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Party') ? ' has-error' : '' }}">
                        <label for="Party" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Party" value="Not Available">
                            <label for="Party">Party </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available"title="Mark if you are covering this event">
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



                        
                        <label><b>Main Logo of your Group or Profile picture</b></label><br><br>
                
                        <div class="form-group row{{ $errors->has('Main_pic') ? ' has-error' : '' }}">
                            <label for="Main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_pic" id="Main_Logo" value="{{ old('Main_pic') }}" class="form-control @error('Main_pic') is-invalid @enderror" title="Upload the Main picture/Profile picture/Main logo">

                                    @if ($errors->has('Main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_pic') }}</strong>
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

