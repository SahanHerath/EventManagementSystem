<!DOCTYPE HTML>
<html lang="en">
<head>
@foreach($hotel as $hotel1)	
	<title>Hotel({{$hotel1->Hotel_Name}})-Evora</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="cvportfolio/common-css/bootstrap.css" rel="stylesheet">
	
	<link href="cvportfolio/common-css/ionicons.css" rel="stylesheet">
	
	<link href="cvportfolio/common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="cvportfolio/01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="cvportfolio/01-cv-portfolio/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	

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


		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<style>
		.fill {object-fit: fill;}
		.contain {object-fit: contain;}
		.cover {object-fit: cover;}
		.scale-down {object-fit: scale-down;}
		.none {object-fit: none;}
				
		span.pixel{
			vertical-align:-20px;
		


		li a:hover {
		background-color: #A397C6;
		
		}
		.navbar {
		
		overflow: hidden;
		position: fixed; 
		top: 0; 
		width: 100%; 
		}

		.main {
		margin-bottom: 30px; 
		}


		
		</style>

</head>
<body>
	<head>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
			<div class="container">
			
				<a class="navbar-brand text-white" href="{{ url('/') }}">
					Evora
				</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
                
					<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link text-white " href="/" ><span class="pixel">Home</span></a></li> 
							 <!-- Authentication Links -->
							 @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><span class="pixel">{{ __('Login') }}</span></a>
                            </li>
							 
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><span class="pixel">{{ __('Register') }}</span></a>
                                </li>
                            @endif
                        	@else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{URL('/Profile')}}" aria-expanded="false" v-pre><span class="pixel">
								
								<img src="uploads/hall/{{$hotel1->Main_logo}}" style="width:32px; height:32px; border-radius: 50%;" >
								{{ Auth::user()->name }}</span>
                                </a>

                            </li>
							<li class="nav-item">
									<a class="nav-link" href="{{ route('logout') }}"><span class="pixel text-white">
                                    <p onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </p></span>
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




	
	
	<section class="intro-section" style="background-image: url(uploads/hall/{{$hotel1->Cover_photo}})">
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
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	
	
	
	<section class="about-section section">
	<div class="column">
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
	</div>
	<div class="column">
	@foreach($award as $award1)
							@if($award1->Platinum==1)
                            <img src="uploads/Platinum.JPG" width="150" hight="150" class="offset-9" alt="">
                            @endif
							@if($award1->Gold==1)
                            <img src="uploads/Gold.JPG" width="150" hight="150" class="offset-9" alt="">
                            @endif
							@if($award1->Silver==1)
                            <img src="uploads/Silver.JPG" width="150" hight="150" class="offset-9" alt="">
                            @endif
							@if($award1->Bronze==1)
                            <img src="uploads/Bronze.JPG" width="150" hight="150" class="offset-9" alt="">
                            @endif
							@endforeach
	</div>
	</section><!-- about-section -->
	@endforeach
	<section class=" experience-section section">
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
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" href="{{URL('/HallView'.$hall1->id)}}">
						<img src="uploads/hall/{{$hall1->Main_pic}}"  width="300" height="200 ">
						<br><br>
						<h3><b>{{$hall1->Hall_Name}}</h3></b>
                        <h5>{{$hall1->Address}}</h5>
						</a>
					</div>
				</div>
			@endforeach
			</div>

		</div><!-- container -->
	</section><!-- about-section -->
	<br>
		<div class="offset-9">
		<a href="{{URL('/AddComplaint'.$hotel1->userid)}}"><button type="button" class="btn btn-danger">Complain About This Service Provider</button></a>
		</div>
	<section class="education-section section">
        	<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="heading">
							<h3><b>Rating</b></h3>
						</div>
					</div><!-- col-sm-4 -->
				</div><!-- row -->

				<form class="form-horizontal" method="POST" action="{{URL('/AddRating'.$hotel1->userid)}}" enctype="multipart/form-data">
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
							@if((($average>4.5) && ($average<5))||($average==4.5)||($average==5))
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
				<br><br>			
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

	

	
		<footer class="footer_area p_30"  style="background-color:black;">
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



</body>
</html>
