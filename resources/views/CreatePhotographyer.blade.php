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

                        <div class="form-group row{{ $errors->has('Studio_Name') ? ' has-error' : '' }}">
                            <label for="Studio_Name" class="col-md-4 col-form-label text-md-right">Studio Name</label>

                            <div class="col-md-6">
                                <input id="Studio_Name" type="text" class="form-control @error('Studio_Name') is-invalid @enderror" name="Studio_Name" value="{{ old('Studio_Name') }}"  autocomplete="Studio_Name" autofocus>

                                @if ($errors->has('Studio_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Studio_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" autocomplete="Address">

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
                                <input id="ContactNo" type="text" class="form-control @error('ContactNo') is-invalid @enderror" name="ContactNo" value="{{ old('ContactNo') }}"  autocomplete="ContactNo" >

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
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror" name="Link" value="{{ old('Link') }}"  autocomplete="Link" >

                                @if ($errors->has('Link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right" >Description</label>
                            
                            <div class="col-md-6">
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror" ></textarea>
                            </div>
                        </div>
                        </div>


                        <center><label><b>Select Your Available Services</b></label><center><br><br>

                        <div class="form-group row{{ $errors->has('Drone') ? ' has-error' : '' }}">
                            <label for="Drone" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Drone" value="Not Available">
                                <label for="Drone">Drone</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Drone" value="Available" title="Mark if you are covering this event">
                            </div>   
                        </div>
            
                            
                           

                            <div class="form-group row{{ $errors->has('Wedding_Photography') ? ' has-error' : '' }}">
                            <label for="Wedding_Photography" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Wedding_Photography" value="Not Available">
                                <label for="Wedding_Photography">Wedding Photography</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Photography" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Preshoot_Vedio') ? ' has-error' : '' }}">
                            <label for="Preshoot_Vedio" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Preshoot_Vedio" value="Not Available">
                                <label for="Preshoot_Vedio">Preshoot Vedio</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Preshoot_Vedio" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                        <div class="form-group row{{ $errors->has('Wedding_Vedio') ? ' has-error' : '' }}">
                            <label for="Wedding_Vedio	" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Wedding_Vedio" value="Not Available">
                                <label for="Wedding_Vedio">Wedding Vedio</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Vedio" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Album_Making') ? ' has-error' : '' }}">
                            <label for="Album_Making" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Album_Making" value="Not Available">
                                <label for="Album_Making">Album Making</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Album_Making" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Wedding_Card') ? ' has-error' : '' }}">
                            <label for="Wedding_Card" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Wedding_Card" value="Not Available">
                                <label for="Wedding_Card">Wedding Card	</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Card" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                        <label><b>Events That You Can Cover</b></label>

                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                            <label for="Wedding" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Wedding" value="Not Available">
                                <label for="Wedding">Wedding</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Get_togather') ? ' has-error' : '' }}">
                            <label for="Get_togather" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Get_togather" value="Not Available">
                                <label for="Get_togather">Get Togather</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_togather" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                            <label for="Birthday" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Birthday" value="Not Available">
                                <label for="Birthday">Birthday</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday
                                
                                " value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Competition') ? ' has-error' : '' }}">
                            <label for="Competition" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Competition" value="Not Available">
                                <label for="Competition">Competition</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Competition" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Professional_Events') ? ' has-error' : '' }}">
                            <label for="Professional_Events" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Professional_Events" value="Not Available">
                                <label for="Professional_Events">Professional Events</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_Events" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Sports') ? ' has-error' : '' }}">
                            <label for="Sports" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Sports" value="Not Available">
                                <label for="Sports">Sports</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Sports" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>

                            <div class="form-group row{{ $errors->has('Trips') ? ' has-error' : '' }}">
                            <label for="Trips" class="col-md-4"></label>   
                            <div class="col-md-4 switch-wrap d-flex justify-content-between">
                                <input type="hidden" name="Trips" value="Not Available">
                                <label for="Trips">Trips</label> 
                                <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Trips" value="Available" title="Mark if you are covering this event">
                            </div>   
                            </div>


                        <label><b>Main Logo of your company or Profile picture</b></label>


                        <div class="form-group row{{ $errors->has('main_pic') ? ' has-error' : '' }}">
                            <label for="main_pic" class="col-md-4 col-form-label text-md-right">Main Picture</label>
    
                            <div class="col-md-6">
                                <input type="file" name="main_pic" id="main_pic" value="{{ old('main_pic') }}" class="form-control @error('main_pic') is-invalid @enderror" >

                                    @if ($errors->has('main_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('main_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><b>Pictures of the events that you recently covered</b></label>

                        
                        <div class="form-group row{{ $errors->has('pic1') ? ' has-error' : '' }}">
                            <label for="pic1" class="col-md-4 col-form-label text-md-right">Picture 1</label>
    
                            <div class="col-md-6">
                                <input type="file" name="pic1" id="pic1" value="{{ old('pic1') }}" class="form-control @error('pic1') is-invalid @enderror" >

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
                                <input type="file" name="pic2" id="pic2" value="{{ old('pic2') }}" class="form-control @error('pic2') is-invalid @enderror" >

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
                                <input type="file" name="pic3" id="pic3" value="{{ old('pic3') }}" class="form-control @error('pic3') is-invalid @enderror" >

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
                                <input type="file" name="pic4" id="pic4" value="{{ old('pic4') }}" class="form-control @error('pic4') is-invalid @enderror">

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

