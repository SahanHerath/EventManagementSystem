@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/designer7.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <center class="card-header">Add Costume Designers </center>

                <div class="card-body">
                    <form method="POST" action="/addCostumeDesigner" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Name') ? ' has-error' : '' }}">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Designer Name</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}"  autocomplete="Name" autofocus title="Fill this field with Designer name or Group name">

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc. ">
 

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
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Link') is-invalid @enderror" title="Fill this area with the description about your cloth desginer. You can include what are your specialities other details.">{{ old('Description') }}</textarea>
                            </div>
                        </div>
                        </div>

                        

                        <label><b>Select Your Available Services</b></label><br><br>

                        
                        <div class="form-group row{{ $errors->has('wedding_dress_designs') ? ' has-error' : '' }}">
                        <label for="wedding_dress_designs" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="wedding_dress_designs" value="Not Available">
                            <label for="wedding_dress_designs">Wedding Dress Designs</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Kandyan" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        
                        <div class="form-group row{{ $errors->has('clothing_orders') ? ' has-error' : '' }}">
                        <label for="clothing_orders" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="clothing_orders" value="Not Available">
                            <label for="clothing_orders">Clothing Orders</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Western" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('sport_kit_designs') ? ' has-error' : '' }}">
                        <label for="sport_kit_designs" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="sport_kit_designs" value="Not Available">
                            <label for="sport_kit_designs">Sport Kit Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Traditional" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('saree_work') ? ' has-error' : '' }}">
                        <label for="saree_work" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="saree_work" value="Not Available">
                            <label for="saree_work">Saree Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Casual" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        

                        <div class="form-group row{{ $errors->has('traditional_dress') ? ' has-error' : '' }}">
                        <label for="traditional_dress" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="traditional_dress" value="Not Available">
                            <label for="traditional_dress">Traditional Dress Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Other" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        
                        
                        <div class="form-group row{{ $errors->has('gents_wear') ? ' has-error' : '' }}">
                        <label for="gents_wear" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="gents_wear" value="Not Available">
                            <label for="gents_wear">Gents Wear Designing </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('ladies_wear') ? ' has-error' : '' }}">
                        <label for="ladies_wear" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="ladies_wear" value="Not Available">
                            <label for="ladies_wear">Ladies Wear Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        

                        <div class="form-group row{{ $errors->has('gents_foot_wear') ? ' has-error' : '' }}">
                        <label for="gents_foot_wear" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="gents_foot_wear" value="Not Available">
                            <label for="gents_foot_wear">Gents FootWear Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Musical_event" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('ladies_foot_wear') ? ' has-error' : '' }}">
                        <label for="ladies_foot_wear" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="ladies_foot_wear" value="Not Available">
                            <label for="ladies_foot_wear">Ladies Foot Wear</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('sports_shoes') ? ' has-error' : '' }}">
                        <label for="sports_shoes" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="sports_shoes" value="Not Available">
                            <label for="sports_shoes">Sport Shoes Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <label><b>Events That You Can Cover</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('fashion_show') ? ' has-error' : '' }}">
                        <label for="fashion_show" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="fashion_show" value="Not Available">
                            <label for="fashion_show">Fashion Show </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="fashion_show" value="Available" title="Mark if you are covering this event">
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

                        <div class="form-group row{{ $errors->has('Coperate_event') ? ' has-error' : '' }}">
                        <label for="Coperate_event" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Coperate_event" value="Not Available">
                            <label for="Coperate_event">Corporate Event</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Coperate_event" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('sports') ? ' has-error' : '' }}">
                        <label for="sports" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="sports" value="Not Available">
                            <label for="sports">Sports</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="sports" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>


                        

                        
                        <label><b>Main Logo of your group or Profile picture</b></label><br><br>
                
                        <div class="form-group row{{ $errors->has('Main_pic') ? ' has-error' : '' }}">
                            <label for="Main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_pic" id="Main_Logo" value="{{ old('Main_pic') }}"  class="form-control @error('Main_pic') is-invalid @enderror" title="Upload the Main picture/Profile picture/Main logo">

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
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}"  class="form-control @error('pic1') is-invalid @enderror" title="Upload the picture of recent events that you cover">

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
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}"   class="form-control @error('pic2') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}"  class="form-control @error('pic3') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}"  class="form-control @error('pic4') is-invalid @enderror" title="Upload the picture of recent events that you cover" >

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

