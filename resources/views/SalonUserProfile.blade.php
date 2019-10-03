<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Evora-Beautician & Designer</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/css/style.css">
        <link rel="stylesheet" href="css/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/"><img src="#" alt="">Evora</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
                            @foreach($data as $data1)
                            <li class="nav-item active"><i class="fa fa-eye" style="font-size:24px"></i><a class="nav-link" href="{{URL('/SalonView'.$data1->userid)}}">View Your Profile</a></li> 
                            
                            <li class="nav-item active"><a class="nav-link" href="#">
                                    <p class="text-white"><img src="/uploads/salon/{{$data1->Profile_Pic}}" style="width:32px; height:32px; border-radius: 50%;" >
                                    {{ Auth::user()->name }}</p>
                                </a>
                            </li>  
                            <li class="nav-item active"><a class="nav-link" href="{{ route('logout') }}">
                                    <p class="text-white" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </a>
                            </li>
							@endforeach 
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        @foreach($data as $data1)
        <section class="home_banner_area">
        <div class="container box_1620">
           	<div class="container">
               @if(Session::has('flash_message'))  
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            {!!session('flash_message')!!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                @endif

                @if(Session::has('warning_message'))
                        <div class="alert alert-warning">
                            <span class="glyphicon glyphicon-ok"></span>
                            {!!session('warning_message')!!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                @endif
           		<div class="banner_inner d-flex align-items-center">
					<div class="offset-1 banner_content">
						<div class="media">
                            <div class="d-flex">
                                <img src="uploads/salon/{{$data1->Profile_Pic}}" width="400" hight="600" alt="">
                            </div>
                             
                            <div class="personal_text">
                            <h3>{{$data1->Salon_Name}}</h3>
                                <ul class="list basic_info">
                                    <li><b>Contact Person :- </b>{{$data1->name}}</li>
                                    <li><b>ADDRESS :- </b>{{$data1->Address}}</li>
                                    <li><b>Contact_No :- </b>{{$data1->Contact_No}}</li>
                                    <li><b>email :- </b>{{$data1->email}}</li>
                                    <li><b>Link :- </b>{{$data1->Link}}</li>
                                    
                                    <a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditInfo">Edit info</a>
                                    <a class="genric-btn info" href="" data-toggle="modal" data-target="#password_modal">Change Password</a>
                                    <a class="genric-btn warning" href=""  data-toggle="modal" data-target="#mainpicchange">Change Main Picture</a>
                                    <br>
                                </ul>
                            </div>
						</div>
                        <br>
                        
                        <div class="welcome">
                                <h3>Description</h3><br>
                                <p>{{$data1->Description}}</p>
                        </div>
                        
                        <br>
                        <div class="feature_inner row">
                   
        			<div class="col-lg-4 col-md-6" style="border: 15px solid green;">
        				<div class="feature_item bg-white text-black" >
                            
                        <h4>Supported Events</h4>
                        <table>
                        
                        
                            @if($data1->wedding=='Available')
                            <tr>
                            
                            Wedding
                            
                            </tr>
                            <br>
                            @endif
                            
                            @if($data1->parties=='Available')
                            <tr>
                            
                            Parties
                            
                            </tr>
                            <br>
                            @endif
                            @if($data1->fashion_show=='Available')
                            <tr>
                            
                            Fashion Show
                            
                            </tr>
                            <br>
                            @endif
                           
                           
                            <tr>
                            <br>
                            <br>
                            <br>
                            <center><a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditForm">Edit Events</a></center>
                            </tr>
                            
                        </table>
        				</div>
        			</div>
                    
                   
					<div class="offset-3 col-lg-5 col-md-6" style="border: 15px solid green;">
        				<div class="feature_item bg- text-black">
                        <center><h4>Features</h4></center>
                            @if($data1->Groom_Dressing=='Available')
                            Groom Dressing
                            <br>
                            @endif
                            @if($data1->Bride_Dressing=='Available')
                            Bride Dressing
                            <br>
                            @endif
                            @if($data1->Dress_Making=='Available')
                            Dress Designing and Making
                            <br>
                            @endif
                            @if($data1->Jewelry=='Available')
                            Jewelry
                            <br>
                            @endif
                            @if($data1->Makeup=='Available')
                            Make Up and facial
                            <br>
                            @endif
                            @if($data1->Bridesman=='Available')
                            Bridesman Dressing and Dress Designing 
                            <br>
                            @endif
                            @if($data1->Bridesmaid=='Available')
                            Bridesmaid Dressing and Dress Designing
                            <br>
                            @endif
                            @if($data1->HairStyle=='Available')
                            Hair Style 
                            <br>
                            @endif
                            
                            
                            <br><br><br>
                            <center><a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditFeature">Edit Features</a></center>
                            
                        </div>
        			</div>
                  
        		</div>
					</div>
				</div>
            </div> </div>
        </section>
        <!--================End Home Banner Area =================-->
       
        <!--================Feature Area =================-->
        
        <!--================End Feature Area =================-->
        
        <!--================Home Gallery Area =================-->
        
        <section class="welcome_area p_120">
				<div class="colorlib-narrow-content">
                   
                    <div class="section-top-border">
						<h3 class="title_color">Image Gallery</h3>
						<div class="row gallery-item">
							<div class="col-md-3" width="400" hight="600">
								<a href="uploads/salon/{{$data1->pic1}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/salon/{{$data1->pic1}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/salon/{{$data1->pic2}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/salon/{{$data1->pic2}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/salon/{{$data1->pic3}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/salon/{{$data1->pic3}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/salon/{{$data1->pic4}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/salon/{{$data1->pic4}});"></div></a>
							</div>
                            
						</div>
                        <br>
                            
							<a class="offset-5 genric-btn primary" href="" data-toggle="modal" data-target="#modalChangepic">Change Recent Event Photos</a>
                            <br>
                            <br>
                            <div class="section-top-border">
						<h3 class="title_color">Available Packages</h3>
                            <a class="offset-1 genric-btn info" href="{{URL('/AddPhotographyPackage'.$data1->userid)}}" data-toggle="modal" data-target="#modalAddPackage">Add A Package</a>
                            
                        </div>
                        @foreach($deto as $deto1)
                        <div class="personal_text" >
                            <div class="col-lg-4 col-md-6" style="border: 5px solid red;">
                                <div class="feature_item">
                                    
                                    <h4><b><font color="black">{{$deto1->Package_Name}}</font></b></h4>
                                    <ul class="list basic_info">
                                    <li><b>Event Type :- </b>{{$deto1->Event_Type}}</li>
                                    <li><b>Services :- </b>{{$deto1->Services}}</li>
                                    <li><b>Price :- </b> Rs.{{$deto1->Price}}</li>
                                    <li><a href="files/salon/{{$deto1->Pdf}}"><img src="images/pdf.png" width="40" hight="40" alt="" ></a></li>
                                    <ul>
                                
                                
                                    <ul class="list basic_info">
                                    <a class="genric-btn primary" href="#" data-toggle="modal" data-target="#modalEditPackage" data-packagename="{{$deto1->Package_Name}}" data-services="{{$deto1->Services}}" data-price="{{$deto1->Price}}" data-eventtype="{{$deto1->Event_Type}}" data-pakid="{{$deto1->id}}">Edit</a></center>
                                    <a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeletePackage" data-pakid="{{$deto1->id}}" >Remove</a></center>
                                    
                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            <a class="offset-10 genric-btn danger" data-toggle="modal" data-target="#modalDeleteAccount" href="">Deactivate Account</a>
                            
                            
					</div>
					
				</div>
			
        </section>

         <!--==============model for  edit info=================-->
    <div class="modal fade" id="modalEditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form method="POST" action="{{URL('/EditSalonDetails'.'/'.$data1->userid.'/'.$data1->salonid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
             <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label offset-1">Name :-</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-10 offset-1" name="name"  value="{{$data1->name}}" title="fill this field with organization name or Person Name">

                                @error('name')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label offset-1">Email Address :-</label>

                         
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror col-md-10 offset-1" name="email" value="{{$data1->email }}" title="fill this field">

                                @error('email')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                        </div>
                        <div class="form-group row{{ $errors->has('Salon_Name') ? ' has-error' : '' }}">
                            <label for="Salon_Name" class="col-md-4 col-form-label offset-1">Salon Name :-</label>

                       
                                <input id="Salon_Name" type="text" class="form-control @error('Salon_Name') is-invalid @enderror col-md-10 offset-1" name="Salon_Name" value="{{ $data1->Salon_Name }}"autocomplete="Salon_Name" autofocus title="Fill this field with Salon_Name">

                                @error('Salon_Name')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label offset-1">Address :-</label>

                      
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror col-md-10 offset-1" name="Address"   value="{{ $data1->Address  }}"  autocomplete="Address" title="Fill this field with Address">

                                @error('Address')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row{{ $errors->has('Contact_No') ? ' has-error' : '' }}">
                            <label for="Contact_No" class="col-md-4 col-form-label offset-1">Contact Number :-</label>

                       
                                <input id="Contact_No" type="text"  class="form-control @error('Contact_No') is-invalid @enderror col-md-10 offset-1" name="Contact_No" value="{{ $data1->Contact_No  }}" autocomplete="Contact_No"  title="Fill this field." >

                                @error('Contact_No')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>

                        <div class="form-group row{{ $errors->has('Link') ? ' has-error' : '' }}">
                            <label for="Link" class="col-md-4 col-form-label offset-1">Link :-</label>

                           
                                <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror col-md-10 offset-1" name="Link" value="{{ $data1->Link  }}"   autocomplete="Link"  title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc. ">

                                @error('Link')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        

                        <div class="form-group row{{ $errors->has('Description') ? ' has-error' : '' }}">
                        
                            <label for="Description" class="col-md-4 col-form-label offset-1">Description :-</label>
                            
                          
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror col-md-10 offset-1" title="Fill this area with the description about your service. You can include what are your specialities other details.">{{$data1->Description }}</textarea>
                                @error('Description')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                            
                                <button type="submit" class="btn btn-primary ">
                                    Save Changes
                                </button>
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                            </div>
                        </div>
             
                  

      </form>
                
      </div>
  </div>
  </div>

   <!--==============model for edit info=================-->
   <!--==============model for edit events=================-->
   <div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Events</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <br>
      <form method="POST" action="{{URL('/EditSalonEvents'.$data1->eventid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             
                  <div class="form-group row{{ $errors->has('wedding') ? ' has-error' : '' }}">
                  <label for="wedding" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="wedding" value="Not Available">
                      <label for="wedding">Wedding</label>
                      @if($data1->wedding=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="wedding" value="Available" >
                      @endif
                      @if($data1->wedding=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="wedding" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('parties') ? ' has-error' : '' }}">
                  <label for="parties" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="parties" value="Not Available">
                      <label for="parties">Parties</label> 
                      @if($data1->parties=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="parties" value="Available" >
                      @endif
                      @if($data1->parties=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="parties" value="Available" >
                      @endif
                  </div>   
                  </div>

                 

                  <div class="form-group row{{ $errors->has('fashion_show') ? ' has-error' : '' }}">
                  <label for="fashion_show" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="fashion_show" value="Not Available">
                      <label for="fashion_show">Fashion Show</label> 
                      @if($data1->fashion_show=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="fashion_show" value="Available" >
                      @endif
                      @if($data1->fashion_show=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="fashion_show" value="Available" >
                      @endif
                  </div>   
                  </div>

                  
                <div class="modal-footer">
                    <div class="text-center">
                    
                        <button type="submit" class="btn btn-primary ">
                            Save Changes
                        </button>
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                    </div>
                </div>

      </form>
      
      </div>
  </div>
  </div>
   <!--==============model for edit events=================-->
   <!--==============model for edit features=================-->
   <div class="modal fade" id="modalEditFeature" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Features</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <br>
      <form method="POST" action="{{URL('/EditSalonFeatures'.$data1->salonid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('Groom_Dressing') ? ' has-error' : '' }}">
                        <label for="Groom_Dressing" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Groom_Dressing" value="Not Available">
                            <label for="Groom_Dressing">Groom Dressing</label>
                            @if($data1->Groom_Dressing=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Groom_Dressing" value="Available">
                            @endif
                            @if($data1->Groom_Dressing=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Groom_Dressing" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Bride_Dressing') ? ' has-error' : '' }}">
                        <label for="Bride_Dressing" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bride_Dressing" value="Not Available">
                            <label for="Bride_Dressing">Bride Dressing</label> 
                            @if($data1->Bride_Dressing=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Bride_Dressing" value="Available">
                            @endif
                            @if($data1->Bride_Dressing=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Bride_Dressing" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Dress_Making') ? ' has-error' : '' }}">
                        <label for="Dress_Making" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Dress_Making" value="Not Available">
                            <label for="Dress_Making">Dress Making</label> 
                            @if($data1->Dress_Making=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Dress_Making" value="Available">
                            @endif
                            @if($data1->Dress_Making=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Dress_Making" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Jewelry') ? ' has-error' : '' }}">
                        <label for="Jewelry" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Jewelry" value="Not Available">
                            <label for="Jewelry">Jewelry</label> 
                            @if($data1->Jewelry=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Jewelry" value="Available">
                            @endif
                            @if($data1->Jewelry=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Jewelry" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Makeup') ? ' has-error' : '' }}">
                        <label for="Makeup" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Makeup" value="Not Available">
                            <label for="Makeup">Makeup & Facial</label> 
                            @if($data1->Makeup=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Makeup" value="Available">
                            @endif
                            @if($data1->Makeup=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Makeup" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Bridesman') ? ' has-error' : '' }}">
                        <label for="Bridesman" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bridesman" value="Not Available">
                            <label for="Bridesman">Bridesman Designing</label> 
                            @if($data1->Bridesman=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Bridesman" value="Available">
                            @endif
                            @if($data1->Bridesman=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Bridesman" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Bridesmaid') ? ' has-error' : '' }}">
                        <label for="Bridesmaid" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bridesmaid" value="Not Available">
                            <label for="Bridesmaid">Bridesmaid Designing</label> 
                            @if($data1->Bridesmaid=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Bridesmaid" value="Available">
                            @endif
                            @if($data1->Bridesmaid=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Bridesmaid" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('HairStyle') ? ' has-error' : '' }}">
                        <label for="HairStyle" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="HairStyle" value="Not Available">
                            <label for="HairStyle">HairStyle</label> 
                            @if($data1->HairStyle=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="HairStyle" value="Available">
                            @endif
                            @if($data1->HairStyle=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="HairStyle" value="Available" >
                            @endif
                        </div>   
                        </div>
                  
                        <div class="modal-footer">
                            <div class="text-center">
                            
                                <button type="submit" class="btn btn-primary ">
                                    Save Changes
                                </button>
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                            </div>
                        </div>

      </form>
      
      </div>
  </div>
  </div>
   <!--==============model for edit features=================-->
    <!--==============model for change passsword=================-->
<div class="modal fade" id="password_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Change Password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form method="POST" action="{{URL('/ChangePassword')}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
             <form class="form-horizontal" method="POST" action="/changePW">
                            {{ csrf_field() }}

                            <div class="form-group row{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 col-form-label offset-1">Current Password</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 col-form-label offset-1">New Password</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new-password-confirm" class="col-md-4 col-form-label offset-1">Confirm New Password</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <div class="text-center">
                            
                                <button type="submit" class="btn btn-primary ">
                                    Change Password
                                </button>
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                            </div>
                        </div>
             
                  

      </form>
                
      </div>
  </div>
  </div>

<!--==============model for change passsword=================-->
 <!--==============model for  change main pic=================-->
 <div class="modal fade" id="mainpicchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Change Your Main Picture</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <center><img src="uploads/salon/{{$data1->Profile_Pic}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeSalonMainpic'.$data1->salonid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Profile_Pic') ? ' has-error' : '' }}">
                    <label for="Profile_Pic" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="Profile_Pic" class="form-control @error('Profile_Pic') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Profile_Pic')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                        <div class="modal-footer">
                        <div class="text-center">
                        
                            <button type="submit" class="btn btn-primary ">
                                Save Changes
                            </button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </form>        
            </div>
        </div>
    </div>

    <!--==============model for change main pic=================-->
     <!--==============model for  change recent pictures=================-->
     
  <div class="modal fade" id="modalChangepic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Edit Event Pictures</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="3">Picture</th>
                                <th width="5">Change Picture</th>
                                
                            </tr>
                       </thead>
                       <tbody>
                       
                            <tr>
                                <td> <img src="/uploads/salon/{{$data1->pic1}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Salonpic1'.$data1->salonid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic1" class="form-control @error('pic1') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/salon/{{$data1->pic2}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Salonpic2'.$data1->salonid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic2" class="form-control @error('pic2') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/salon/{{$data1->pic3}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Salonpic3'.$data1->salonid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic3" class="form-control @error('pic3') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/salon/{{$data1->pic4}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Salonpic4'.$data1->salonid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic4" class="form-control @error('pic4') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>
                            
                           
                           
                       </tbody>
                         </table>

                    

                    

                    <div class="modal-footer">
                        <div class="text-center">
                        
                            
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>         
            </div>
        </div>
    </div>

    <!--==============model for change event pictures=================-->
     <!--==============model for  add package=================-->
  <div class="modal fade" id="modalAddPackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add New Package</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{URL('/AddSalonPackage'.$data1->userid)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                                
                    <div class="form-group row{{ $errors->has('Package_Name') ? ' has-error' : '' }} control-group">
                        <label for="Package_Name" class="col-md-4 col-form-label offset-1">Package_Name :-</label>

                        
                            <input id="Package_Name" type="text" value="{{ old('Package_Name') }}" class="form-control @error('Package_Name') is-invalid @enderror col-md-10 offset-1" name="Package_Name"   title="fill this field with appropiate package name">

                            @error('Package_Name')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group row{{ $errors->has('Event_Type') ? ' has-error' : '' }}">
                        <label for="Event_Type" class="col-md-4 col-form-label offset-1">Event Type :-</label>

                        
                            <input id="Event_Type" type="text" value="{{ old('Event_Type') }}" class="form-control @error('Event_Type') is-invalid @enderror col-md-10 offset-1" name="Event_Type"  title="fill this field with event type of this package(wedding , party etc)">

                            @error('Event_Type')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                   
                   

                   

              

                    <div class="form-group row{{ $errors->has('Services') ? ' has-error' : '' }}">
                    
                        <label for="Services" class="col-md-4 col-form-label offset-1">Services :-</label>
                        
                        
                            <textarea name='Services' cols='50' rows='5' id='Services' class="form-control @error('Services') is-invalid @enderror col-md-10 offset-1" title="Fill this field with services that are include in  this package & some other description">{{ old('Services') }}</textarea>
                            @error('Services')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    
                    </div>

                    <div class="form-group row{{ $errors->has('Price') ? ' has-error' : '' }}">
                        <label for="Price" class="col-md-4 col-form-label offset-1">Price :-</label>

                        
                            <input id="Price" type="decimal" value="{{ old('Price') }}" class="form-control @error('Price') is-invalid @enderror col-md-10 offset-1" name="Price"   autocomplete="Price"  title="Fill this field with average price of the package">

                            @error('Price')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row{{ $errors->has('Pdf') ? ' has-error' : '' }}">
                            <label for="Pdf" class="col-md-4 col-form-label text-md-right">Pdf:-</label>
    
                            <div class="col-md-6">
                                <input type="file" name="Pdf" id="Pdf"  class="form-control @error('Pdf') is-invalid @enderror" >

                                @error('Pdf')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                    <div class="modal-footer">
                        <div class="text-center">
                        
                            <button type="submit" class="btn btn-primary ">
                                Add Package
                            </button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>         
            </div>
        </div>
    </div>

    <!--==============model for add Package=================-->
    <!--==============model for  edit package=================-->
     <!-- Modal -->
<div class="modal fade" id="modalEditPackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Edit Package Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form action="{{URL('/EditSalonPackage')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
                <div class="form-group">
		        	<label for="Package_Name1">Package Name</label>
		        	<input type="text" class="form-control" name="Package_Name1" id="Package_Name1">
	        	</div>

                <div class="form-group">
		        	<label for="Event_Type1">Event Type</label>
		        	<input type="text" class="form-control" name="Event_Type1" id="Event_Type1">
	        	</div>

                <div class="form-group">
	        		<label for="Services1">Services</label>
	        		<textarea name="Services1" id="Services1" cols="20" rows="5" id='Services1' class="form-control"></textarea>
	        	</div>

                <div class="form-group">
		        	<label for="Price1">Price</label>
		        	<input type="decimal" class="form-control" name="Price1" id="Price1" value="{{ old('Price1') }}">
	        	</div>
                <input type="hidden" id="id" name="id" >
	        	

                

                
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->

    <!--==============model for edit package=================-->
     <!--==============model for delete package=================-->
     
     <div class="modal fade" tabindex="-1" role="dialog" id="modalDeletePackage" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{URL('/DeleteSalonPackage')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
          <p>Do you want to delete package.All the details related to this package will be removed?</p>
                <input type="hidden" id="id" name="id" >
	     </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Confirm Delete</button>
	      </div>
      </form>
      
    </div>
  </div>
</div>

<!--==============model for delete package=================-->
<!--==============model for deactivate account=================-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDeleteAccount" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deactivte Account!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you want to deactivate your account .All the details related to your account will be removed. If you remove your account you need to register again to use our services.</p>
      </div>
      <div class="modal-footer">
        <a href="{{URL('/RemoveSalonAccount'.$data1->userid)}}"><button type="button" class="btn btn-primary">Confirm Action</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--==============model for deactivate account=================-->
       @endforeach
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/js/jquery-3.3.1.min.js"></script>
        <script src="js/js/popper.js"></script>
        <script src="js/js/bootstrap.min.js"></script>
        <script src="js/js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/js/mail-script.js"></script>
        <script src="js/js/theme.js"></script>
        @if ($errors->has('name')||$errors->has('email')||$errors->has('Salon_Name')||$errors->has('Address')||$errors->has('Contact_No')||$errors->has('Link')||$errors->has('Description'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Package_Name')||$errors->has('Event_Type')||$errors->has('Services')||$errors->has('Price')||$errors->has('Pdf'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalAddPackage").modal('show');
            });
        </script>
        @endif
        
        @if ($errors->has('current-password')||$errors->has('new-password')||$errors->has('new-password_confirmation'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#password_modal").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Profile_Pic'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mainpicchange").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('pic1')||$errors->has('pic2')||$errors->has('pic3')||$errors->has('pic4'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalChangepic").modal('show');
            });
        </script>
        @endif
       
        
<script>
  
  $('#modalEditPackage').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var packagename = button.data('packagename') 
      var services = button.data('services') 
      var price = button.data('price')
      var eventtype = button.data('eventtype')
      var pakid = button.data('pakid')
      var modal = $(this)
      modal.find('.modal-body #Package_Name1').val(packagename);
      modal.find('.modal-body #Services1').val(services);
      modal.find('.modal-body #Price1').val(price);
      modal.find('.modal-body #Event_Type1').val(eventtype);
      modal.find('.modal-body #id').val(pakid);
})
  
</script>

<script>
  
  $('#modalDeletePackage').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var pakid = button.data('pakid') 
     
      var modal = $(this)
      
      modal.find('.modal-body #id').val(pakid);
})
  
</script>

    </body>
</html>