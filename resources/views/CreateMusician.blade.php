@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url('images/form_music.jpg'); background-attachment: fixed;" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center class="card-header">Add DJ Or Band Details</center>

                <div class="card-body">
                    <form method="POST" action="/addmusician" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row{{ $errors->has('Dj_Name') ? ' has-error' : '' }}">
                            <label for="Dj_Name" class="col-md-4 col-form-label text-md-right">Dj Or Band Name</label>

                            <div class="col-md-6">
                                <input id="Dj_Name" type="text" class="form-control @error('Dj_Name') is-invalid @enderror" name="Dj_Name" value="{{ old('Dj_Name') }}" autocomplete="Dj_Name" autofocus title="Fill this field with DJ/Band name or group name">

                                @if ($errors->has('Dj_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Dj_Name') }}</strong>
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

                        <div class="form-group row{{ $errors->has('ContactNo') ? ' has-error' : '' }}">
                            <label for="ContactNo" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="ContactNo" type="text" class="form-control @error('ContactNo') is-invalid @enderror" name="ContactNo" value="{{ old('ContactNo') }}" autocomplete="ContactNo" title="Fill this field with Contact Number" >

                                @if ($errors->has('ContactNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ContactNo') }}</strong>
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

                        <div class="form-group row{{ $errors->has('Description') ? ' has-error' : '' }}">
                        
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>
                            
                            <div class="col-md-6">
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" value="{{ old('Description') }}" autocomplete="Description" title="Fill this area with the description about your music band/DJ. You can include what are your specialities other details."></textarea>
                                @if ($errors->has('Description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row{{ $errors->has('Playing_Hrs') ? ' has-error' : '' }}">
                            <label for="Playing_Hrs" class="col-md-4 col-form-label text-md-right">Playing Hours</label>

                            <div class="col-md-6">
                                <input id="Playing_Hrs" type="number" min="0" class="form-control @error('Playing_Hrs') is-invalid @enderror" name="Playing_Hrs" value="{{ old('Playing_Hrs') }}" autocomplete="Playing_Hrs" title="Normal Event playing hours">

                                @if ($errors->has('Playing_Hrs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Playing_Hrs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Payment') ? ' has-error' : '' }}">
                            <label for="Payment" class="col-md-4 col-form-label text-md-right">Payment</label>

                            <div class="col-md-6">
                                <input id="Payment" type="decimal" min="0" class="form-control @error('Payment') is-invalid @enderror" name="Payment" value="{{ old('Payment') }}" autocomplete="Payment" title="Cost that is charged for Normal Hours">

                                @if ($errors->has('Payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Extra_Cost') ? ' has-error' : '' }}">
                            <label for="Extra_Cost" class="col-md-4 col-form-label text-md-right">Cost Per Extra Hour</label>

                            <div class="col-md-6">
                                <input id="Extra_Cost" type="decimal" min="0" class="form-control @error('Extra_Cost') is-invalid @enderror" name="Extra_Cost" value="{{ old('Extra_Cost') }}" autocomplete="Extra_Cost" title="Cost that is charged for extra hour">

                                @if ($errors->has('Extra_Cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Extra_Cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <label><b>Select Your Available Services</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Fire') ? ' has-error' : '' }}">
                        <label for="Fire" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Fire" value="Not Available">
                            <label for="Fire">Fire Machine</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Fire" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Smoke') ? ' has-error' : '' }}">
                        <label for="Smoke" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Smoke" value="Not Available">
                            <label for="Smoke">Smoke Machine</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Smoke" value="Available" title="Mark if you have this service">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Lights') ? ' has-error' : '' }}">
                        <label for="Lights" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Lights" value="Not Available">
                            <label for="Lights">Lights</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Lights" value="Available" title="Mark if you have this service">
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

                        <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                        <label for="Birthday" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Birthday" value="Not Available">
                            <label for="Birthday">Wedding</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Beach_Party') ? ' has-error' : '' }}">
                        <label for="Beach_Party" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Beach_Party" value="Not Available">
                            <label for="Beach_Party">Beach Party</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Beach_Party" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Get_Together') ? ' has-error' : '' }}">
                        <label for="Get_Together" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Get_Together" value="Not Available">
                            <label for="Get_Together">Get Together</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_Together" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Parties') ? ' has-error' : '' }}">
                        <label for="Parties" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Parties" value="Not Available">
                            <label for="Parties">Parties</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Parties" value="Available" title="Mark if you are covering this event">
                        </div>   
                        </div>
                        

                        


                        <label><b>Main Logo of your group or band or Profile picture</b></label><br><br>

                        <div class="form-group row{{ $errors->has('Main_Logo') ? ' has-error' : '' }}">
                            <label for="Main_Logo" class="col-md-4 col-form-label text-md-right">Main Logo</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_Logo" id="Main_Logo" value="{{ old('Main_Logo') }}" class="form-control @error('Main_Logo') is-invalid @enderror" title="Upload the Main picture/Profile picture/Main logo">

                                    @if ($errors->has('Main_Logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_Logo') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <label><b>Pictures of the events that you recently covered</b></label><br><br>

                        <div class="form-group row{{ $errors->has('pic1') ? ' has-error' : '' }}">
                            <label for="pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" class="form-control @error('pic1') is-invalid @enderror"  title="Upload the picture of recent events that you cover">
                                 
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
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" class="form-control @error('pic2') is-invalid @enderror"  title="Upload the picture of recent events that you cover">
  

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
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" class="form-control @error('pic4') is-invalid @enderror"  title="Upload the picture of recent events that you cover">

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

