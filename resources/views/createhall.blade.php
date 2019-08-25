@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Hall Deatails</div>

                
                
                <div class="card-body">
                    <form method="POST" action="{{URL('/addhall'.$id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Organization_name" class="col-md-4 col-form-label text-md-right">Team/Organization Name</label>

                            <div class="col-md-6">
                                <input id="Organization_name" type="text" class="form-control @error('Organization_name') is-invalid @enderror" name="Organization_name" value="{{ old('Organization_name') }}" required autocomplete="Organization_name" autofocus>

                                @if ($errors->has('Organization_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Organization_name') }}</strong>
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

                        <label><b>What are the events that you cover</b></label><br><br>

                                                    
                            <div class="form-group row">
                            <label for="Wedding" class="col-md-4"></label>   
                            <div class="col-md-4">
                                <input type="hidden" name="Wedding" value="Not Available">
                                <label for="Wedding">Wedding </label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available">
                            </div>   
                            </div>

                            <div class="form-group row">
                            <label for="Parties" class="col-md-4"></label>   
                            <div class="col-md-4">
                                <input type="hidden" name="Parties" value="Not Available">
                                <label for="Parties">Party </label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Parties" value="Available">
                            </div>   
                            </div>

                            <div class="form-group row">
                            <label for="Meetings" class="col-md-4"></label>   
                            <div class="col-md-4">
                                <input type="hidden" name="Meetings" value="Not Available">
                                <label for="Meetings">Meetings </label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Meetings" value="Available">
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
                            <label for="Outside_event" class="col-md-4"></label>   
                            <div class="col-md-4">
                                <input type="hidden" name="Outside_event" value="Not Available">
                                <label for="Outside_event">Outside Events</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Outside_event" value="Available">
                            </div>   
                            </div>

                            <div class="form-group row">
                            <label for="Sport_event" class="col-md-4"></label>   
                            <div class="col-md-4">
                                <input type="hidden" name="Sport_event" value="Not Available">
                                <label for="Sport_event">Sport Events</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Sport_event" value="Available">
                            </div>   
                            </div>





                 

                        

                     

                        <div class="form-group row">
                            <label for="Main_pic" class="col-md-4 col-form-label text-md-right">Main pic</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_pic" id="Main_pic" value="{{ old('Main_pic') }}" required>

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

