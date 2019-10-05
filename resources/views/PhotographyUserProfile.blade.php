<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Evora-Photography</title>
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
						<a class="navbar-brand logo_h text-white" href="/"><img src="#" alt="">Evora</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto offset-1">
                            @foreach($data as $data1)
                            <li class="nav-item active"><a class="nav-link" href="{{URL('/Photographyview'.$data1->userid)}}">
                            <i class="fa fa-eye">  View Your Profile</a></i>
                            </li> 
                            
                            <li class="nav-item active"><a class="nav-link" href="#"  v-pre style="position:relative;">
                                <p class="text-white"><img src="/uploads/photography/{{$data1->main_pic}}" style="width:32px; height:32px; border-radius: 50%;" >
                                {{ Auth::user()->name }}</p></a>
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
                                <img src="uploads/photography/{{$data1->main_pic}}" width="400" hight="600" alt="">
                            </div>
                             
                            <div class="personal_text">
                            <h3>{{$data1->Studio_Name}}</h3>
                                <ul class="list basic_info">
                                    <li><b>Contact Person :- </b>{{$data1->name}}</li>
                                    <li><b>ADDRESS :- </b>{{$data1->Address}}</li>
                                    <li><b>Contact_No :- </b>{{$data1->ContactNo}}</li>
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
                        
                        
                            @if($data1->Wedding=='Available')
                            <tr>
                            
                            Wedding
                            
                            </tr>
                            <br>
                            @endif
                            
                            @if($data1->Get_togather=='Available')
                            <tr>
                            
                            Get Together
                            
                            </tr>
                            <br>
                            @endif
                            @if($data1->Birthday=='Available')
                            <tr>
                            
                            Birthday
                            
                            </tr>
                            <br>
                            @endif
                            @if($data1->Competition=='Available')
                            <tr>
                            Competition
                            </tr>
                            <br>
                            @endif
                            @if($data1->Sports=='Available')
                            <tr>
                            Sports
                            </tr>
                            <br>
                            @endif
                            @if($data1->Trips=='Available')
                            <tr>
                            Trips
                            </tr>
                            <br>
                            @endif
                            @if($data1->Professional_Events=='Available')
                            <tr>
                            Professional Events
                            </tr>
                            @endif
                            
                            <tr>
                            <br>
                            <br>
                            <br>
                            <center><a class="genric-btn primary" href=""  data-toggle="modal" data-target="#modalEditForm">Edit Events</a></center>
                            </tr>
                            
                        </table>
        				</div>
        			</div>
                    
                   
					<div class="offset-3 col-lg-5 col-md-6" style="border: 15px solid green;">
        				<div class="feature_item bg- text-black">
                        <center><h4>Features</h4></center>
                            @if($data1->Wedding_Photography=='Available')
                            Wedding Photography
                            <br>
                            @endif
                            @if($data1->Preshoot_Vedio=='Available')
                            Preshoot Vedio
                            <br>
                            @endif
                            @if($data1->Wedding_Vedio=='Available')
                            Wedding Vedio
                            <br>
                            @endif
                            @if($data1->Album_Making=='Available')
                            Album Making
                            <br>
                            @endif
                            @if($data1->Wedding_Card=='Available')
                            Wedding Card
                            <br>
                            @endif
                            @if($data1->Drone=='Available')
                            Drone Coverage 
                            <br>
                            @endif
                            
                            <br><br><br>
                            <center><a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditFeatures">Edit Features</a></center>
                            
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
                            <a href="uploads/photography/{{$data1->pic1}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/photography/{{$data1->pic1}});"></div></a>
                        </div>
                        <div class="col-md-3">
                            <a href="uploads/photography/{{$data1->pic2}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/photography/{{$data1->pic2}});"></div></a>
                        </div>
                        <div class="col-md-3">
                            <a href="uploads/photography/{{$data1->pic3}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/photography/{{$data1->pic3}});"></div></a>
                        </div>
                        <div class="col-md-3">
                            <a href="uploads/photography/{{$data1->pic4}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/photography/{{$data1->pic4}});"></div></a>
                        </div>
                    </div>
                    <br>
                
                    <a class="offset-5 genric-btn primary" href="" data-toggle="modal" data-target="#modalChangepic">Change Recent Event Photos</a>
                    <br><br>
                </div>
            </div>
        </section>
        <section class="feature_area p_120">
            <div class="section-top-border">
                <h3 class="title_color">Available Packages</h3>
                <div class="container">
                    <div class="feature_inner row">
                        @foreach($deto as $deto1)
                        <div class="col-lg-6 col-md-8">
                            <div class="feature_item" >
                                <h4><b><font color="black">{{$deto1->Package_Name}}</font></b></h4>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="column offset-1">
                                            <ul class="list basic_info">
                                                <li><b>Event Type :- </b>{{$deto1->Event_Type}}</li>
                                                <li><b>Services :- </b>{{$deto1->Services}}</li>
                                                <li><b>Price :- </b> Rs.{{$deto1->Price}}</li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="column offset-1">
                                            <a href="files/photography/{{$deto1->Pdf}}" ><img src="images/pdf.png" width="80" hight="80" alt="" ></a>
                                        </div>
                                        <div class="column offset-4">
                                            <ul class="list basic_info">
                                            <li><a class="genric-btn primary" href="#" data-toggle="modal" data-target="#modalEditPackage" data-packagename="{{$deto1->Package_Name}}" data-pakid="{{$deto1->id}}" data-services="{{$deto1->Services}}" data-eventtype="{{$deto1->Event_Type}}" data-price="{{$deto1->Price}}">Edit</a><li><br>  
                                            <li><a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeletePackage" data-pakid="{{$deto1->id}}">Remove</a><li>
                                            </ul>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="py-5 upcoming-events" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="text-white">If you have package details PDF</h2>
                                <a href="{{URL('/AddPhotographyPackage'.$data1->userid)}}" data-toggle="modal" data-target="#modalAddPackage" 
                                class="text-white btn btn-outline-warning rounded-0 text-uppercase">Add A Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="section-top-border">
            <h3 class="title_color">Your Videos</h3> 
                <div class="container">
                    <div class="feature_inner row">
                        @foreach($saha as $sahan)
                        <div class="col-lg-5 col-md-8">
                            <div class="feature_item" >
                            <h4><b><font color="black">{{$sahan->Video_Name}}</font></b></h4>
                                <div class="media-body">
                                    <center>
                                    <video width="400" controls>
                                    <source src="video/photography/{{$sahan->Video}}" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                    </video>
                                    </center>
                                    <br>
                                    <center><a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeleteVideo" data-vid="{{$sahan->id}}">Delete</a></center>
                                </div>
                            </div>
                        </div>   
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="py-5 upcoming-events" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="text-white">If you have any video clips</h2>
                                <a class="text-white btn btn-outline-warning rounded-0 text-uppercase" href="#" data-toggle="modal"
                                data-target="#addvedio">Upload Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <a class="offset-10 genric-btn danger" href="" data-toggle="modal" data-target="#modalDeleteAccount">Deactivate Account</a>
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
      <form method="POST" action="{{URL('/EditPhotographyDetails'.'/'.$data1->userid.'/'.$data1->photographyid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
             <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label offset-1">Name :-</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-10 offset-1" name="name"  value="{{$data1->name}}" title="fill this field with organization name or person name  ">

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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group row{{ $errors->has('Studio_Name') ? ' has-error' : '' }}">
                            <label for="Studio_Name" class="col-md-4 col-form-label offset-1">Studio Name :-</label>

                          
                                <input id="Studio_Name" type="text" class="form-control @error('Studio_Name') is-invalid @enderror col-md-10 offset-1" name="Studio_Name" value="{{ $data1->Studio_Name }}"autocomplete="Studio_Name" autofocus title="Fill this field with Studio name or Group name">

                                @error('Studio_Name')
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

                        <div class="form-group row{{ $errors->has('ContactNo') ? ' has-error' : '' }}">
                            <label for="ContactNo" class="col-md-4 col-form-label offset-1">Contact Number :-</label>

                         
                                <input id="ContactNo" type="text"  class="form-control @error('ContactNo') is-invalid @enderror col-md-10 offset-1" name="ContactNo" value="{{ $data1->ContactNo  }}" autocomplete="ContactNo"  title="Fill this field." >

                                @error('ContactNo')
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
      <form method="POST" action="{{URL('/EditPhotographyEvents'.$data1->eventid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             
                  <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                  <label for="Wedding" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Wedding" value="Not Available">
                      <label for="Wedding">Wedding</label>
                      @if($data1->Wedding=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Wedding" value="Available" >
                      @endif
                      @if($data1->Wedding=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Get_togather') ? ' has-error' : '' }}">
                  <label for="Get_togather" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Get_togather" value="Not Available">
                      <label for="Get_togather">Get Togather</label> 
                      @if($data1->Get_togather=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Get_togather" value="Available" >
                      @endif
                      @if($data1->Get_togather=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_togather" value="Available" >
                      @endif
                  </div>   
                  </div>

                 

                  <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                  <label for="Birthday" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Birthday" value="Not Available">
                      <label for="Birthday">Birthday</label> 
                      @if($data1->Birthday=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Birthday" value="Available" >
                      @endif
                      @if($data1->Birthday=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Competition') ? ' has-error' : '' }}">
                  <label for="Competition" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Competition" value="Not Available">
                      <label for="Competition">Competition</label> 
                      @if($data1->Competition=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Competition" value="Available" >
                      @endif
                      @if($data1->Competition=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Competition" value="Available">
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Professional_Events') ? ' has-error' : '' }}">
                  <label for="Professional_Events" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Professional_Events" value="Not Available">
                      <label for="Professional_Events">Professional Events</label> 
                      @if($data1->Professional_Events=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Professional_Events" value="Available" >
                      @endif
                      @if($data1->Professional_Events=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_Events" value="Available">
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Sports') ? ' has-error' : '' }}">
                  <label for="Sports" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Sports" value="Not Available">
                      <label for="Sports">Sports</label> 
                      @if($data1->Sports=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Sports" value="Available" >
                      @endif
                      @if($data1->Sports=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Sports" value="Available">
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Trips') ? ' has-error' : '' }}">
                  <label for="Trips" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Trips" value="Not Available">
                      <label for="Trips">Trips</label> 
                      @if($data1->Trips=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Trips" value="Available" >
                      @endif
                      @if($data1->Trips=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Trips" value="Available">
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
    <div class="modal fade" id="modalEditFeatures" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Features</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <br>
      <form method="POST" action="{{URL('/EditPhotographyFeatures'.$data1->photographyid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('Wedding_Photography') ? ' has-error' : '' }}">
                        <label for="Wedding_Photography" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_Photography" value="Not Available">
                            <label for="Wedding_Photography">Wedding Photography</label>
                            @if($data1->Wedding_Photography=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Wedding_Photography" value="Available">
                            @endif
                            @if($data1->Wedding_Photography=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Photography" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Preshoot_Vedio') ? ' has-error' : '' }}">
                        <label for="Preshoot_Vedio" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Preshoot_Vedio" value="Not Available">
                            <label for="Preshoot_Vedio">Preshoot Vedio</label> 
                            @if($data1->Preshoot_Vedio=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Preshoot_Vedio" value="Available">
                            @endif
                            @if($data1->Preshoot_Vedio=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Preshoot_Vedio" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Wedding_Vedio') ? ' has-error' : '' }}">
                        <label for="Wedding_Vedio" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_Vedio" value="Not Available">
                            <label for="Wedding_Vedio">Wedding Vedio</label> 
                            @if($data1->Wedding_Vedio=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Wedding_Vedio" value="Available">
                            @endif
                            @if($data1->Wedding_Vedio=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Vedio" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Album_Making') ? ' has-error' : '' }}">
                        <label for="Album_Making" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Album_Making" value="Not Available">
                            <label for="Album_Making">Album Making</label> 
                            @if($data1->Album_Making=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Album_Making" value="Available">
                            @endif
                            @if($data1->Album_Making=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Album_Making" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Wedding_Card') ? ' has-error' : '' }}">
                        <label for="Wedding_Card" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_Card" value="Not Available">
                            <label for="Wedding_Card">Wedding Card</label> 
                            @if($data1->Wedding_Card=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Wedding_Card" value="Available">
                            @endif
                            @if($data1->Wedding_Card=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Card" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Drone') ? ' has-error' : '' }}">
                        <label for="Drone" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Drone" value="Not Available">
                            <label for="Drone">Drone Coverage</label> 
                            @if($data1->Drone=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Drone" value="Available">
                            @endif
                            @if($data1->Drone=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Drone" value="Available" >
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
                <center><img src="uploads/photography/{{$data1->main_pic}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangePhotographyMainpic'.$data1->photographyid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('main_pic') ? ' has-error' : '' }}">
                    <label for="main_pic" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="main_pic" class="form-control @error('main_pic') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('main_pic')
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
                                <td> <img src="/uploads/photography/{{$data1->pic1}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/photographypic1'.$data1->photographyid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic1" class="form-control @error('pic1') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/photography/{{$data1->pic2}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/photographypic2'.$data1->photographyid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic2" class="form-control @error('pic2') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/photography/{{$data1->pic3}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/photographypic3'.$data1->photographyid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic3" class="form-control @error('pic3') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/photography/{{$data1->pic4}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/photographypic4'.$data1->photographyid)}}" method="POST">
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
                <form method="POST" action="{{URL('/AddPhotographyPackage'.$data1->userid)}}" enctype="multipart/form-data">
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

                        
                            <input id="Event_Type" type="text" value="{{ old('Event_Type') }}" class="form-control @error('Event_Type') is-invalid @enderror col-md-10 offset-1" name="Event_Type"  title="fill this field with the event that this package belongs">

                            @error('Event_Type')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                   
                   

                   

              

                    <div class="form-group row{{ $errors->has('Services') ? ' has-error' : '' }}">
                    
                        <label for="Services" class="col-md-4 col-form-label offset-1">Services :-</label>
                        
                        
                            <textarea name='Services' cols='50' rows='5' id='Services' class="form-control @error('Services') is-invalid @enderror col-md-10 offset-1" title="Fill this field with services that are include in  this package (Table decoration, Entrance decoration ,Hall decoration etc) & some other description">{{ old('Services') }}</textarea>
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
      <form action="{{URL('/EditPhotographyPackage')}}" method="post">
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
     <!--==============model for  upload vedio=================-->
    <div class="modal fade" id="addvedio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Upload Your Vedio</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data" action="{{URL('/AddVedio'.$data1->userid)}}"  method="POST">
                        <div class="form-group row{{ $errors->has('Video_Name') ? ' has-error' : '' }}">
                            <label for="Video_Name" class="col-md-4 col-form-label offset-1">Video Name :-</label>
                            <input id="Video_Name" type="text" value="{{ old('Video_Name') }}" class="form-control @error('Video_Name') is-invalid @enderror col-md-10 offset-1" name="Video_Name"  title="Name for your video">
                            @error('Video_Name')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row{{ $errors->has('Video') ? ' has-error' : '' }}">
                            <label for="Video" class="offset-1">Upload Your Vedio :-</label>
                            <center><input type="file" name="Video" class="form-control @error('Video') is-invalid @enderror col-md-10 offset-1"></center>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @error('Video')
                                        <span class="invalid-feedback offset-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </div>
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ">
                                    Upload
                                </button>
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
        @endforeach
    <!--==============model for change upload vedio=================-->
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
      <form action="{{URL('/DeletePhotographyPackage')}}" method="post">
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
 <!--==============model for delete video=================-->
     
 <div class="modal fade" tabindex="-1" role="dialog" id="modalDeleteVideo" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{URL('/DeletePhotographyVideo')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
          <p>Do you want to delete video.All the details related to this video will be removed?</p>
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

<!--==============model for delete video=================-->
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
        <a href="{{URL('/RemovePhotographyAccount'.$data1->userid)}}"><button type="button" class="btn btn-primary">Confirm Action</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--==============model for deactivate account=================-->
       
       <footer class="footer_area p_30">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title"><br>
                        <a href="/aboutus" ><h3>About Us</h3></a>
                        </div>
                        <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Make your special day colourful<i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="http://localhost:8000" target="_blank" >Evora</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </aside>
                </div>
                <div class="col-lg-2 offset-4">
                    <aside class="f_widget social_widget">
                        
                        <div class="f_title"><br>
                        <a href="/#" ><h3>Contact Us</h3></a>
                        </div>
                        
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
        @if ($errors->has('name')||$errors->has('email')||$errors->has('Studio_Name')||$errors->has('Address')||$errors->has('ContactNo')||$errors->has('Link')||$errors->has('Description'))
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
        @if ($errors->has('main_pic'))
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
        @if ($errors->has('Video_Name')||$errors->has('Video'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#addvedio").modal('show');
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

<script>
  
  $('#modalDeleteVideo').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var vid = button.data('vid') 
     
      var modal = $(this)
      
      modal.find('.modal-body #id').val(vid);
})
  
</script>
    </body>
</html>