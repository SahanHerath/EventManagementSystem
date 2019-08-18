@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Cake Designers Details</div>

                <div class="card-body">
                    <form method="POST" action="/addCakeDesigner" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Organization_Name" class="col-md-4 col-form-label text-md-right">Organization/Group Name</label>

                            <div class="col-md-6">
                                <input id="Organization_Name" type="text" class="form-control @error('Organization_Name') is-invalid @enderror" name="Organization_Name" value="{{ old('Organization_Name') }}" required autocomplete="Organization_Name" autofocus>

                                @if ($errors->has('Organization_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Organization_Name') }}</strong>
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

                       

                        

                      <label><b>Select Your Service That You Provide</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="Wedding_cake" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_cake" value="Not Available">
                            <label for="Wedding_cake"> Wedding Cake</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_cake" value="Available">
                        </div></div> 
                        </div>

                        <div class="form-group row">
                        <label for="Birthday_cake" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Birthday_cake" value="Not Available">
                            <label for="Birthday_cake">Birthday Cake</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday_cake" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Cake_Structure" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Cake_Structure" value="Not Available">
                            <label for="Cake_Structure">Cake Structure</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Cake_Structure" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Pastry_cake" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Pastry_cake" value="Not Available">
                            <label for="Pastry_cake">Pastry Cake</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Pastry_cake" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Cup_Cake" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Cup_Cake" value="Not Available">
                            <label for="Cup_Cake">Cup Cake</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Cup_Cake" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Other" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Other" value="Not Available">
                            <label for="Other">Other</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Other" value="Available">
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

