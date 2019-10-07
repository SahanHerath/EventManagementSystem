<!doctype html>
<html lang="en">
@foreach($data as $data1)
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Transport({{$data1->Transport_Service}})-Evora</title>
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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/css/style.css">
        <link rel="stylesheet" href="css/css/responsive.css">


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
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
								<!-- Authentication Links -->
								@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								
								@if (Route::has('register'))
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
								@endif
								@else
								<li class="nav-item">
									<a class="nav-link" href="{{URL('/Profile')}}" aria-expanded="false" v-pre>
									<img src="/uploads/transport/{{$data1->Main_pic}}" style="width:32px; height:32px; border-radius: 50%;" >
									{{ Auth::user()->name }} 
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
								@endguest
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="uploads/transport/{{$data1->Main_pic}}" width="500" hight="800" alt="">
							</div>
                            
							<div class="media-body">
                            <div class="row">
                            <div class="column">
								<div class="personal_text">
									<h6>Hello Everybody, we are</h6>
									<h3>{{$data1->Transport_Service	}}</h3>
									<h5>Contact Person :-{{$data1->name }}</h5>
                                    <br>
									<ul class="list basic_info">
										<li><a><i class="lnr lnr-home"></i> {{$data1->Address}}</a></li>
										<li><a><i class="lnr lnr-phone-handset"></i>{{$data1->Contact_No}}</a></li>
										<li><a><i class="lnr lnr-envelope"></i> {{$data1->email}}</a></li>
										<li><a href="{{$data1->Link}}"><i class="lnr lnr-earth" ></i>{{$data1->Link}}</a></li>
                                        <img src="uploads/Gold.jpg" class="offset-2" width="200" hight="300" alt="">
									</ul>
								</div>
							</div>
							<div class="column" >
                            <img src="uploads/Platinum.JPG" width="150" hight="150" class="offset-9" alt="">
                            </div>
                            </div>    
							</div>
                            
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
                <div class="welcome_text">
                    <h4>What we are doing?</h4>
                    <p>{{$data1->Description}}</p>
                    </div>		  		
        	</div>
        </section>
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Type of vehicles we have</h2>
        		</div>
        		<div class="feature_inner row">
                    @if($data1->luxury=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<img src="images/wedding profile1.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>luxury collection</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  we provide you to luxury cars for your wedding contact us for more details.
                            <br>
        				</div>
        			</div>
                    @endif
                    @if($data1->classic=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <img src="images/wedding profile2.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>classic collection</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  We have rare classic collection, you can choose classic car for your wedding.
                           
                            <br>
                            
        				</div>
        			</div>
                    @endif
                    @if($data1->vintage=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/wedding profile3.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>vintage collection</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  If you are looking vintage series for your location contact us.
                            <br>
                        </div>
        			</div>
                    @endif
                    @if($data1->horse_cart=="Available")
					<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/wedding profile4.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>horse carts</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  horse rides to your wedding.
                            <br>
                        </div>
        			</div>
                    @endif
                    @if($data1->air=="Available")
					<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/wedding profile5.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>air</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  if you are looking helicopter,sea plane for your memorable day contact us.
                            <br>
                        </div>
        			</div>
                    @endif
                    @if($data1->travelling_coach=="Available")
					<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/wedding profile6.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>travelling coach</h4>
                            <span class="lnr lnr-checkmark-circle"></span>  35,50,50+ seats private coaches available.
                            <br>
                        </div>
        			</div>
                    @endif
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Home Gallery Area =================-->
        
        <section class="welcome_area p_120">
				<div class="colorlib-narrow-content">
                    
					<div class="container">
                    <div class="main_title">
                        <h2>Events we recently covered</h2>
                    </div>
					    <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/transport/{{$data1->pic1}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" >
                                    <img src="uploads/transport/{{$data1->pic2}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/transport/{{$data1->pic3}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/transport/{{$data1->pic4}}" alt="IMage" class="img-fluid">
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>
			
        </section>
        @endforeach
		<section class="feature_area p_120" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
			<div class="main_title">
				<h2><a class="text-white">Available Packages</a></h2>
			</div>
		
			<div class="container">
				<div class="feature_inner row">
				@foreach($dec as $dec1)
					
					<div class="col-lg-6 col-md-8">
						<div class="feature_item" >
							<h4><b><font color="black">{{$dec1->Package_Name}}</font></b></h4>
							<div class="media-body">
								<div class="row">
									<div class="column offset-1">
										<ul class="list basic_info">
										<li><img src="uploads/transport/{{$dec1->picture}}" width="200" hight="200" alt="" ></li>
										<li><b>Transport type :- </b>{{$dec1->Transport_type}}</li>
										<li><b>vehicle :- </b> {{$dec1->vehicle}}</li>
										<li><b>Decoration :- </b>{{$dec1->decoration}}</li>
										<li><b>Driver :- </b> {{$dec1->driver}}</li>
										<li><b>Price :- </b>{{$dec1->Price}}</li>
										<ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
				@endforeach
				</div>
			</div>
		</section>
        <!--================End Home Gallery Area =================-->
        

		<section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Rating</h2>
        		</div>

				<form class="form-horizontal" method="POST" action="{{URL('/AddRating'.$data1->userid)}}" enctype="multipart/form-data">
                	{{ csrf_field() }}

					<div class="form-group">
						<label for="user_name">Username</label>
						<input type="text" class="form-control" name="user_name" id="user_name">
					</div>

					<div class="form-group">
						<label for="Email">Email</label>
						<input type="email" class="form-control" name="Email" id="Email">
					</div>

					<div class="form-group">
						<label for="Comment">Comment</label>
						<textarea name="Comment" id="Comment" cols="20" rows="5" id='Comment' class="form-control"></textarea>
					</div>

					<div class="form-group">
					<label>Add User Image(Optional)</label>
						<input type="file" name="image" class="form-control @error('image') is-invalid @enderror col-md-12">
					</div>

					<div class="form-group" id="rating-ability-wrapper">
						<label class="control-label" for="rating">
						<span class="field-label-header">What is the rating you are wish to give to this DJ/Band?</span><br>
						<span class="field-label-info"></span>
						<input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
						</label>
						<h2 class="bold rating-header" style="">
						<span class="selected-rating">0</span><small> / 5</small>
						</h2>
						<button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
							<i class="fa fa-star" aria-hidden="true"></i>
						</button>
						<button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
							<i class="fa fa-star" aria-hidden="true"></i>
						</button>
						<button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
							<i class="fa fa-star" aria-hidden="true"></i>
						</button>
						<button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
							<i class="fa fa-star" aria-hidden="true"></i>
						</button>
						<button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
							<i class="fa fa-star" aria-hidden="true"></i>
						</button>
					</div>

					<div class="form-group row mb-0">
                            <div class="col-md-6 offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit User Review
                                </button>
                            </div>
                    </div>
				</form>
        	</div>
			<br>
			<br>
			<br>
			<div class="container">
    			
				<div class="row">
					<div class="col-sm-5">
						<div class="rating-block">
							<h4>Average user rating</h4>
							<h2 class="bold padding-bottom-7">{{$average}} <small>/ 5</small></h2>
							<h4><small>from {{$all}} votes</small></h4>
							@if(($average>0) && ($average<1) && ($average==0))
							<button type="#" class="btnrating btn btn-default btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
							@if((($average>0.5) && ($average<1.5))||($average==1.5))
							<button type="#" class="btnrating btn btn-warning btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
							@if((($average>1.5) && ($average<2.5))||($average==1.5))
							<button type="#" class="btnrating btn btn-warning btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
							@if((($average>2.5) && ($average<3.5))||($average==2.5))
							<button type="#" class="btnrating btn btn-warning btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
							@if((($average>3.5) && ($average<4.5))||($average==3.5))
							<button type="#" class="btnrating btn btn-warning btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-default btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
							@if((($average>4.5) && ($average<5))||($average==4.5))
							<button type="#" class="btnrating btn btn-warning btn-lg"  aria-label="Left Align">
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button  class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							<button class="btnrating btn btn-warning btn-lg" >
								<i class="fa fa-star" ></i>
							</button>
							@endif
						</div>
					</div>
					
					<div class="col-sm-3">
						<h4>Rating breakdown</h4>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
								<div class="w3-container w3-green w3-center" role="progressbar" aria-valuenow="{{$five}}" aria-valuemin="0" aria-valuemax="{{$all}}" style="width: {{$precentage5}}%">
									<span class="sr-only">{{$precentage5}}</span>
								</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{$five}}</div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
								<div class="w3-container w3-blue" role="progressbar" aria-valuenow="{{$four}}" aria-valuemin="0" aria-valuemax="{{$all}}" style="width: {{$precentage4}}%">
									<span class="sr-only">{{$precentage4}}</span>
								</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{$four}}</div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
								<div class="w3-container w3-yellow" role="progressbar" aria-valuenow="{{$three}}" aria-valuemin="0" aria-valuemax="{{$all}}" style="width: {{$precentage3}}%">
									<span class="sr-only">{{$precentage3}}</span>
								</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{$three}}</div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
								<div class="w3-container w3-orange" role="progressbar" aria-valuenow="{{$two}}" aria-valuemin="0" aria-valuemax="{{$all}}" style="width: {{$precentage2}}%">
									<span class="sr-only">{{$precentage2}}</span>
								</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{$two}}</div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
								<div class="w3-container w3-red" role="progressbar" aria-valuenow="{{$one}}" aria-valuemin="0" aria-valuemax="{{$all}}" style="width:{{$precentage1}}%">
									<span class="sr-only">{{$precentage1}}</span>
								</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{$one}}</div>
						</div>
					</div>			
				</div>			
				@foreach($rate as $rate1)
				<div class="row">
					<div class="col-sm-7">
						<hr/>
						<div class="review-block">
							<div class="row">
								<div class="col-sm-3">
									<img src="/uploads/avatar/{{$rate1->image}}" class="img-rounded" height="50" width="50">
									<div class="review-block-name"><font color="red"><a href="#">{{$rate1->user_name}}</a></font></div>
									<div class="review-block-date">{{$rate1->created_at}}<br/></div>
								</div>
								<div class="col-sm-9">
									@if($rate1->rating==0)
									<div class="review-block-rate">
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									@if($rate1->rating==1)
									<div class="review-block-rate">
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									@if($rate1->rating==2)
									<div class="review-block-rate">
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									@if($rate1->rating==3)
									<div class="review-block-rate">
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									@if($rate1->rating==4)
									<div class="review-block-rate">
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									@if($rate1->rating==5)
									<div class="review-block-rate">
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
										<span class="fa fa-star" aria-hidden="true"></span>
										</button>
									</div>
									@endif
									<div class="review-block-title"><b>{{$rate1->Email}}</b></div>
									<div class="review-block-description">{{$rate1->Comment}}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div> <!-- /container -->
        </section>
        
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


        <script src="js/Rating.js"></script>
		<!-- Rating js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>