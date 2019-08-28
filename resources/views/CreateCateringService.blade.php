@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Catering Service</div>

                <div class="card-body">
                    <form method="POST" action="/addcatering" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Service_Name" class="col-md-4 col-form-label text-md-right">Catering Service Name</label>

                            <div class="col-md-6">
                                <input id="Service_Name" type="text" class="form-control @error('Service_Name') is-invalid @enderror" name="Service_Name" value="{{ old('Service_Name') }}" required autocomplete="Service_Name" autofocus>

                                @if ($errors->has('Service_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Service_Name') }}</strong>
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

                        

                        <label><b>Select The Services You Provide</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="Welcome_drink" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Welcome_drink" value="Not Available">
                            <label for="Welcome_drink">Welcome Drink</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Welcome_drink" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Catering_set" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Catering_set" value="Not Available">
                            <label for="Catering_set">Catering Set </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_set" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Special_Food" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Special_Food" value="Not Available">
                            <label for="Special_Food">Special Dish/Food Making</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Special_Food" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="dessert" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="dessert" value="Not Available">
                            <label for="dessert">Dessert</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="dessert" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Catering_tent" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Catering_tent" value="Not Available">
                            <label for="Catering_tent">Catering Tent</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_tent" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Cake" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Cake" value="Not Available">
                            <label for="Cake">Special Cake Orders</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Cake" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Garden_umbrella" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Garden_umbrella" value="Not Available">
                            <label for="Garden_umbrella">Garden Umbrella</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Garden_umbrella" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Coffee_Machine" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Coffee_Machine" value="Not Available">
                            <label for="Coffee_Machine">Coffee Machine</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Coffee_Machine" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Table_chair" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Table_chair" value="Not Available">
                            <label for="Table_chair">Table And Chairs For Rent</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Table_chair" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="sink" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="sink" value="Not Available">
                            <label for="sink">Wash Basin or Sink</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="sink" value="Available">
                        </div>   
                        </div>

                        <label><b>Select are the events that you cover</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Birthday" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Birthday" value="Not Available">
                            <label for="Birthday">Birthday </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Party" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Party" value="Not Available">
                            <label for="Party">Party</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Corporate_event" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Corporate_event" value="Not Available">
                            <label for="Corporate_event">Corporate Event</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Funeral" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Funeral" value="Not Available">
                            <label for="Funeral">Funeral</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Funeral" value="Available">
                        </div>   
                        </div>

                        

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

