<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Evora-DJ/Band</title>
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
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
                                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li> 
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
                                <img src="uploads/music/{{$data1->Main_Logo}}" width="400" hight="600" alt="">
                            </div>
                             
                            <div class="personal_text">
                            <h3>{{$data1->Dj_Name}}</h3>
                                <ul class="list basic_info">
                                    <li><b>Contact Person :- </b>{{$data1->name}}</li>
                                    <li><b>ADDRESS :- </b>{{$data1->Address}}</li>
                                    <li><b>Contact_No :- </b>{{$data1->ContactNo}}</li>
                                    <li><b>email :- </b>{{$data1->email}}</li>
                                    <li><b>Link :- </b>{{$data1->Link}}</li>
                                    <li><b>Normal Playing Hours :- </b>{{$data1->Playing_Hrs}}</li>
                                    <li><b>Normal Cost :- </b>{{$data1->Payment}}</li>
                                    <li><b>Cost For Extra Hour :- </b>{{$data1->Extra_Cost}}</li>
                                    
                                    
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
                            
                            @if($data1->Get_Together=='Available')
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
                            @if($data1->Parties=='Available')
                            <tr>
                            Parties
                            </tr>
                            <br>
                            @endif
                            @if($data1->Beach_Party=='Available')
                            <tr>
                            Beach Party
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
                            @if($data1->Fire=='Available')
                            Fire Machine
                            <br>
                            @endif
                            @if($data1->Smoke=='Available')
                            Smoking Machine
                            <br>
                            @endif
                            @if($data1->Lights=='Available')
                            DJ Lights
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
								<a href="uploads/music/{{$data1->pic1}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/music/{{$data1->pic1}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/music/{{$data1->pic2}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/music/{{$data1->pic2}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/music/{{$data1->pic3}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/music/{{$data1->pic3}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/music/{{$data1->pic4}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/music/{{$data1->pic4}});"></div></a>
							</div>
                            
						</div>
                        <br>
                            
							<a class="offset-5 genric-btn primary" href="" data-toggle="modal" data-target="#modalChangepic">Change Recent Event Photos</a>
                            <br>
                            <br>
                            <div class="section-top-border">
						<h3 class="title_color">Available Packages</h3>
                            <a class="offset-1 genric-btn info" href="{{URL('/AddPhotographyPackage'.$data1->userid)}}" data-toggle="modal" data-target="#modalAddPackage">Add A Package</a>
                            <a class="offset-1 genric-btn warning" href="" data-toggle="modal" data-target="#addvedio">Upload Vedio</a>
                        </div>
                        @foreach($deto as $deto1)
                        <div class="personal_text" >
                            <div class="col-lg-4 col-md-6" style="border: 5px solid red;">
                                <div class="feature_item">
                                    
                                    <h4><b><font color="black">{{$deto1->Package_Name}}</font></b></h4>
                                    <ul class="list basic_info">
                                    <li><b>Event Type :- </b>{{$deto1->Hours}}</li>
                                    <li><b>Services :- </b>{{$deto1->Services}}</li>
                                    <li><b>Price :- </b> Rs.{{$deto1->Price}}</li>
                                    <li><a href="files/music/{{$deto1->Pdf}}"><img src="images/pdf.png" width="40" hight="40" alt="" ></a></li>
                                    <ul>
                                
                                
                                    <ul class="list basic_info">
                                    <a class="genric-btn primary" href="#" data-toggle="modal" data-target="#modalEditPackage">Edit</a></center>
                                    <a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeletePackage">Remove</a></center>
                                    
                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="section-top-border">
						<h3 class="title_color">Your Videos</h3>
                        </div>  
                        
                        @foreach($saha as $sahan)
                        <div class="personal_text" >
                            <div class="col-lg-5 col-md-6" style="border: 5px solid red;">
                                <div class="feature_item">
                                <h4><b><font color="black"><b>Video Name:-</b> {{$sahan->Video_Name}}</font></b></h3>
                                <video width="400" controls>
                                <source src="video/music/{{$sahan->Video}}" type="video/mp4">
                                <source src="mov_bbb.ogg" type="video/ogg">
                                </video>
                                <a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeletevideo">Delete</a></center>
                                </div>
                            </div>
                        </div>
                        @endforeach

                            <a class="offset-10 genric-btn danger" href="{{URL('/RemoveMusicAccount'.$data1->userid)}}">Deactivate Account</a>
                            
                            
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
      <form method="POST" action="{{URL('/EditMusicDetails'.'/'.$data1->userid.'/'.$data1->musicianid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label offset-1">Name :-</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-10 offset-1" name="name"  value="{{$data1->name}}" title="fill this field with Organization name or Person name">

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
                        <div class="form-group row{{ $errors->has('Dj_Name') ? ' has-error' : '' }}">
                            <label for="Dj_Name" class="col-md-4 col-form-label offset-1">DJ/Band Name</label>

                           
                                <input id="Dj_Name" type="text" class="form-control @error('Dj_Name') is-invalid @enderror col-md-10 offset-1" name="Dj_Name" value="{{ $data1->Dj_Name }}"autocomplete="Dj_Name" autofocus title="Fill this field with DJ name or Band name">

                                @error('Dj_Name')
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

                           
                                <input id="ContactNo" type="text"  class="form-control @error('ContactNo') is-invalid @enderror col-md-10 offset-1" name="ContactNo" value="{{ $data1->ContactNo  }}" autocomplete="ContactNo"  title="Fill this field" >

                                @error('ContactNo')
                                    <span class="invalid-feedback" role="alert">
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

                        <div class="form-group row{{ $errors->has('Playing_Hrs') ? ' has-error' : '' }}">
                            <label for="Playing_Hrs" class="col-md-6 col-form-label offset-1">Normal Playing Hours :-</label>

                            
                                <input id="Playing_Hrs" type="number" min="0" class="form-control @error('Playing_Hrs') is-invalid @enderror col-md-10 offset-1" name="Playing_Hrs" value="{{ $data1->Playing_Hrs  }}"   autocomplete="Playing_Hrs"  title="Fill this field with normal number of hours that you play in one event">

                                @error('Playing_Hrs')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group row{{ $errors->has('Payment') ? ' has-error' : '' }}">
                            <label for="Payment" class="col-md-6 col-form-label offset-1">Cost For Normal Hours :-</label>

                          
                                <input id="Payment" type="decimal" class="form-control @error('Payment') is-invalid @enderror col-md-10 offset-1" name="Payment" value="{{ $data1->Payment  }}"   autocomplete="Payment"  title="Fill this field  with  cost for normal hours">

                                @error('Payment')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group row{{ $errors->has('Extra_Cost') ? ' has-error' : '' }}">
                            <label for="Extra_Cost" class="col-md-4 col-form-label offset-1">Cost for Extra Hour :-</label>

                           
                                <input id="Extra_Cost" type="decimal" class="form-control @error('Extra_Cost') is-invalid @enderror col-md-10 offset-1" name="Extra_Cost" value="{{ $data1->Extra_Cost  }}"   autocomplete="Extra_Cost"  title="Fill this field with cost that you charge for and extra hour ">

                                @error('Extra_Cost')
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
      <form method="POST" action="{{URL('/EditMusicEvents'.$data1->eventid)}}" enctype="multipart/form-data">
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

                  <div class="form-group row{{ $errors->has('Beach_Party') ? ' has-error' : '' }}">
                  <label for="Beach_Party" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Beach_Party" value="Not Available">
                      <label for="Beach_Party">Beach Party</label> 
                      @if($data1->Beach_Party=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Beach_Party" value="Available" >
                      @endif
                      @if($data1->Beach_Party=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Beach_Party" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Parties') ? ' has-error' : '' }}">
                  <label for="Parties" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Parties" value="Not Available">
                      <label for="Parties">Parties</label> 
                      @if($data1->Parties=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Parties" value="Available" >
                      @endif
                      @if($data1->Parties=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Parties" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Get_Together') ? ' has-error' : '' }}">
                  <label for="Get_Together" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Get_Together" value="Not Available">
                      <label for="Get_Together">Get Together</label> 
                      @if($data1->Get_Together=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Get_Together" value="Available" >
                      @endif
                      @if($data1->Get_Together=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_Together" value="Available">
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
      <form method="POST" action="{{URL('/EditMusicFeatures'.$data1->musicianid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('Fire') ? ' has-error' : '' }}">
                        <label for="Fire" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Fire" value="Not Available">
                            <label for="Fire">Fire Machine</label>
                            @if($data1->Fire=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Fire" value="Available">
                            @endif
                            @if($data1->Fire=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Fire" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Smoke') ? ' has-error' : '' }}">
                        <label for="Smoke" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Smoke" value="Not Available">
                            <label for="Smoke">Smoke Machine</label> 
                            @if($data1->Smoke=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Smoke" value="Available">
                            @endif
                            @if($data1->Smoke=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Smoke" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Lights') ? ' has-error' : '' }}">
                        <label for="Lights" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Lights" value="Not Available">
                            <label for="Lights">DJ Lights</label> 
                            @if($data1->Lights=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Lights" value="Available">
                            @endif
                            @if($data1->Lights=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Lights" value="Available" >
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
                <center><img src="uploads/music/{{$data1->Main_Logo}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeMusicMainpic'.$data1->musicianid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Main_Logo') ? ' has-error' : '' }}">
                    <label for="Main_Logo" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="Main_Logo" class="form-control @error('Main_Logo') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Main_Logo')
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
                                <td> <img src="/uploads/music/{{$data1->pic1}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Musicpic1'.$data1->musicianid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic1" class="form-control @error('pic1') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/music/{{$data1->pic2}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Musicpic2'.$data1->musicianid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic2" class="form-control @error('pic2') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/music/{{$data1->pic3}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Musicpic3'.$data1->musicianid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic3" class="form-control @error('pic3') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/music/{{$data1->pic4}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/Musicpic4'.$data1->musicianid)}}" method="POST">
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
        @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
            });
        </script>
        @endif
    </body>
</html>