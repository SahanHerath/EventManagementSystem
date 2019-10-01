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
        
        <div class="offset-4" >
            <button type="button" class="btn btn-primary"><a href="" data-toggle="modal" data-target="#modalEditInfo">Edit Hall Details</a></button>
            <button type="button" class="btn btn-danger"><a href="{{URL('/RemoveHall'.$hall1->recepid)}}">Remove Hall</a></button>
            <button type="button" class="btn btn-info"><a href="" data-toggle="modal" data-target="#mainpicchange">Change Main Picture</a></button>
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
                                <h5 class="margin-tb-20"><b>Hall Type:-  @if($hall1->Overview=='InAndOut')
                                                                            Indoor & Outdoor</b></h5>
                                                                             @endif  

                                                                             @if($hall1->Overview=='Indoor')
                                                                            Indoor</b></h5>
                                                                             @endif 

                                                                             @if($hall1->Overview=='Outdoor')
                                                                            Outdoor</b></h5>
                                                                             @endif 
                            </div><!-- counter -->
                        </div>
						<div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="iconbox margin-b-30">
                                <h5 class="margin-tb-20"><b>Area:-{{$hall1->Square_feet}} square feet</b></h5>  
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
            <button type="button" class="btn btn-primary"><a href="" data-toggle="modal" data-target="#modalEditFeature">Edit Hall Features</a></button>
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
            <button type="button" class="btn btn-primary"><a href="" data-toggle="modal" data-target="#modalEditTable">Edit Table Arrangements</a></button>
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
            <button type="button" class="btn btn-primary"><a href="" data-toggle="modal" data-target="#modalEditForm">Edit Hall Events</a></button>
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
      <form method="POST" action="{{URL('/EditHallDetails'.$hall1->recepid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
                        

                        
                        <div class="form-group row{{ $errors->has('Hall_Name') ? ' has-error' : '' }}">
                            <label for="Hall_Name" class="col-md-4 col-form-label offset-1">Hall Name</label>

                           
                                <input id="Hall_Name" type="text" class="form-control @error('Hall_Name') is-invalid @enderror col-md-10 offset-1" name="Hall_Name" value="{{ $hall1->Hall_Name }}"autocomplete="Hall_Name" autofocus title="Fill this field with Hotel name">

                                @error('Hall_Name')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address" class="col-md-4 col-form-label offset-1">Address :-</label>

                         
                                <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror col-md-10 offset-1" name="Address"   value="{{ $hall1->Address  }}"  autocomplete="Address" title="Fill this field with Address">

                                @error('Address')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group row{{ $errors->has('Cost') ? ' has-error' : '' }}">
                            <label for="Cost" class="col-md-4 col-form-label offset-1">Cost For Hall:-</label>

                           
                                <input id="Cost" type="decimal"  class="form-control @error('Cost') is-invalid @enderror col-md-10 offset-1" name="Cost" value="{{ $hall1->Cost  }}" autocomplete="Cost"  title="Fill this field" >

                                @error('Cost')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group row{{ $errors->has('Capacity') ? ' has-error' : '' }}">
                            <label for="Capacity" class="col-md-4 col-form-label offset-1">Capacity :-</label>

                           
                                <input id="Capacity" type="number" min="0" class="form-control @error('Capacity') is-invalid @enderror col-md-10 offset-1" name="Capacity" value="{{ $hall1->Capacity }}"   autocomplete="Capacity"  title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc. ">

                                @error('Capacity')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row{{ $errors->has('Square_feet') ? ' has-error' : '' }}">
                            <label for="Square_feet" class="col-md-4 col-form-label offset-1">Square Feet :-</label>

                           
                                <input id="Square_feet" type="decimal" class="form-control @error('Square_feet') is-invalid @enderror col-md-10 offset-1" name="Square_feet" value="{{ $hall1->Square_feet  }}"   autocomplete="Square_feet"  title="Fill this field with link of a webpage that gives details about your services.(Instagram)">

                                @error('Square_feet')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row{{ $errors->has('Overview') ? ' has-error' : '' }}">
                            <label for="Overview" class="col-md-6 col-form-label offset-1">Overview :-</label>
                            
                          
                                <select id="Overview"  name="Overview" value="{{ old('Overview') }}" class="form-control @error('Overview') is-invalid @enderror col-md-10 offset-1" title="Select the type">
                                    @if($hall1->Overview=='Indoor')
                                    <option value="Indoor"  selected>Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="InAndOut">Indoor & Outdoor</option>
                                    @endif
                                    @if($hall1->Overview=='Outdoor')
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor"  selected>Outdoor</option>
                                    <option value="InAndOut">Indoor & Outdoor</option>
                                    @endif
                                    @if($hall1->Overview=='InAndOut')
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="InAndOut"  selected>Indoor & Outdoor</option>
                                    @endif
                                    
                                </select>
                                @error('Overview')
                                    <span class="invalid-feedback offset-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        

                        

                        

                        <div class="form-group row{{ $errors->has('Description') ? ' has-error' : '' }}">
                        
                            <label for="Description" class="col-md-4 col-form-label offset-1">Description :-</label>
                            
                         
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror col-md-10 offset-1" title="Fill this area with the description about your service. You can include what are your specialities other details.">{{$hall1->Description }}</textarea>
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
      
      <form method="POST" action="{{URL('/EditHallFeatures'.$hall1->featureid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('projection') ? ' has-error' : '' }}">
                        <label for="projection" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="projection" value="Not Available">
                            <label for="projection">projection</label>
                            @if($hall1->projection=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="projection" value="Available">
                            @endif
                            @if($hall1->projection=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="projection" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('internet') ? ' has-error' : '' }}">
                        <label for="internet" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="internet" value="Not Available">
                            <label for="internet">Wireless Internet</label> 
                            @if($hall1->internet=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="internet" value="Available">
                            @endif
                            @if($hall1->internet=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="internet" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('parking') ? ' has-error' : '' }}">
                        <label for="parking" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="parking" value="Not Available">
                            <label for="parking">Parking</label> 
                            @if($hall1->parking=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="parking" value="Available">
                            @endif
                            @if($hall1->parking=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="parking" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('security_camera') ? ' has-error' : '' }}">
                        <label for="security_camera" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="security_camera" value="Not Available">
                            <label for="security_camera">Security Camera</label> 
                            @if($hall1->security_camera=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="security_camera" value="Available">
                            @endif
                            @if($hall1->security_camera=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="security_camera" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('security_personal') ? ' has-error' : '' }}">
                        <label for="security_personal" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="security_personal" value="Not Available">
                            <label for="security_personal">Security Personal</label> 
                            @if($hall1->security_personal=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="security_personal" value="Available">
                            @endif
                            @if($hall1->security_personal=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="security_personal" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('reception_area') ? ' has-error' : '' }}">
                        <label for="reception_area" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="reception_area" value="Not Available">
                            <label for="reception_area">Reception Area</label> 
                            @if($hall1->reception_area=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="reception_area" value="Available">
                            @endif
                            @if($hall1->reception_area=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="reception_area" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Bar') ? ' has-error' : '' }}">
                        <label for="Bar" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Bar" value="Not Available">
                            <label for="Bar">Bar</label> 
                            @if($hall1->Bar=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Bar" value="Available">
                            @endif
                            @if($hall1->Bar=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Bar" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('garden') ? ' has-error' : '' }}">
                        <label for="garden" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="garden" value="Not Available">
                            <label for="garden">Garden</label> 
                            @if($hall1->garden=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="garden" value="Available">
                            @endif
                            @if($hall1->garden=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="garden" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('smoking_area') ? ' has-error' : '' }}">
                        <label for="smoking_area" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="smoking_area" value="Not Available">
                            <label for="smoking_area">Smoking Area</label> 
                            @if($hall1->smoking_area=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="smoking_area" value="Available">
                            @endif
                            @if($hall1->smoking_area=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="smoking_area" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('welcome_drinks') ? ' has-error' : '' }}">
                        <label for="welcome_drinks" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="welcome_drinks" value="Not Available">
                            <label for="welcome_drinks">welcome Drinks</label> 
                            @if($hall1->welcome_drinks=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="welcome_drinks" value="Available">
                            @endif
                            @if($hall1->welcome_drinks=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="welcome_drinks" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Buffet') ? ' has-error' : '' }}">
                        <label for="Buffet" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Buffet" value="Not Available">
                            <label for="Buffet">Buffet</label> 
                            @if($hall1->Buffet=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Buffet" value="Available">
                            @endif
                            @if($hall1->Buffet=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Buffet" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Handicap_accessible') ? ' has-error' : '' }}">
                        <label for="Handicap_accessible" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Handicap_accessible" value="Not Available">
                            <label for="Handicap_accessible">Handicap Accessible</label> 
                            @if($hall1->Handicap_accessible=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Handicap_accessible" value="Available">
                            @endif
                            @if($hall1->Handicap_accessible=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Handicap_accessible" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('outside_balcony') ? ' has-error' : '' }}">
                        <label for="outside_balcony" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="outside_balcony" value="Not Available">
                            <label for="outside_balcony">Varenda</label> 
                            @if($hall1->outside_balcony=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="outside_balcony" value="Available">
                            @endif
                            @if($hall1->outside_balcony=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="outside_balcony" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('inside_balcony') ? ' has-error' : '' }}">
                        <label for="inside_balcony" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="inside_balcony" value="Not Available">
                            <label for="inside_balcony">Balcony</label> 
                            @if($hall1->inside_balcony=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="inside_balcony" value="Available">
                            @endif
                            @if($hall1->inside_balcony=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="inside_balcony" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('stage') ? ' has-error' : '' }}">
                        <label for="stage" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="stage" value="Not Available">
                            <label for="stage">Stage</label> 
                            @if($hall1->stage=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="stage" value="Available">
                            @endif
                            @if($hall1->stage=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="stage" value="Available" >
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
     <!--==============model for edit features=================-->
     <div class="modal fade" id="modalEditTable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Your Table Arrangements </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <br>
      
      <form method="POST" action="{{URL('/EditHallArrangement'.$hall1->arrangeid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('theatre') ? ' has-error' : '' }}">
                        <label for="theatre" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="theatre" value="Not Available">
                            <label for="theatre">Theatre</label>
                            @if($hall1->theatre=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="theatre" value="Available">
                            @endif
                            @if($hall1->theatre=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="theatre" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('U_shape') ? ' has-error' : '' }}">
                        <label for="U_shape" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="U_shape" value="Not Available">
                            <label for="U_shape">U-shape</label> 
                            @if($hall1->U_shape=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="U_shape" value="Available">
                            @endif
                            @if($hall1->U_shape=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="U_shape" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('V_shape') ? ' has-error' : '' }}">
                        <label for="V_shape" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="V_shape" value="Not Available">
                            <label for="V_shape">V-Shape</label> 
                            @if($hall1->V_shape=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="V_shape" value="Available">
                            @endif
                            @if($hall1->V_shape=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="V_shape" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('classroom') ? ' has-error' : '' }}">
                        <label for="classroom" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="classroom" value="Not Available">
                            <label for="classroom">Classroom</label> 
                            @if($hall1->classroom=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="classroom" value="Available">
                            @endif
                            @if($hall1->classroom=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="classroom" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('hallow_square') ? ' has-error' : '' }}">
                        <label for="hallow_square" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="hallow_square" value="Not Available">
                            <label for="hallow_square">Hallow Square</label> 
                            @if($hall1->hallow_square=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="hallow_square" value="Available">
                            @endif
                            @if($hall1->hallow_square=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="hallow_square" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Boardroom') ? ' has-error' : '' }}">
                        <label for="Boardroom" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Boardroom" value="Not Available">
                            <label for="Boardroom">Boardroom</label> 
                            @if($hall1->Boardroom=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Boardroom" value="Available">
                            @endif
                            @if($hall1->Boardroom=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Boardroom" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Oval') ? ' has-error' : '' }}">
                        <label for="Oval" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Oval" value="Not Available">
                            <label for="Oval">Oval</label> 
                            @if($hall1->Oval=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Oval" value="Available">
                            @endif
                            @if($hall1->Oval=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Oval" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Herringbone') ? ' has-error' : '' }}">
                        <label for="Herringbone" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Herringbone" value="Not Available">
                            <label for="Herringbone">Herringbone</label> 
                            @if($hall1->Herringbone=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Herringbone" value="Available">
                            @endif
                            @if($hall1->Herringbone=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Herringbone" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Top_table_springs') ? ' has-error' : '' }}">
                        <label for="Top_table_springs" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Top_table_springs" value="Not Available">
                            <label for="Top_table_springs">Top Table Springs</label> 
                            @if($hall1->Top_table_springs=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="Top_table_springs" value="Available">
                            @endif
                            @if($hall1->Top_table_springs=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="Top_table_springs" value="Available" >
                            @endif
                        </div>   
                        </div>

                        

                        <div class="form-group row{{ $errors->has('banquet') ? ' has-error' : '' }}">
                        <label for="banquet" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="banquet" value="Not Available">
                            <label for="banquet">Banquet</label> 
                            @if($hall1->banquet=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="banquet" value="Available">
                            @endif
                            @if($hall1->banquet=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="banquet" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('cabaret') ? ' has-error' : '' }}">
                        <label for="cabaret" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="cabaret" value="Not Available">
                            <label for="cabaret">Cabaret</label> 
                            @if($hall1->cabaret=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="cabaret" value="Available">
                            @endif
                            @if($hall1->cabaret=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="cabaret" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('informal') ? ' has-error' : '' }}">
                        <label for="informal" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="informal" value="Not Available">
                            <label for="informal">Informal</label> 
                            @if($hall1->informal=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" checked name="informal" value="Available">
                            @endif
                            @if($hall1->informal=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:25px; height:25px;" name="informal" value="Available" >
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
      <form method="POST" action="{{URL('/EditHallEvents'.$hall1->eventid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             
                  <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                  <label for="Wedding" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Wedding" value="Not Available">
                      <label for="Wedding">Wedding</label>
                      @if($hall1->Wedding=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Wedding" value="Available" >
                      @endif
                      @if($hall1->Wedding=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Meeting') ? ' has-error' : '' }}">
                  <label for="Meeting" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Meeting" value="Not Available">
                      <label for="Meeting">Meeting</label> 
                      @if($hall1->Meeting=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Meeting" value="Available" >
                      @endif
                      @if($hall1->Meeting=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Meeting" value="Available" >
                      @endif
                  </div>   
                  </div>

                 

                  <div class="form-group row{{ $errors->has('Party') ? ' has-error' : '' }}">
                  <label for="Party" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Party" value="Not Available">
                      <label for="Party">Party</label> 
                      @if($hall1->Party=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Party" value="Available" >
                      @endif
                      @if($hall1->Party=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Corporate_event') ? ' has-error' : '' }}">
                  <label for="Corporate_event" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Corporate_event" value="Not Available">
                      <label for="Corporate_event">Corporate Event</label> 
                      @if($hall1->Corporate_event=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Corporate_event" value="Available" >
                      @endif
                      @if($hall1->Corporate_event=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available">
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Professional_Event') ? ' has-error' : '' }}">
                  <label for="Professional_Event" class="col-md-4"></label>   
                  <div class="col-md-4 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Professional_Event" value="Not Available">
                      <label for="Professional_Event">Professional Events</label> 
                      @if($hall1->Professional_Event=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Professional_Event" value="Available" >
                      @endif
                      @if($hall1->Professional_Event=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Professional_Event" value="Available">
                      @endif
                  </div>   
                  </div>

                  

                  
                  <div class="modal-footer">
                    <div class="text-center">
                    
                        <button type="submit" class="btn btn-primary ">
                            Save Changes
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

      </form>
      
      </div>
  </div>
  </div>
   <!--==============model for edit events=================-->
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
                <center><img src="uploads/hall/{{$hall1->Main_pic}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeHallMainpic'.$hall1->recepid)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Main_pic') ? ' has-error' : '' }}">
                    <label for="Main_pic" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="Main_pic" class="form-control @error('Main_pic') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Main_pic')
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
        @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
            });
        </script>
        @endif
</body>
</html>
