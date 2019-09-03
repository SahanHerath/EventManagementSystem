@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Costume Designers </div>

                <div class="card-body">
                    <form method="POST" action="/addCostumeDesigner" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Designer Name</label>

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

                        

                        <label><b>Select Your Available Services</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="wedding_dress_designs" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="wedding_dress_designs" value="Not Available">
                            <label for="wedding_dress_designs">Wedding Dress Designs</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Kandyan" value="Available">
                        </div>   
                        </div>

                        
                        <div class="form-group row">
                        <label for="clothing_orders" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="clothing_orders" value="Not Available">
                            <label for="clothing_orders">Clothing Orders</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Western" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="sport_kit_designs" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="sport_kit_designs" value="Not Available">
                            <label for="sport_kit_designs">Sport Kit Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Traditional" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="saree_work" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="saree_work" value="Not Available">
                            <label for="saree_work">Saree Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Casual" value="Available">
                        </div>   
                        </div>

                        

                        <div class="form-group row">
                        <label for="traditional_dress" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="traditional_dress" value="Not Available">
                            <label for="traditional_dress">Traditional Dress Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Other" value="Available">
                        </div>   
                        </div>

                        
                        
                        <div class="form-group row">
                        <label for="gents_wear" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="gents_wear" value="Not Available">
                            <label for="gents_wear">Gents Wear Designing </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="ladies_wear" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="ladies_wear" value="Not Available">
                            <label for="ladies_wear">Ladies Wear Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available">
                        </div>   
                        </div>

                        

                        <div class="form-group row">
                        <label for="gents_foot_wear" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="gents_foot_wear" value="Not Available">
                            <label for="gents_foot_wear">Gents FootWear Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Musical_event" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="ladies_foot_wear" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="ladies_foot_wear" value="Not Available">
                            <label for="ladies_foot_wear">Ladies Foot Wear</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="sports_shoes" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="sports_shoes" value="Not Available">
                            <label for="sports_shoes">Sport Shoes Designing</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available">
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

