<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Hotel-profile</title>
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
	

	 <!-- Bootstrap core CSS -->
	 <link href="css/rating.css" rel="stylesheet">
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
                        <ul>
                        <button type="button" class="btn btn-primary"><a href="#" >Edit Hotel</a></button>
                        <button type="button" class="btn btn-warning"><a href="#" >Change Password</a></button>
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
	<section class="education-section section">
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
            <center><button type="button" class="btn btn-success"><a href="#" >Add Reception Hall</a></button></center>
            <div class="offset-10">
            <button type="button" class="btn btn-danger"><a href="#" >Deactivate Account</a></button>
            </div>
		</div><!-- container -->
	</section><!-- about-section -->

	
	
	<footer class="site-footer" style="background-color:black;">
			<div class="container">
				

				
				<div class="row pt-3 mt-3 text-center">
				<div class="col-md-12">
					<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Make your special day colourful<i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="http://localhost:8000" target="_blank" >Evora</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<br><br>
					</p>
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
