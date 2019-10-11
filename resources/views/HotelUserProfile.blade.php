<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel-profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="cvportfolio/common-css/bootstrap.css" rel="stylesheet">
	
	<link href="cvportfolio/common-css/ionicons.css" rel="stylesheet">
	
	<link href="cvportfolio/common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="cvportfolio/01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="cvportfolio/01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
		.fill {object-fit: fill;}
		.contain {object-fit: contain;}
		.cover {object-fit: cover;}
		.scale-down {object-fit: scale-down;}
		.none {object-fit: none;}

		</style>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!------ Rating css---------->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
	@foreach($hotel as $hotel1)	
	<head>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
			<div class="container">
				<a class="navbar-brand text-white" href="{{ url('/') }}">
					Evora
				</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
                
					<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link text-white" href="/" ><br>Home<br><br></a></li> 
							 <!-- Authentication Links -->
							 @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
							 
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}<br></a>
                                </li>
                            @endif
                        	@else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#" aria-expanded="false" v-pre><br>
								
								<img src="uploads/hall/{{$hotel1->Main_logo}}" style="width:16px; height:16px; border-radius: 50%;" >
								{{ Auth::user()->name }} <br><br>
                                </a>

                            </li>
							<li class="nav-item">
									<a class="nav-link text-white" href="{{ route('logout') }}"><br>Logout
                                    <p onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                    </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
									</form>
									</a>
                            </li>
                        	@endguest
							</ul>
					</div>
			</div>
		</nav>
	</head>
	
	<section class="intro-section contain" style="background-image: url(uploads/hall/{{$hotel1->Cover_photo}})">
		<div class="container">
        
		
			<div class="row">
            
				
				<div class="offset-0 col-md-10 col-lg-4">
					<div class="intro">
						<div class="profile-img"><img src="uploads/hall/{{$hotel1->Main_logo}}" alt=""></div>
						<h2><b>{{$hotel1->Hotel_Name}}</b></h2>
						<ul class="information margin-tb-30">
							<li><b>ADDRESS : </b>{{$hotel1->Address}}</li>
							<li><b>TELEPHONE : </b>{{$hotel1->Contact_No}}</li>
                            <li><b>EMAIL : </b>{{$hotel1->email}}</li>
						</ul>
						<ul class="social-icons">
							@if($hotel1->instagram!=null)
							<li><a href="{{$hotel1->instagram}}"><i class="ion-social-instagram"></i></a></li>
                            @endif
                            @if($hotel1->facebook!=null)
							<li><a href="{{$hotel1->facebook}}"><i class="ion-social-facebook"></i></a></li>
							@endif
                            @if($hotel1->Link!=null)
							<li><a href="{{$hotel1->Link}}"><i class="ion-social-twitter"></i></a></li>
							@endif
						</ul>
                        <ul>
                        <button type="button" class="btn btn-primary"><a class="text-white" href="" data-toggle="modal" data-target="#modalEditInfo" >Edit Hotel</a></button>
                        <button type="button" class="btn btn-warning"><a class="text-white" href="" data-toggle="modal" data-target="#password_modal" >Change Password</a></button>
                        <br><br>
                        <a class="btn btn-success" href=""  data-toggle="modal" data-target="#mainpicchange">Change Main Picture</a>
                        <br><br>
                        <a class="btn btn-info text-white" href=""  data-toggle="modal" data-target="#coverpicchange">Change Cover Picture</a>
                        </ul>
					</div><!-- intro -->
                        
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
    
	
	
	
	
	<section class="about-section section">
		<div class="container">
			
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Description</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">{{$hotel1->Description}}</p>
				</div><!-- col-sm-8 -->
			<!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	@endforeach
	<section class="experience-section  section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Listing</b></h3>
					</div>
				</div><!-- col-sm-4 -->
			</div><!-- row -->

			<div class="row">
                @foreach($hall as $hall1)
                
                    <div class=" col-lg-4 col-md-8">
                        <div class="feature_item"><a class="btn btn-bg-yellow" href="{{URL('/HallUserProfile'.$hall1->recepid)}}">
                            <img src="uploads/hall/{{$hall1->Main_pic}}"  width="300" height="200 ">
                            <br><br>
                            <h3><b>{{$hall1->Hall_Name}}</h3></b>
                            <h5>{{$hall1->add}}</h5>
                            </a>
                        </div>
                    </div>
                
                @endforeach
			</div>
            
		</div><!-- container -->
	</section><!-- about-section -->
    <section class="quoto-section center-text" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
		<div class="container">
        <br><br>
    @foreach($hotel as $data1)
			<div class="row">
				<div class="col-sm-12">
					<h2 class="font-yellow"><b>If you have package details PDF</b></h2><br><br>
                    <form class="form-horizontal" method="POST" action="/AddNewHall">
                        {{ csrf_field() }}
                        <input type="hidden" id="hotelid" name="hotelid" value="{{$data1->hotelid}}">
                        <button type="submit"  class="btn text-white btn btn-outline-warning rounded-0 text-uppercase">Add Reception Hall</button>
                    </form>
                    <br><br>
				</div><!-- col-sm-12 -->
			</div><!-- row -->
		</div><!-- container --> @endforeach
	</section>
    <br><br>
    <div class="offset-10">
         <button type="button" class="btn btn-danger"><a class="text-white" href="" data-toggle="modal" data-target="#modalDeleteAccount">Deactivate Account</a></button>
    </div>
    <br><br>
   
    @foreach($hotel as $data1)	
	 <!--==============model for  edit info=================-->
     <div class="modal fade" id="modalEditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Hotel Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form method="POST" action="{{URL('/EditHotelDetails'.'/'.$data1->userid.'/'.$data1->hotelid)}}" enctype="multipart/form-data">
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
                        <div class="form-group row{{ $errors->has('Hotel_Name') ? ' has-error' : '' }}">
                            <label for="Hotel_Name" class="col-md-4 col-form-label offset-1">Hotel Name</label>

                           
                                <input id="Hotel_Name" type="text" class="form-control @error('Hotel_Name') is-invalid @enderror col-md-10 offset-1" name="Hotel_Name" value="{{ $data1->Hotel_Name }}"autocomplete="Hotel_Name" autofocus title="Fill this field with Hotel name">

                                @error('Hotel_Name')
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
                            <label for="Contact_No" class="col-md-4 col-form-label offset-1">Contact Number:-</label>

                           
                                <input id="Contact_No" type="text"  class="form-control @error('Contact_No') is-invalid @enderror col-md-10 offset-1" name="Contact_No" value="{{ $data1->Contact_No  }}" autocomplete="Contact_No"  title="Fill this field" >

                                @error('Contact_No')
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

                        <div class="form-group row{{ $errors->has('instagram') ? ' has-error' : '' }}">
                            <label for="instagram" class="col-md-4 col-form-label offset-1">instagram :-</label>

                           
                                <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror col-md-10 offset-1" name="instagram" value="{{ $data1->instagram  }}"   autocomplete="instagram"  title="Fill this field with link of a webpage that gives details about your services.(Instagram)">

                                @error('instagram')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 col-form-label offset-1">facebook :-</label>

                           
                                <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror col-md-10 offset-1" name="facebook" value="{{ $data1->facebook  }}"   autocomplete="facebook"  title="Fill this field with link of a webpage that gives details about your services (facebook).">

                                @error('facebook')
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
                <center><img src="uploads/hall/{{$data1->Main_logo}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeHotelMainpic'.$data1->hotelid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Main_logo') ? ' has-error' : '' }}">
                    <label for="Main_logo" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="Main_logo" class="form-control @error('Main_logo') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Main_logo')
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
     <!--==============model for  change cover pic=================-->
 <div class="modal fade" id="coverpicchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Change Your Cover Picture</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <center><img src="uploads/hall/{{$data1->Cover_photo}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeHotelCoverpic'.$data1->hotelid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Cover_photo') ? ' has-error' : '' }}">
                    <label for="Cover_photo" class="offset-1">Update Cover Picture :-</label>
                    <center><input type="file" name="Cover_photo" class="form-control @error('Cover_photo') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Cover_photo')
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

    <!--==============model for change cover pic=================-->
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
        <a href="{{URL('/RemoveHotelAccount'.$data1->userid)}}"><button type="button" class="btn btn-primary">Confirm Action</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--==============model for deactivate account=================-->
   @endforeach
	
	<footer class="site-footer" style="background-color:black;">
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
                        <a href="/contact" ><h3>Contact Us</h3></a>
                        </div>
                        
                    </aside>
                </div>
            </div>
        </div>
    	</footer>
	
	<!-- SCIPTS -->
	
	<script src="cvportfolio/common-js/jquery-3.2.1.min.js"></script>
	
	<script src="cvportfolio/common-js/tether.min.js"></script>
	
	<script src="cvportfolio/common-js/bootstrap.js"></script>
	
	<script src="cvportfolio/common-js/isotope.pkgd.min.js"></script>
	
	<script src="cvportfolio/common-js/jquery.waypoints.min.js"></script>
	
	<script src="cvportfolio/common-js/progressbar.min.js"></script>
	
	<script src="cvportfolio/common-js/jquery.fluidbox.min.js"></script>
	
	<script src="cvportfolio/common-js/scripts.js"></script>
	

	<script src="js/Rating.js"></script>
		<!-- Rating js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
        <script>
         @if ($errors->has('name')||$errors->has('email')||$errors->has('Hotel_Name')||$errors->has('Address')||$errors->has('Contact_No')||$errors->has('Link')||$errors->has('Description')||$errors->has('facebook')||$errors->has('instagram'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
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
        @if ($errors->has('Main_logo'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mainpicchange").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Cover_photo'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#coverpicchange").modal('show');
            });
        </script>
        @endif
        
</body>
</html>
