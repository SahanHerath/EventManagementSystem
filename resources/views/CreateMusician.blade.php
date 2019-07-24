@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Dj Or Band Details</div>

                <div class="card-body">
                    <form method="POST" action="/addmusician" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Dj_Name" class="col-md-4 col-form-label text-md-right">Dj Or Band Name</label>

                            <div class="col-md-6">
                                <input id="Dj_Name" type="text" class="form-control @error('Dj_Name') is-invalid @enderror" name="Dj_Name" value="{{ old('Dj_Name') }}" required autocomplete="Dj_Name" autofocus>

                                @if ($errors->has('Dj_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Dj_Name') }}</strong>
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
                            <label for="ContactNo" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="ContactNo" type="text" class="form-control @error('ContactNo') is-invalid @enderror" name="ContactNo" value="{{ old('ContactNo') }}" required autocomplete="ContactNo" autofocus>

                                @if ($errors->has('ContactNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ContactNo') }}</strong>
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
                            <label for="Playing_Hrs" class="col-md-4 col-form-label text-md-right">Playing Hours</label>

                            <div class="col-md-6">
                                <input id="Playing_Hrs" type="number" min="0" class="form-control @error('Playing_Hrs') is-invalid @enderror" name="Playing_Hrs" value="{{ old('Playing_Hrs') }}" required autocomplete="Playing_Hrs" autofocus>

                                @if ($errors->has('Playing_Hrs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Playing_Hrs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Payment" class="col-md-4 col-form-label text-md-right">Payment</label>

                            <div class="col-md-6">
                                <input id="Payment" type="number" min="0" class="form-control @error('Payment') is-invalid @enderror" name="Payment" value="{{ old('Payment') }}" required autocomplete="Payment" autofocus>

                                @if ($errors->has('Payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Extra_Cost" class="col-md-4 col-form-label text-md-right">Cost Per Extra Hour</label>

                            <div class="col-md-6">
                                <input id="Extra_Cost" type="number" min="0" class="form-control @error('Extra_Cost') is-invalid @enderror" name="Extra_Cost" value="{{ old('Extra_Cost') }}" required autocomplete="Extra_Cost" autofocus>

                                @if ($errors->has('Extra_Cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Extra_Cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <label><b>Select Your Available Services</b></label><br><br>

                        <div class="form-group row">
                            <label for="Fire" class="col-md-4 col-form-label text-md-right">Fire</label>
                            
                            <div class="col-md-6">
                                <select id="Fire" class="form-control" name="Fire" value="{{ old('Fire') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Smoke" class="col-md-4 col-form-label text-md-right">Smoke</label>
                            
                            <div class="col-md-6">
                                <select id="Smoke" class="form-control" name="Smoke" value="{{ old('Smoke') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Lights" class="col-md-4 col-form-label text-md-right">Lights</label>
                            
                            <div class="col-md-6">
                                <select id="Lights" class="form-control" name="Lights" value="{{ old('Lights') }}" required>
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
                            <label for="Beach_Party" class="col-md-4 col-form-label text-md-right">Beach Party</label>
                            
                            <div class="col-md-6">
                                <select id="Beach_Party" class="form-control" name="Beach_Party" value="{{ old('Beach_Party') }}" required>
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
                            <label for="Main_Logo" class="col-md-4 col-form-label text-md-right">Main Logo</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Main_Logo" id="Main_Logo" value="{{ old('Main_Logo') }}" required>

                                    @if ($errors->has('Main_Logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Main_Logo') }}</strong>
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

