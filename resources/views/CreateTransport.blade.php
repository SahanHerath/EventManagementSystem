@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Wedding Transport</div>

                <div class="card-body">
                    <form method="POST" action="/addtransport" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Transport_Service" class="col-md-4 col-form-label text-md-right">Transport Service Name</label>

                            <div class="col-md-6">
                                <input id="Transport_Service" type="text" class="form-control @error('Transport_Service') is-invalid @enderror" name="Transport_Service" value="{{ old('Transport_Service') }}" required autocomplete="Transport_Service" autofocus>

                                @if ($errors->has('Transport_Service'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Transport_Service') }}</strong>
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
                            <label for="rent_hours" class="col-md-4 col-form-label text-md-right">Normal Rent Hours</label>

                            <div class="col-md-6">
                                <input id="rent_hours" type="number" min="0" class="form-control @error('rent_hours') is-invalid @enderror" name="rent_hours" value="{{ old('rent_hours') }}" required autocomplete="rent_hours" autofocus>

                                @if ($errors->has('rent_hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rent_hours') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rent_km" class="col-md-4 col-form-label text-md-right">Normal Rent Distance (km)</label>

                            <div class="col-md-6">
                                <input id="rent_km" type="number" min="0" class="form-control @error('rent_km') is-invalid @enderror" name="rent_km" value="{{ old('rent_km') }}" required autocomplete="rent_km" autofocus>

                                @if ($errors->has('rent_km'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rent_km') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="driver" class="col-md-4 col-form-label text-md-right">Driver for Wedding Vehicle</label>
                            
                            <div class="col-md-6">
                                <select id="driver" class="form-control" name="driver" value="{{ old('driver') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="decoration" class="col-md-4 col-form-label text-md-right">Decorating the Wedding Vehicle</label>
                            
                            <div class="col-md-6">
                                <select id="decoration" class="form-control" name="decoration" value="{{ old('decoration') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        

                        



                        <label><b>Select Your Available Vehicle Categories</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="luxury" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="luxury" value="Not Available">
                            <label for="luxury">Luxury Vehicles </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="luxury" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="classic" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="classic" value="Not Available">
                            <label for="classic">Classic Vehicles </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="classic" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="vintage" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="vintage" value="Not Available">
                            <label for="vintage">Vintage Vehicles</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="vintage" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="horse_cart" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="horse_cart" value="Not Available">
                            <label for="horse_cart">Horse Carts</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="horse_cart" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="air" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="air" value="Not Available">
                            <label for="air">Air Travelling Vehicle</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="air" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="travelling_coach" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="travelling_coach" value="Not Available">
                            <label for="travelling_coach">Travelling Coach</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="travelling_coach" value="Available">
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

