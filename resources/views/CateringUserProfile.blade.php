<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Evora-Catering</title>
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
							<ul class="nav navbar-nav menu_nav ml-auto">
                            @foreach($data as $data1)
                            <li class="nav-item active"><a class="nav-link" href="{{URL('/cateringview'.$data1->userid)}}">
                            <i class="fa fa-eye">  View Your Profile</a></i>
                            </li> 
                            
                            <li class="nav-item active"><a class="nav-link" href="#"  v-pre style="position:relative;">
                                <p class="text-white"><img src="/uploads/catering/{{$data1->Main_pic}}" style="width:32px; height:32px; border-radius: 50%;" >
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
                                <img src="uploads/catering/{{$data1->Main_pic}}" width="400" hight="600" alt="">
                            </div>
                             
                            <div class="personal_text">
                            <h3>{{$data1->Service_Name}}</h3>
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
                        
                        
                            @if($data1->Wedding=='Available')
                            <tr>
                            
                            Wedding
                            
                            </tr>
                            <br>
                            @endif
                            
                            @if($data1->Birthday=='Available')
                            <tr>
                            
                            Birthday
                            
                            </tr>
                            <br>
                            @endif
                            @if($data1->Party=='Available')
                            <tr>
                            
                            Party
                            
                            </tr>
                            <br>
                            @endif
                            @if($data1->Corporate_event=='Available')
                            <tr>
                            Corporate Event
                            </tr>
                            <br>
                            @endif
                            @if($data1->Funeral=='Available')
                            <tr>
                            Funeral
                            </tr>
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
                            @if($data1->Welcome_drink=='Available')
                            Welcome Drink
                            <br>
                            @endif
                            @if($data1->Catering_set=='Available')
                            Catering Set
                            <br>
                            @endif
                            @if($data1->Catering_tent=='Available')
                            Catering Tent
                            <br>
                            @endif
                            @if($data1->Cake=='Available')
                            Cakes
                            <br>
                            @endif
                            @if($data1->Special_Food=='Available')
                            Special Food Orders
                            <br>
                            @endif
                            @if($data1->Garden_umbrella=='Available')
                            Garden Umbrella
                            <br>
                            @endif

                            @if($data1->Coffee_Machine=='Available')
                            Coffee Machine
                            <br>
                            @endif
                            @if($data1->Table_chair=='Available')
                            Table Chair Supply
                            <br>
                            @endif
                            @if($data1->sink=='Available')
                            Sink for Rent
                            <br>
                            @endif
                            @if($data1->dessert=='Available')
                            Dessert
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
								<a href="uploads/catering/{{$data1->pic1}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/catering/{{$data1->pic1}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/catering/{{$data1->pic2}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/catering/{{$data1->pic2}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/catering/{{$data1->pic3}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/catering/{{$data1->pic3}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/catering/{{$data1->pic4}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/catering/{{$data1->pic4}});"></div></a>
							</div>
                            
						</div>
                        <br>
                            
                        <a class="offset-5 genric-btn primary" href="" data-toggle="modal" data-target="#modalChangepic">Change Recent Event Photos</a>
                        <br>
                        <br>

                        <div class="section-top-border">
                        <h3 class="title_color">Available Packages</h3>
                        <br><br>
                        <div class="py-5 upcoming-events" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h2 class="text-white">If you have package details PDF</h2>
                                        <a href="#" data-toggle="modal" data-target="#modalAddPackage" 
                                        class="text-white btn btn-outline-warning rounded-0 text-uppercase">Add A Package</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="feature_area p_120">


            <!-- bordered table -->
			<!-- ============================================================== -->
			<div class="feature_inner row offset-3">
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-10 col-10">
				<div class="card">
				@foreach($deto as $deto1)
					<center><h4 class="card-header">{{$deto1->Package_Name}}</h4></center>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col"><center>Appetizers</center></th>
									
									<th scope="col"><center>Welcome_drinks</center></th>
									<th scope="col"><center>Soups</center></th>
									<th scope="col"><center>Meals</center></th>
									<th scope="col"><center>Desserts</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><center>@foreach (explode(',', $deto1->Appetizers) as $appetizers)
														{{ $appetizers }}<br>
															@endforeach</center></td>
									<td><center>@foreach (explode(',', $deto1->Welcome_drinks) as $welcomedrinks)
														{{ $welcomedrinks }}<br>
															@endforeach</center></td>
									<td><center>@foreach (explode(',', $deto1->Soups) as $soups)
														{{ $soups }}<br>
															@endforeach</center></td>
									<td><center>@foreach (explode(',', $deto1->Foods) as $foods)
														{{ $foods }}<br>
															@endforeach</center></td>
									<td><center>@foreach (explode(',', $deto1->Desserts) as $desserts)
														{{ $desserts }}<br>
															@endforeach</center></td>
								</tr>
								<tr>
									<th scope="row" colspan="2"><center><h4>Price</h4></center></th>
									<th scope="row" colspan="3"><center>Download PDF here</center></th>
									
								</tr>
								<tr>
									
									<td colspan="2"><center>Rs.{{$deto1->Price}}</center></td>
									<td colspan="3"><center><a href="files/catering/{{$deto1->Pdf}}"><img src="images/pdf.png" width="40" hight="40" alt="" ></a></center></td>
								</tr>
							</tbody>
						</table>
                        <tr>
                            <a class="genric-btn primary offset-4" href="#" data-toggle="modal" data-target="#modalEditPackage" 
                             data-pakid="{{$deto1->id}}" data-packagename="{{$deto1->Package_Name}}" 
                             data-price="{{$deto1->Price}}" data-welcomedrink="{{$deto1->Welcome_drinks}}" 
                             data-appetizer="{{$deto1->Appetizers}}" data-soup="{{$deto1->Soups}}" 
                             data-food="{{$deto1->Foods}}" data-dessert="{{$deto1->Desserts}}">Edit</a>
                            <a class="genric-btn danger" href="" data-toggle="modal" data-target="#modalDeletePackage" data-pakid="{{$deto1->id}}">Remove</a>
                        </tr>
                    </div>@endforeach
				</div>
			</div></div>
			<!-- ============================================================== -->
			<!-- end bordered table -->
                        <br>
                    </section>
                    <br>  <br>
                    <a class="offset-10 genric-btn danger" href="" data-toggle="modal" data-target="#modalDeleteAccount">Deactivate Account</a>
                            
                            
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
      <form method="POST" action="{{URL('/EditCateringDetails'.'/'.$data1->userid.'/'.$data1->cateringid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
                        
             <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label offset-1">Name :-</label>

                          
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-10 offset-1" name="name"  value="{{$data1->name}}" title="fill this field with organization name or person name">

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
                        <div class="form-group row{{ $errors->has('Service_Name') ? ' has-error' : '' }}">
                            <label for="Service_Name" class="col-md-6 col-form-label offset-1">Catering Service Name :-</label>

                           
                                <input id="Service_Name" type="text" class="form-control @error('Service_Name') is-invalid @enderror col-md-10 offset-1" name="Service_Name" value="{{ $data1->Service_Name }}"autocomplete="Service_Name" autofocus title="Fill this field with Catering Service name">

                                @error('Service_Name')
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

                       
                                <input id="Contact_No" type="text"  class="form-control @error('Contact_No') is-invalid @enderror col-md-10 offset-1" name="Contact_No" value="{{ $data1->Contact_No  }}" autocomplete="Contact_No" title="Fill this field" >

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
                            
                           
                                <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror col-md-10 offset-1" title="Fill this area with the description about your designs. You can include what are your specialities other details.">{{$data1->Description }}</textarea>
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
      <form method="POST" action="{{URL('/EditCateringEvents'.$data1->eventid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             
                  <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                  <label for="Wedding" class="col-md-2"></label>   
                  <div class="col-md-6 switch-wrap d-flex justify-content-between">
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
                  <label for="Birthday" class="col-md-2"></label>   
                  <div class="col-md-6 switch-wrap d-flex justify-content-between">
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

                  <div class="form-group row{{ $errors->has('Party') ? ' has-error' : '' }}">
                  <label for="Party" class="col-md-2"></label>   
                  <div class="col-md-6 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Party" value="Not Available">
                      <label for="Party">Party</label> 
                      @if($data1->Party=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Party" value="Available" >
                      @endif
                      @if($data1->Party=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Party" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Corporate_event') ? ' has-error' : '' }}">
                  <label for="Corporate_event" class="col-md-2"></label>   
                  <div class="col-md-6 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Corporate_event" value="Not Available">
                      <label for="Corporate_event">Corporate Event</label> 
                      @if($data1->Corporate_event=='Available') 
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Corporate_event" value="Available" >
                      @endif
                      @if($data1->Corporate_event=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Corporate_event" value="Available" >
                      @endif
                  </div>   
                  </div>

                  <div class="form-group row{{ $errors->has('Funeral') ? ' has-error' : '' }}">
                  <label for="Funeral" class="col-md-2"></label>   
                  <div class="col-md-6 switch-wrap d-flex justify-content-between">
                      <input type="hidden" name="Funeral" value="Not Available">
                      <label for="Funeral">Funeral</label> 
                      @if($data1->Funeral=='Available')
                      <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Funeral" value="Available" >
                      @endif
                      @if($data1->Funeral=='Not Available')
                      <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Funeral" value="Available">
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
      <form method="POST" action="{{URL('/EditCateringFeatures'.$data1->cateringid)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('Welcome_drink') ? ' has-error' : '' }}">
                        <label for="Welcome_drink" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Welcome_drink" value="Not Available">
                            <label for="Welcome_drink">Traditional Dancing</label>
                            @if($data1->Welcome_drink=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Welcome_drink" value="Available">
                            @endif
                            @if($data1->Welcome_drink=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Welcome_drink" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Catering_set') ? ' has-error' : '' }}">
                        <label for="Catering_set" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Catering_set" value="Not Available">
                            <label for="Catering_set">Catering Set</label> 
                            @if($data1->Catering_set=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Catering_set" value="Available">
                            @endif
                            @if($data1->Catering_set=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_set" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Catering_tent') ? ' has-error' : '' }}">
                        <label for="Catering_tent" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Catering_tent" value="Not Available">
                            <label for="Catering_tent">Catering Tent</label> 
                            @if($data1->Catering_tent=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Catering_tent" value="Available">
                            @endif
                            @if($data1->Catering_tent=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Catering_tent" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Cake') ? ' has-error' : '' }}">
                        <label for="Cake" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Cake" value="Not Available">
                            <label for="Cake">Cake</label> 
                            @if($data1->Cake=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Cake" value="Available">
                            @endif
                            @if($data1->Cake=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Cake" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Special_Food') ? ' has-error' : '' }}">
                        <label for="Special_Food" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Special_Food" value="Not Available">
                            <label for="Special_Food">Special Food</label> 
                            @if($data1->Special_Food=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Special_Food" value="Available">
                            @endif
                            @if($data1->Special_Food=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Special_Food" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Garden_umbrella') ? ' has-error' : '' }}">
                        <label for="Garden_umbrella" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Garden_umbrella" value="Not Available">
                            <label for="Garden_umbrella">Garden Umbrella</label> 
                            @if($data1->Garden_umbrella=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Garden_umbrella" value="Available">
                            @endif
                            @if($data1->Garden_umbrella=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Garden_umbrella" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Coffee_Machine') ? ' has-error' : '' }}">
                        <label for="Coffee_Machine" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Coffee_Machine" value="Not Available">
                            <label for="Coffee_Machine">Coffee Machine</label> 
                            @if($data1->Coffee_Machine=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Coffee_Machine" value="Available">
                            @endif
                            @if($data1->Coffee_Machine=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Coffee_Machine" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Table_chair') ? ' has-error' : '' }}">
                        <label for="Table_chair" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Table_chair" value="Not Available">
                            <label for="Table_chair">Table ,Chair for rent</label> 
                            @if($data1->Table_chair=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Table_chair" value="Available">
                            @endif
                            @if($data1->Table_chair=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Table_chair" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('sink') ? ' has-error' : '' }}">
                        <label for="sink" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="sink" value="Not Available">
                            <label for="sink">Sink</label> 
                            @if($data1->sink=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="sink" value="Available">
                            @endif
                            @if($data1->sink=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="sink" value="Available" >
                            @endif
                        </div>   
                        </div>

                        
                        <div class="form-group row{{ $errors->has('dessert') ? ' has-error' : '' }}">
                        <label for="dessert" class="col-md-2"></label>   
                        <div class="col-md-6 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="dessert" value="Not Available">
                            <label for="dessert">Dessert</label> 
                            @if($data1->dessert=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="dessert" value="Available">
                            @endif
                            @if($data1->dessert=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="dessert" value="Available" >
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
                <center><img src="uploads/catering/{{$data1->Main_pic}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeCateringMainpic'.$data1->cateringid)}}"  method="POST">
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
                                <td> <img src="/uploads/catering/{{$data1->pic1}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/cateringpic1'.$data1->cateringid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic1" class="form-control @error('pic1') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/catering/{{$data1->pic2}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/cateringpic2'.$data1->cateringid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic2" class="form-control @error('pic2') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/catering/{{$data1->pic3}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/cateringpic3'.$data1->cateringid)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic3" class="form-control @error('pic3') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/catering/{{$data1->pic4}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/cateringpic4'.$data1->cateringid)}}" method="POST">
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
                        
                            
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                <form method="POST" action="{{URL('/AddCateringPackage'.$data1->userid)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                                
                    <div class="form-group row{{ $errors->has('Package_Name') ? ' has-error' : '' }} control-group">
                        <label for="Package_Name" class="col-md-4 col-form-label offset-1">Package Name :-</label>

                        
                            <input id="Package_Name" type="text" value="{{ old('Package_Name') }}" class="form-control @error('Package_Name') is-invalid @enderror col-md-10 offset-1" name="Package_Name"   title="fill this field with appropiate package name">

                            @error('Package_Name')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group row{{ $errors->has('Appetizers') ? ' has-error' : '' }}">
                    
                    <label for="Appetizers" class="col-md-4 col-form-label offset-1">Appetizers :-</label>
                    
                    
                        <textarea name='Appetizers' cols='50' rows='5' id='Appetizers' class="form-control @error('Appetizers') is-invalid @enderror col-md-10 offset-1" title="Fill this field with Appetizers separated by commas of the package">{{ old('Appetizers') }}</textarea>
                        @error('Appetizers')
                            <span class="invalid-feedback offset-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                
                </div>
                   
                   

                   

              

                    <div class="form-group row{{ $errors->has('Welcome_drinks') ? ' has-error' : '' }}">
                    
                        <label for="Welcome_drinks" class="col-md-4 col-form-label offset-1">Welcome Drinks :-</label>
                        
                        
                            <textarea name='Welcome_drinks' cols='50' rows='5' id='Welcome_drinks' class="form-control @error('Welcome_drinks') is-invalid @enderror col-md-10 offset-1" title="Fill this field with Welcome_drinks of the package separated with commas">{{ old('Welcome_drinks') }}</textarea>
                            @error('Welcome_drinks')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    
                    </div>

                    <div class="form-group row{{ $errors->has('Soups') ? ' has-error' : '' }}">
                    
                    <label for="Soups" class="col-md-4 col-form-label offset-1">Soups :-</label>
                    
                    
                        <textarea name='Soups' cols='50' rows='5' id='Soups' class="form-control @error('Soups') is-invalid @enderror col-md-10 offset-1" title="Fill this field with Soups of the package separated by commas">{{ old('Soups') }}</textarea>
                        @error('Soups')
                            <span class="invalid-feedback offset-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                
                </div>

                <div class="form-group row{{ $errors->has('Foods') ? ' has-error' : '' }}">
                    
                    <label for="Foods" class="col-md-4 col-form-label offset-1">Meals :-</label>
                    
                    
                        <textarea name='Foods' cols='50' rows='5' id='Foods' class="form-control @error('Foods') is-invalid @enderror col-md-10 offset-1" title="Fill this field with foods of the package separated by commas">{{ old('Foods') }}</textarea>
                        @error('Foods')
                            <span class="invalid-feedback offset-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                
                </div>

                <div class="form-group row{{ $errors->has('Desserts') ? ' has-error' : '' }}">
                    
                    <label for="Desserts" class="col-md-4 col-form-label offset-1">Desserts :-</label>
                    
                    
                        <textarea name='Desserts' cols='50' rows='5' id='Desserts' class="form-control @error('Desserts') is-invalid @enderror col-md-10 offset-1" title="Fill this field with Desserts of the package separated by commas">{{ old('Desserts') }}</textarea>
                        @error('Desserts')
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
      <form action="{{URL('/EditCateringPackage')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
                <div class="form-group">
		        	<label for="Package_Name1">Package Name</label>
		        	<input type="text" class="form-control" name="Package_Name1" id="Package_Name1">
	        	</div>

                <div class="form-group">
	        		<label for="Appetizers1">Appetizers</label>
	        		<textarea name="Appetizers1" id="Appetizers1" cols="20" rows="5" id='Appetizers1' class="form-control"></textarea>
	        	</div>


                <div class="form-group">
	        		<label for="Welcome_drinks1">Welcome Drinks</label>
	        		<textarea name="Welcome_drinks1" id="Welcome_drinks1" cols="20" rows="5" id='Welcome_drinks1' class="form-control"></textarea>
	        	</div>

                <div class="form-group">
	        		<label for="Soups1">Soups</label>
	        		<textarea name="Soups1" id="Soups1" cols="20" rows="5" id='Soups1' class="form-control"></textarea>
	        	</div>

                <div class="form-group">
	        		<label for="Foods1">Meals</label>
	        		<textarea name="Foods1" id="Foods1" cols="20" rows="5" id='Foods1' class="form-control"></textarea>
	        	</div>

                <div class="form-group">
	        		<label for="Desserts1">Desserts</label>
	        		<textarea name="Desserts1" id="Desserts1" cols="20" rows="5" id='Desserts1' class="form-control"></textarea>
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
      <form action="{{URL('/DeleteCateringPackage')}}" method="post">
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
        <a href="{{URL('/RemoveCateringAccount'.$data1->userid)}}"><button type="button" class="btn btn-primary">Confirm Action</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--==============model for deactivate account=================-->
   
       @endforeach
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
        

        <script>
         @if ($errors->has('name')||$errors->has('email')||$errors->has('Service_Name')||$errors->has('Address')||$errors->has('Contact_No')||$errors->has('Link')||$errors->has('Description'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Package_Name')||$errors->has('Appetizers')||$errors->has('Welcome_drinks')||$errors->has('Soups')||$errors->has('Foods')||$errors->has('Desserts')||$errors->has('Price')||$errors->has('Pdf'))
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
        @if ($errors->has('Main_pic'))
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
      var price = button.data('price') 
      var welcomedrink = button.data('welcomedrink')
      var appetizer = button.data('appetizer')
      var soup = button.data('soup')
      var food = button.data('food')
      var dessert = button.data('dessert')
      
      
      var pakid = button.data('pakid')
      var modal = $(this)
      modal.find('.modal-body #Package_Name1').val(packagename);
      modal.find('.modal-body #Price1').val(price);
      modal.find('.modal-body #id').val(pakid);
      modal.find('.modal-body #Welcome_drinks1').val(welcomedrink);
      modal.find('.modal-body #Appetizers1').val(appetizer);
      modal.find('.modal-body #Soups1').val(soup);
      modal.find('.modal-body #Foods1').val(food);
      modal.find('.modal-body #Desserts1').val(dessert);
   
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