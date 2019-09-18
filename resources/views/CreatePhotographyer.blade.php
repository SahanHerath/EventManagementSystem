@extends('layouts.app')

@section('content')
<div class="container style=" style="background-image: url('images/form_person_7.jpg'); background-attachment: fixed;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgba(255,255,255,0.85);">
                <center class="card-header">Add Photographer or Vediographer Datails</center>

                <div class="card-body">
                    <form method="POST" action="/addphotographyer" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="Studio_Name" class="col-md-4 col-form-label text-md-right">Studio Name</label>

                            <div class="col-md-6">
                                <input id="Studio_Name" type="text" class="form-control @error('Studio_Name') is-invalid @enderror" name="Studio_Name" value="{{ old('Studio_Name') }}" required autocomplete="Studio_Name" autofocus>

                                @if ($errors->has('Studio_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Studio_Name') }}</strong>
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

                        <label><b>Select Your Available Services</b></label>
                        <div class="form-group row">
                            <label for="Wedding_Photography" class="col-md-4 col-form-label text-md-right">Wedding Photography</label>
                            
                            <div class="col-md-6">
                                <select id="Wedding_Photography" class="form-control" name="Wedding_Photography" value="{{ old('Wedding_Photography') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Preshoot_Vedio" class="col-md-4 col-form-label text-md-right">Preshoot Vedio</label>
                            
                            <div class="col-md-6">
                                <select id="Preshoot_Vedio" class="form-control" name="Preshoot_Vedio" value="{{ old('Preshoot_Vedio') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Wedding_Vedio" class="col-md-4 col-form-label text-md-right">Wedding Day Vedio</label>
                            
                            <div class="col-md-6">
                                <select id="Wedding_Vedio" class="form-control" name="Wedding_Vedio" value="{{ old('Wedding_Vedio') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Album_Making" class="col-md-4 col-form-label text-md-right">Album Making</label>
                            
                            <div class="col-md-6">
                                <select id="Album_Making" class="form-control" name="Album_Making" value="{{ old('Album_Making') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Wedding_Card" class="col-md-4 col-form-label text-md-right">Wedding Card Thank You Card</label>
                            
                            <div class="col-md-6">
                                <select id="Wedding_Card" class="form-control" name="Wedding_Card" value="{{ old('Wedding_Card') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Drone" class="col-md-4 col-form-label text-md-right">Drone Photo/Drone</label>
                            
                            <div class="col-md-6">
                                <select id="Drone" class="form-control" name="Drone" value="{{ old('Drone') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <label><b>Events That You Can Cover</b></label>

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
                            <label for="Get_togather" class="col-md-4 col-form-label text-md-right">Get Togather</label>
                            
                            <div class="col-md-6">
                                <select id="Get_togather" class="form-control" name="Get_togather" value="{{ old('Get_togather') }}" required>
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
                            <label for="Competition" class="col-md-4 col-form-label text-md-right">Competition</label>
                            
                            <div class="col-md-6">
                                <select id="Competition" class="form-control" name="Competition" value="{{ old('Competition') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Professional_Events" class="col-md-4 col-form-label text-md-right">Professional Events</label>
                            
                            <div class="col-md-6">
                                <select id="Professional_Events" class="form-control" name="Professional_Events" value="{{ old('Professional_Events') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Sports" class="col-md-4 col-form-label text-md-right">Sporting Events</label>
                            
                            <div class="col-md-6">
                                <select id="Sports" class="form-control" name="Sports" value="{{ old('Sports') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Trips" class="col-md-4 col-form-label text-md-right">Trips</label>
                            
                            <div class="col-md-6">
                                <select id="Trips" class="form-control" name="Trips" value="{{ old('Trips') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>


                        <label><b>Main Logo of your company or Profile picture</b></label>


                        <div class="form-group row">
                            <label for="main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="main_pic" id="main_pic" value="{{ old('main_pic') }}" required>

                                    @if ($errors->has('main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('main_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><b>Pictures of the events that you recently covered</b></label>

                        
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

