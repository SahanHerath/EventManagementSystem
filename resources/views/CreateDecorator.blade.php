@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Decorator Details</div>

                <div class="card-body">
                    <form method="POST" action="/addDecorator" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Team_Name" class="col-md-4 col-form-label text-md-right">Team/Organization Name</label>

                            <div class="col-md-6">
                                <input id="Team_Name" type="text" class="form-control @error('Team_Name') is-invalid @enderror" name="Team_Name" value="{{ old('Team_Name') }}" required autocomplete="Team_Name" autofocus>

                                @if ($errors->has('Team_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Team_Name') }}</strong>
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
                            <label for="Poruwa" class="col-md-4 col-form-label text-md-right">Poruwa</label>
                            
                            <div class="col-md-6">
                                <select id="Poruwa" class="form-control" name="Poruwa" value="{{ old('Poruwa') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Flower" class="col-md-4 col-form-label text-md-right">Flower</label>
                            
                            <div class="col-md-6">
                                <select id="Flower" class="form-control" name="Flower" value="{{ old('Flower') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Table_Hall" class="col-md-4 col-form-label text-md-right">Table Hall</label>
                            
                            <div class="col-md-6">
                                <select id="Table_Hall" class="form-control" name="Table_Hall" value="{{ old('Table_Hall') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Setty_Backs" class="col-md-4 col-form-label text-md-right">Setty Backs</label>
                            
                            <div class="col-md-6">
                                <select id="Setty_Backs" class="form-control" name="Setty_Backs" value="{{ old('Setty_Backs') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Lighting" class="col-md-4 col-form-label text-md-right">Lighting</label>
                            
                            <div class="col-md-6">
                                <select id="Lighting" class="form-control" name="Lighting" value="{{ old('Lighting') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Traditional" class="col-md-4 col-form-label text-md-right">Traditional</label>
                            
                            <div class="col-md-6">
                                <select id="Traditional" class="form-control" name="Traditional" value="{{ old('Traditional') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Wedding_Car" class="col-md-4 col-form-label text-md-right">Wedding Car</label>
                            
                            <div class="col-md-6">
                                <select id="Wedding_Car" class="form-control" name="Wedding_Car" value="{{ old('Wedding_Car') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <label><b>Events That You Can Cover</b></label><br><br>

                        <div class="form-group row">
                            <label for="Wedding" class="col-md-4 col-form-label text-md-right">Wedding</label>
                            
                            <div class="col-md-6">
                                <select id="Wedding" class="form-control" name="Wedding" value="{{ old('Wedding') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Birthday" class="col-md-4 col-form-label text-md-right">Birthday</label>
                            
                            <div class="col-md-6">
                                <select id="Birthday" class="form-control" name="Birthday" value="{{ old('Birthday') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Get_Together" class="col-md-4 col-form-label text-md-right">Get Together</label>
                            
                            <div class="col-md-6">
                                <select id="Get_Together" class="form-control" name="Get_Together" value="{{ old('Get_Together') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Outside_events" class="col-md-4 col-form-label text-md-right">Outside events</label>
                            
                            <div class="col-md-6">
                                <select id="Outside_events" class="form-control" name="Outside_events" value="{{ old('Outside_events') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Parties" class="col-md-4 col-form-label text-md-right">Parties</label>
                            
                            <div class="col-md-6">
                                <select id="Parties" class="form-control" name="Parties" value="{{ old('Parties') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                     

                        <div class="form-group row">
                            <label for="Main_Pic" class="col-md-4 col-form-label text-md-right">Main pic</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_Pic" id="Main_Pic" value="{{ old('Main_Pic') }}" required>

                                    @if ($errors->has('Main_Pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_Pic') }}</strong>
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

