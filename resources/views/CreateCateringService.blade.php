@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/catering2.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <center class="card-header">Add Catering Service</center>

                <div class="card-body">
                    <form method="POST" action="/addcatering" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Service_Name') ? ' has-error' : '' }}">
                            <label for="Service_Name" class="col-md-4 col-form-label text-md-right">Catering Service Name</label>

                            <div class="col-md-6">
                                <input id="Service_Name" type="text" class="form-control @error('Service_Name') is-invalid @enderror" name="Service_Name" value="{{ old('Service_Name') }}"  autocomplete="Service_Name" autofocus title="Fill this field with service name or group name">


                                @if ($errors->has('Service_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Service_Name') }}</strong>
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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}" autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc.  ">

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" title="Fill this area with the description about your Group/Designer. You can include what are your specialities other details."></textarea>
                            </div>
                        </div>
                        </div>

                        

                        <label><b>Select The Services You Provide</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Welcome_drink') ? ' has-error' : '' }}">
                        <label for="Welcome_drink" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Welcome_drink" value="Not Available">
                            <label for="Welcome_drink">Welcome Drink</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Welcome_drink" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Catering_set') ? ' has-error' : '' }}">
                        <label for="Catering_set" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Catering_set" value="Not Available">
                            <label for="Catering_set">Catering Set </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_set" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Special_Food') ? ' has-error' : '' }}">
                        <label for="Special_Food" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Special_Food" value="Not Available">
                            <label for="Special_Food">Special Dish/Food Making</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Special_Food" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('dessert') ? ' has-error' : '' }}">
                        <label for="dessert" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="dessert" value="Not Available">
                            <label for="dessert">Dessert</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="dessert" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Catering_tent') ? ' has-error' : '' }}">
                        <label for="Catering_tent" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Catering_tent" value="Not Available">
                            <label for="Catering_tent">Catering Tent</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_tent" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Cake') ? ' has-error' : '' }}">
                        <label for="Cake" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Cake" value="Not Available">
                            <label for="Cake">Special Cake Orders</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Cake" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Garden_umbrella') ? ' has-error' : '' }}">
                        <label for="Garden_umbrella" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Garden_umbrella" value="Not Available">
                            <label for="Garden_umbrella">Garden Umbrella</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Garden_umbrella" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Coffee_Machine') ? ' has-error' : '' }}">
                        <label for="Coffee_Machine" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Coffee_Machine" value="Not Available">
                            <label for="Coffee_Machine">Coffee Machine</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Coffee_Machine" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Table_chair') ? ' has-error' : '' }}">
                        <label for="Table_chair" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Table_chair" value="Not Available">
                            <label for="Table_chair">Table And Chairs For Rent</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Table_chair" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('sink') ? ' has-error' : '' }}">
                        <label for="sink" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="sink" value="Not Available">
                            <label for="sink">Wash Basin or Sink</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="sink" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <label><b>Select are the events that you cover</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

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
                            <label for="Party">Party</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Corporate_event') ? ' has-error' : '' }}">
                        <label for="Corporate_event" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Corporate_event" value="Not Available">
                            <label for="Corporate_event">Corporate Event</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Funeral') ? ' has-error' : '' }}">
                        <label for="Funeral" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Funeral" value="Not Available">
                            <label for="Funeral">Funeral</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Funeral" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <label><b>Main Logo of your group or Profile picture</b></label><br><br>

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
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" class="form-control @error('pic1') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}"  class="form-control @error('pic3') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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

