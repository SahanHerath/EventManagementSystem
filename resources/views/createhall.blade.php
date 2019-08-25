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
                            <label for="Hall_Name" class="col-md-4 col-form-label text-md-right">Hall Name</label>

                            <div class="col-md-6">
                                <input id="Hall_Name" type="text" class="form-control @error('Hall_Name') is-invalid @enderror" name="Hall_Name" value="{{ old('Hall_Name') }}" required autocomplete="Hall_Name" autofocus>

                                @if ($errors->has('Hall_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Hall_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address">

                                @if ($errors->has('Address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Address') }}</strong>
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
                            <label for="Cost" class="col-md-4 col-form-label text-md-right">Hall Cost</label>

                            <div class="col-md-6">
                                <input id="Cost" type="number" min="0" class="form-control @error('Cost') is-invalid @enderror" name="Cost" value="{{ old('Cost') }}" required autocomplete="Cost">

                                @if ($errors->has('Cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Capacity" class="col-md-4 col-form-label text-md-right">Hall Cost</label>

                            <div class="col-md-6">
                                <input id="Capacity" type="number" min="0" class="form-control @error('Capacity') is-invalid @enderror" name="Capacity" value="{{ old('Capacity') }}" required autocomplete="Capacity">

                                @if ($errors->has('Capacity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Capacity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Square_feet" class="col-md-4 col-form-label text-md-right">Size (square feets)</label>

                            <div class="col-md-6">
                                <input id="Square_feet" type="number" min="0" class="form-control @error('Square_feet') is-invalid @enderror" name="Square_feet" value="{{ old('Square_feet') }}" required autocomplete="Square_feet">

                                @if ($errors->has('Square_feet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Square_feet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Overview" class="col-md-4 col-form-label text-md-right">Overview</label>
                            
                            <div class="col-md-6">
                                <select id="Overview" class="form-control" name="Overview" value="{{ old('Overview') }}" required>
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="InAndOut">Indoor & Outdoor</option>
                                </select>
                            </div>
                        </div>

                        <label><b>What are the Features Available in the hall</b></label><br><br>

                        <div class="form-group row">
                        <label for="projection" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="projection" value="Not Available">
                            <label for="projection">Projection facility</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="projection" value="Available">
                        </div></div> 
                        </div>

                        <div class="form-group row">
                        <label for="internet" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="internet" value="Not Available">
                            <label for="internet">Wireless Internet </label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="internet" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="parking" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="parking" value="Not Available">
                            <label for="parking">Car Parking</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="parking" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="security_camera" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="security_camera" value="Not Available">
                            <label for="security_camera">Security Camera</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="security_camera" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="security_personal" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="security_personal" value="Not Available">
                            <label for="security_personal">Security Personal</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="security_personal" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="reception_area" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="reception_area" value="Not Available">
                            <label for="reception_area">Reception Area</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="reception_area" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="Bar" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bar" value="Not Available">
                            <label for="Bar">Bar</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Bar" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="garden" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="garden" value="Not Available">
                            <label for="garden">Garden</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="garden" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="smoking_area" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="smoking_area" value="Not Available">
                            <label for="smoking_area">Smoking Area</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="smoking_area" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="welcome_drinks" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="welcome_drinks" value="Not Available">
                            <label for="welcome_drinks">Welcome Drinks</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="welcome_drinks" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="Buffet" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Buffet" value="Not Available">
                            <label for="Buffet">Buffet</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Buffet" value="Available">
                        </div>   
                        </div> 

                        <div class="form-group row">
                        <label for="Handicap_accessible" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Handicap_accessible" value="Not Available">
                            <label for="Handicap_accessible">Handicap Accessible</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Handicap_accessible" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="outside_balcony" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="outside_balcony" value="Not Available">
                            <label for="outside_balcony">Veranda</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="outside_balcony" value="Available">
                        </div>   
                        </div> 

                          <div class="form-group row">
                        <label for="inside_balcony" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="inside_balcony" value="Not Available">
                            <label for="inside_balcony">Balcony(inside)</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="inside_balcony" value="Available">
                        </div>   
                        </div>

                          <div class="form-group row">
                        <label for="stage" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="stage" value="Not Available">
                            <label for="stage">Stage</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="stage" value="Available">
                        </div>   
                        </div>                           
                            
                        <label><b>What are the Table Arrangements Available for your hall</b></label><br><br>

                        <div class="form-group row">
                        <label for="theatre" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="theatre" value="Not Available">
                            <label for="theatre">Theatre</label> 
                            <div class="primary-checkbox">
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="theatre" value="Available">
                        </div></div> 
                        </div>

                        <div class="form-group row">
                        <label for="U_shape" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="U_shape" value="Not Available">
                            <label for="U_shape">U Shape</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="U_shape" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="V_shape" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="V_shape" value="Not Available">
                            <label for="V_shape">V Shape</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="V_shape" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="classroom" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="classroom" value="Not Available">
                            <label for="classroom">Classroom</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="classroom" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="hallow_square" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="hallow_square" value="Not Available">
                            <label for="hallow_square">Hallow Square</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="hallow_square" value="Available">
                        </div>   
                        </div>

                        <div class="form-group row">
                        <label for="Boardroom" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Boardroom" value="Not Available">
                            <label for="Boardroom">Boardroom</label> 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Boardroom" value="Available">
                        </div>   
                        </div> 

                    <div class="form-group row">
                    <label for="Oval" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Oval" value="Not Available">
                        <label for="Oval">Oval</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Oval" value="Available">
                    </div>   
                    </div> 

                    <div class="form-group row">
                    <label for="Herringbone" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Herringbone" value="Not Available">
                        <label for="Herringbone">Herringbone</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Herringbone" value="Available">
                    </div>   
                    </div> 

                    <div class="form-group row">
                    <label for="Top_table_springs" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Top_table_springs" value="Not Available">
                        <label for="Top_table_springs">Top Table & Springs</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Top_table_springs" value="Available">
                    </div>   
                    </div> 

                    <div class="form-group row">
                    <label for="banquet" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="banquet" value="Not Available">
                        <label for="banquet">Banquet</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="banquet" value="Available">
                    </div>   
                    </div> 

                    <div class="form-group row">
                    <label for="cabaret" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="cabaret" value="Not Available">
                        <label for="cabaret">Cabaret</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="cabaret" value="Available">
                    </div>   
                    </div> 

                    <div class="form-group row">
                    <label for="informal" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="informal" value="Not Available">
                        <label for="informal">Informal</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="informal" value="Available">
                    </div>   
                    </div>

                    <label><b>What are the events that suitable for this hall</b></label><br><br>

                    <div class="form-group row">
                    <label for="Wedding" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Wedding" value="Not Available">
                        <label for="Wedding">Wedding</label> 
                        <div class="primary-checkbox">
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available">
                    </div></div> 
                    </div>

                    <div class="form-group row">
                    <label for="Meeting" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Meeting" value="Not Available">
                        <label for="Meeting">Meeting</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Meeting" value="Available">
                    </div>   
                    </div>

                    <div class="form-group row">
                    <label for="Party" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Party" value="Not Available">
                        <label for="Party">Party</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available">
                    </div>   
                    </div>

                    <div class="form-group row">
                    <label for="Corporate_event" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Corporate_event" value="Not Available">
                        <label for="Corporate_event">Corporate Events</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available">
                    </div>   
                    </div>

                     <div class="form-group row">
                    <label for="Professional_Event" class="col-md-4"></label>   
                    <div class="col-md-4 switch-wrap d-flex justify-content-between">
                        <input type="hidden" name="Professional_Event" value="Not Available">
                        <label for="Professional_Event">Professional Events</label> 
                        <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_Event" value="Available">
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

