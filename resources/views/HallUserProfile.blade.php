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
    <header>
		<!-- container -->
	</header>
	
	@foreach($hall as $hall1)
	<section class="intro-section" style="background-image: url(uploads/hall/{{$hall1->Main_pic}})">
		<div class="container">
		
			<div class="row">
                <div class="container">
                    <div class="heading-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                
                            </div><!-- col-sm-4 -->
                        </div><!-- row -->
                    </div><!-- heading-wrapper -->
              
                    <div class=" ">
                        <div class="intro">
                            <h2><b>{{$hall1->Hall_Name}}</b></h2>
                            <ul class="information margin-tb-30">
                                <li><b>ADDRESS :- </b>{{$hall1->Address}}</li>
                            </ul>
                        </div><!-- intro -->
                    </div><!-- col-sm-8 -->
                </div>
			</div><!-- row -->
		</div><!-- container -->
        
        <div class="offset-5" >
            <button type="button" class="btn btn-primary"><a href="#">Edit Hall Details</a></button>
            <button type="button" class="btn btn-danger"><a href="#">Remove Hall</a></button>
            </div>
            
            
	</section><!-- intro-section -->
	
	

	
	<section class=" section">
		<div class="container">
			
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Description</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">{{$hall1->Description}}</p>
				</div><!-- col-sm-8 -->
			
		</div><!-- container -->
	</section><!-- about-section -->

	<section class=" section">
		<div class="container">
			
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Overview</b></h3>
					</div>
				</div><!-- col-sm-4 -->
		
            <div class="row">
                <div class="container">
                    <div class="heading-wrapper">
                        <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iconbox margin-b-30">
                                <h5 class="margin-tb-20"><b>Cost:-{{$hall1->Cost}}</b></h5>  
                            </div><!-- counter -->
                        </div><!-- col-md-4 -->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iconbox margin-b-30">
                                <h5 class="margin-tb-20"><b>Capacity:-{{$hall1->Capacity}}</b></h5>  
                            </div><!-- counter -->
                        </div><!-- col-md-4 -->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iconbox margin-b-30">
                                <h5 class="margin-tb-20"><b>Hall Type:-{{$hall1->Overview}}</b></h5>  
                            </div><!-- counter -->
                        </div>
						<div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iconbox margin-b-30">
                                <h5 class="margin-tb-20"><b>Area:-{{$hall1->Square_feet}}</b></h5>  
                            </div><!-- counter -->
                        </div>
                        </div><!-- row -->
                    </div><!-- heading-wrapper -->
                </div><!-- container -->
		    </div>
            
		</div><!-- container -->
        
	</section><!-- about-section -->

    <section class=" section">
		<div class="container">
			
                <div class="col-sm-4">
					<div class="heading">
						<h3><b>Features</b></h3>
					</div>
				</div><!-- col-sm-12 -->
                
				@if($hall1->projection=='Available')
                <div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin">
                        <img src="images/hall features/projection.jpg" width="42" height="42">
						<h5 class="margin-tb-20"><b>Projection</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-6 -->
				@endif

				@if($hall1->internet=='Available')
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/wifi.jpg"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Wireless Internet</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-4 -->
				@endif

				@if($hall1->parking=='Available')
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/parking.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Parking</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-4 -->
				@endif
				
				@if($hall1->security_camera=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/securitycamera.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Security Camera</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->security_personal=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/security personal.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Security Personal</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->reception_area=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/rec.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Reception Area</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Bar=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/bar.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Bar</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->garden=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/garden.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Garden</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->smoking_area=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/smoking.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Smoking Area</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->welcome_drinks=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/welcomedrink.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Welcome Drink</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Buffet=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/buffet.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Buffet</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Handicap_accessible=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/wheelchair.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Handicap accessible</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->outside_balcony=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/Varenda.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Varenda</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->inside_balcony=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/balcony.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Balcony</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->stage=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/hall features/stage.png"  width="42" height="42">
						<h5 class="margin-tb-20"><b>Stage</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif
				
			</div><!-- row -->
		</div><!-- container -->
        <div class="offset-9">
            <button type="button" class="btn btn-primary"><a href="#">Edit Hall Features</a></button>
            </div>
	</section><!-- progression-section -->


	
    <section class=" section">
		<div class="container">
			
                <div class="col-sm-4">
					<div class="heading">
						<h3><b>Table Arrangements</b></h3>
					</div>
				</div><!-- col-sm-12 -->
                
				@if($hall1->theatre=='Available')
                <div class="row">
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin">
                        <img src="images/table arrangements/Theatre1.jpg" width="80" height="100">
						<h5 class="margin-tb-20"><b>Theatre</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-4 -->
				@endif

				@if($hall1->U_shape=='Available')
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/Ushape1.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>U Shape</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-4 -->
				@endif
				
				@if($hall1->V_shape=='Available')
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/VShape.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>V Shape</b></h5>
						
					</div><!-- counter -->
				</div><!-- col-md-4 -->
				@endif

				@if($hall1->banquet=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/banquet.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Banquet</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->cabaret=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/caberet.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Caberet</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->classroom=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/Classroom.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Classroom</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Boardroom=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/Boardroom.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Boardroom</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->hallow_square=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/HallowSquare.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Hallow Square</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Herringbone=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/Herringbone.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Herringbone</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Top_table_springs=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/TopTable.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>TopTable & Springs</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->informal=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/informal.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Informal</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

				@if($hall1->Oval=='Available')
                <div class="col-sm-6 col-md-6 col-lg-3">
					<div class="iconbox margin-b-30">
                        <img src="images/table arrangements/Oval.jpg"  width="80" height="100">
						<h5 class="margin-tb-20"><b>Oval</b></h5>
						
					</div><!-- counter -->
				</div>
				@endif

                
				
			</div><!-- row -->
		</div><!-- container -->
        <div class="offset-9">
            <button type="button" class="btn btn-primary"><a href="#">Edit Table Arrangements</a></button>
            </div>
	</section><!-- progression-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>We will cover your</b></h3>
					</div>
				</div><!-- col-sm-4 -->
			</div><!-- row -->

			<div class="row">
				@if($hall1->Wedding=='Available')
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" >
						<img src="images/weddinghall.jpg"  width="300" height="200 ">
						<br><br>
						<h3><b>Wedding</h3></b>
                        
						</a>
					</div>
				</div>
				@endif

				@if($hall1->Party=='Available')
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" >
						<img src="images/partyhall.jpg"  width="300" height="200 ">
						<br><br>
						<h3><b>Parties</h3></b>
                        
						</a>
					</div>
				</div>
				@endif

				@if($hall1->Meeting=='Available')
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" >
						<img src="images/meetinghall.jpg"  width="300" height="200 ">
						<br><br>
						<h3><b>Meetings</h3></b>
                        
						</a>
					</div>
				</div>
				@endif

				@if($hall1->Professional_Event=='Available')
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" >
						<img src="images/professionalhall.jpg"  width="300" height="200 ">
						<br><br>
						<h3><b>Professional Events</h3></b>
                        
						</a>
					</div>
				</div>
				@endif

				@if($hall1->Corporate_event=='Available')
				<div class="offset-0 col-lg-4 col-md-6">
					<div class="feature_item"><a class="btn btn-bg-yellow" >
						<img src="images/coperateeventhall.jpg"  width="300" height="200 ">
						<br><br>
						<h3><b>Coperate Events</h3></b>
                        
						</a>
					</div>
				</div>
				@endif
			
			</div>

		</div><!-- container -->
        <div class="offset-9">
            <button type="button" class="btn btn-primary"><a href="#">Edit Hall Events</a></button>
            </div>
	</section>

	<section class="education-section section">
				<div class="colorlib-narrow-content">
                    
					<div class="container">
                    <div class="heading">
                        <h2>Events we recently covered</h2>
                    </div>
					    <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/hall/{{$hall1->pic1}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" >
                                    <img src="uploads/hall/{{$hall1->pic2}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/hall/{{$hall1->pic3}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/hall/{{$hall1->pic4}}" alt="IMage" class="img-fluid">
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>
                <div class="offset-9">
            <button type="button" class="btn btn-success"><a href="#">Edit Recent Pictures</a></button>
            </div>
        </section>
		@endforeach


			
				

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
