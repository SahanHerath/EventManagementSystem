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

                        <div class="form-group row">
                            <label for="Actor_name" class="col-md-4 col-form-label text-md-right">Person/Team Name</label>

                            <div class="col-md-6">
                                <input id="Actor_name" type="text" class="form-control @error('Actor_name') is-invalid @enderror" name="Actor_name" value="{{ old('Actor_name') }}" required autocomplete="Actor_name" autofocus>

                                @if ($errors->has('Actor_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Actor_name') }}</strong>
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

                        

                        <label><b>Select Your Service Categories</b></label><br><br>

                        
                        <div class="form-group row">
                        <label for="Singer" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Singer" value="Not Available">
                            <label for="Singer">Singer </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Singer" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Magician" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Magician" value="Not Available">
                            <label for="Magician">Magician </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Magician" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Actor" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Actor" value="Not Available">
                            <label for="Actor">Actor/ Actress</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Actor" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Comedian" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Comedian" value="Not Available">
                            <label for="Comedian">Comedian</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Comedian" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Announcer" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Announcer" value="Not Available">
                            <label for="Announcer">Announcer</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Announcer" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Entertainer" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Entertainer" value="Not Available">
                            <label for="Entertainer">Entertainer</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Entertainer" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Other" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Other" value="Not Available">
                            <label for="Other">Other</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Other" value="Available">
                        </div>   
                        </div>

                        <label><b>What are the events that you cover</b></label><br><br>

                        
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
                            <label for="Party">Party </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Professional_event" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Professional_event" value="Not Available">
                            <label for="Professional_event">Professional Events </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_event" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Musical_event" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Musical_event" value="Not Available">
                            <label for="Musical_event">Musical Events</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Musical_event" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Corporate_event" class="col-md-4"></label>   
                        <div class="col-md-4">
                            <input type="hidden" name="Corporate_event" value="Not Available">
                            <label for="Corporate_event">Corporate Events</label> 
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

