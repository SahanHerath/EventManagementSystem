<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Evora-Decorators</title>
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
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                            @foreach($decos as $deco)
                            <li class="nav-item active"><i class="fa fa-eye" style="font-size:24px"></i><a class="nav-link" href="{{URL('/DecoratorView'.$deco->userid)}}">View Your Profile</a></li> 
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                                    <p class="text-white"><img src="/uploads/decoration/{{$deco->Main_Pic}}" style="width:32px; height:32px; border-radius: 50%;" >
                                    {{ Auth::user()->name }}<span class="caret"></span></p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
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
        
        
        
        
        @foreach($decos as $deco)
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
                                <img src="uploads/decoration/{{$deco->Main_Pic}}" width="400" hight="600" alt="">
                            </div> 
                     
                            
                            <div class="personal_text">
                            <h3>{{$deco->Team_Name}}</h3>
                                <ul class="list basic_info">
                                    <li><b>Contact Person :- </b>{{$deco->name}}</li>
                                    <li><b>ADDRESS :- </b>{{$deco->Address}}</li>
                                    <li><b>Contact_No :- </b>{{$deco->Contact_No}}</li>
                                    <li><b>email :- </b>{{$deco->email}}</li>
                                    <li><b>Link :- </b>{{$deco->Link}}</li>
                                    
                                    <a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditInfo">Edit info</a>
 
                                    <a class="genric-btn info" href=""  data-toggle="modal" data-target="#password_modal">Change Password</a>
                                    <a class="genric-btn warning" href=""  data-toggle="modal" data-target="#mainpicchange">Change Main Picture</a>
                                    <br>
                                </ul>
                            </div>
						</div>
                        <br>
                        
                        <div class="welcome">
                                <h3>Description</h3><br>
                                <p>{{$deco->Description}}</p>
                        </div>
                        
                        <br>
                        <div class="feature_inner row">
                   
        			<div class="col-lg-4 col-md-6" style="border: 15px solid green;">
        				<div class="feature_item bg-white text-black" >
                            
                        <h4>Supported Events</h4>
                        <table>
                        
                        
                            @if($deco->Wedding=='Available')
                            <tr>
                            
                            Wedding
                            
                            </tr>
                            <br>
                            @endif
                            
                            @if($deco->Birthday=='Available')
                            <tr>
                            
                            Birthday
                            
                            </tr>
                            <br>
                            @endif
                            @if($deco->Get_Together=='Available')
                            <tr>
                            
                            Get-togrther
                            
                            </tr>
                            <br>
                            @endif
                            @if($deco->Parties=='Available')
                            <tr>
                            Parties
                            </tr>
                            <br>
                            @endif
                            @if($deco->Outside_events=='Available')
                            <tr>
                            Outside events
                            </tr>
                            @endif
                            
                            <tr>
                            <br>
                            <br>
                            <br>
                            <center><a class="genric-btn primary" href="" data-toggle="modal" data-target="#modalEditForm">Edit Events</a></center>
                            </tr>
                            <!-- Modal -->

                        </table>
        				</div>
        			</div>
                    
                   
                   
					<div class="offset-3 col-lg-5 col-md-6" style="border: 15px solid green;">
        				<div class="feature_item bg- text-black">
                        <center><h4>Features</h4></center>
                            @if($deco->Poruwa=='Available')
                            Poruwa Decorations & Poruwa
                            <br>
                            @endif
                            @if($deco->	Flower=='Available')
                            Flower Decorations
                            <br>
                            @endif
                            @if($deco->Table_Hall=='Available')
                            Table & Hall Decorations
                            <br>
                            @endif
                            @if($deco->Setty_Backs=='Available')
                            Setty Back  & Decorations
                            <br>
                            @endif
                            @if($deco->Lighting=='Available')
                            Lighting Decoartion
                            <br>
                            @endif
                            @if($deco->Traditional=='Available')
                            Traditional Decoration
                            <br>
                            @endif
                            @if($deco->Wedding_Car=='Available')
                            Wedding Car Decoaration 
                            @endif
                            <br><br><br>
                            <center><a class="genric-btn primary" href="#" data-toggle="modal" data-target="#modalEditFeatures">Edit Features</a></center>
                            
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
								<a href="uploads/decoration/{{$deco->pic1}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/decoration/{{$deco->pic1}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/decoration/{{$deco->pic2}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/decoration/{{$deco->pic2}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/decoration/{{$deco->pic3}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/decoration/{{$deco->pic3}});"></div></a>
							</div>
							<div class="col-md-3">
								<a href="uploads/decoration/{{$deco->pic4}}" class="img-gal"><div class="single-gallery-image" style="background: url(uploads/decoration/{{$deco->pic4}});"></div></a>
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
                                            <a href="{{URL('/AddDecorationPackage'.$deco->userid)}}" data-toggle="modal" data-target="#modalAddPackage" class="text-white btn btn-outline-warning rounded-0 text-uppercase">Add A Package</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="feature_area p_120">
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
                                                            <li><b>Decoration Type :- </b>{{$deto1->Decoration_Type}}</li>
                                                            <li><b>Services :- </b>{{$deto1->Services}}</li>
                                                            <li><b>Price :- </b> Rs.{{$deto1->Price}}</li>
                                                        <ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="column offset-1">
                                                        <a href="files/decoration/{{$deto1->Pdf}}" ><img src="images/pdf.png" width="80" hight="80" alt="" ></a>
                                                    </div>
                                                    <div class="column offset-4">
                                                        <ul class="list basic_info">
                                                        <li><a class="genric-btn primary" href="#" data-toggle="modal" data-target="#modalEditPackage">Edit</a><li><br>  
                                                        <li><a class="genric-btn danger" href="{{URL('/RemoveDecorationPackage'.$deto1->id)}}">Remove</a><li>
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
                        </section>
                        <br>  <br>  
                        <a class="offset-10 genric-btn danger" href="{{URL('/RemoveDecorationAccount'.$deco->userid)}}">Deactivate Account</a>
                            
                            
					</div>
					
				</div>
			
        </section>
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
            <form method="POST" action="{{URL('/EditDecoratorEvents'.$deco->deco_eve_id)}}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   
                        <div class="form-group row{{ $errors->has('Wedding') ? ' has-error' : '' }}">
                        <label for="Wedding" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding" value="Not Available">
                            <label for="Wedding">Wedding</label>
                            @if($deco->Wedding=='Available') 
                            <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Wedding" value="Available" >
                            @endif
                            @if($deco->Wedding=='Not Available')
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Birthday') ? ' has-error' : '' }}">
                        <label for="Birthday" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Birthday" value="Not Available">
                            <label for="Birthday">Birthday</label> 
                            @if($deco->Birthday=='Available') 
                            <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Birthday" value="Available" >
                            @endif
                            @if($deco->Birthday=='Not Available')
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Birthday" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Get_Together') ? ' has-error' : '' }}">
                        <label for="Get_Together" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Get_Together" value="Not Available">
                            <label for="Get_Together">Get Together</label> 
                            @if($deco->Get_Together=='Available') 
                            <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Get_Together" value="Available" >
                            @endif
                            @if($deco->Get_Together=='Not Available')
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Get_Together" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Parties') ? ' has-error' : '' }}">
                        <label for="Parties" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Parties" value="Not Available">
                            <label for="Parties">Parties</label> 
                            @if($deco->Parties=='Available') 
                            <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Parties" value="Available" >
                            @endif
                            @if($deco->Parties=='Not Available')
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Parties" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Outside_events') ? ' has-error' : '' }}">
                        <label for="Outside_events" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Outside_events" value="Not Available">
                            <label for="Outside_events">Outside Events</label> 
                            @if($deco->Outside_events=='Available')
                            <input type="checkbox" class="largerCheckbox" checked style="width:20px; height:20px;" name="Outside_events" value="Available" >
                            @endif
                            @if($deco->Outside_events=='Not Available')
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Outside_events" value="Available">
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
      <form method="POST" action="{{URL('/EditDecoratorFeatures'.$deco->deco_id)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <div class="form-group row{{ $errors->has('Poruwa') ? ' has-error' : '' }}">
                        <label for="Poruwa" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Poruwa" value="Not Available">
                            <label for="Poruwa">Poruwa</label>
                            @if($deco->Poruwa=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Poruwa" value="Available">
                            @endif
                            @if($deco->Poruwa=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Poruwa" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Flower') ? ' has-error' : '' }}">
                        <label for="Flower" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Flower" value="Not Available">
                            <label for="Flower">Flower</label> 
                            @if($deco->Flower=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Flower" value="Available">
                            @endif
                            @if($deco->Flower=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Flower" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Table_Hall') ? ' has-error' : '' }}">
                        <label for="Table_Hall" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Table_Hall" value="Not Available">
                            <label for="Table_Hall">Table Hall</label> 
                            @if($deco->Table_Hall=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Table_Hall" value="Available">
                            @endif
                            @if($deco->Table_Hall=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Table_Hall" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Setty_Backs') ? ' has-error' : '' }}">
                        <label for="Setty_Backs" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Setty_Backs" value="Not Available">
                            <label for="Setty_Backs">Setty Backs</label> 
                            @if($deco->Setty_Backs=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Setty_Backs" value="Available">
                            @endif
                            @if($deco->Setty_Backs=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Setty_Backs" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Lighting') ? ' has-error' : '' }}">
                        <label for="Lighting" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Lighting" value="Not Available">
                            <label for="Lighting">Lighting</label> 
                            @if($deco->Lighting=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Lighting" value="Available">
                            @endif
                            @if($deco->Lighting=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Lighting" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Traditional') ? ' has-error' : '' }}">
                        <label for="Traditional" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Traditional" value="Not Available">
                            <label for="Traditional">Traditional</label> 
                            @if($deco->Traditional=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Traditional" value="Available">
                            @endif
                            @if($deco->Traditional=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Traditional" value="Available" >
                            @endif
                        </div>   
                        </div>

                        <div class="form-group row{{ $errors->has('Wedding_Car') ? ' has-error' : '' }}">
                        <label for="Wedding_Car" class="col-md-4"></label>   
                        <div class="col-md-4 switch-wrap d-flex justify-content-between">
                            <input type="hidden" name="Wedding_Car" value="Not Available">
                            <label for="Wedding_Car">Wedding Car</label> 
                            @if($deco->Wedding_Car=='Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" checked name="Wedding_Car" value="Available">
                            @endif
                            @if($deco->Wedding_Car=='Not Available') 
                            <input type="checkbox" class="largerCheckbox" style="width:20px; height:20px;" name="Wedding_Car" value="Available" >
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
                <form method="POST" action="{{URL('/EditDecoratorDetails'.'/'.$deco->userid.'/'.$deco->deco_id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                                
                    <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }} control-group">
                        <label for="name" class="col-md-4 col-form-label offset-1">Name :-</label>

                        
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-10 offset-1" name="name"  value="{{$deco->name}}" title="fill this field with organization name or person name">

                            @error('name')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 col-form-label offset-1">Email Address :-</label>

                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror col-md-10 offset-1" name="email" value="{{$deco->email }}" title="fill this field">

                            @error('email')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group row{{ $errors->has('Team_Name') ? ' has-error' : '' }}">
                        <label for="Team_Name" class="col-md-6 col-form-label offset-1">Team/Organization Name :-</label>

                        
                            <input id="Team_Name" type="text" class="form-control @error('Team_Name') is-invalid @enderror col-md-10 offset-1" name="Team_Name" value="{{ $deco->Team_Name }}"autocomplete="Team_Name" autofocus title="Fill this field with Decorator name or Group name">

                            @error('Team_Name')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group row{{ $errors->has('Address') ? ' has-error' : '' }}">
                        <label for="Address" class="col-md-4 col-form-label offset-1">Address :-</label>

                        
                            <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror col-md-10 offset-1" name="Address"   value="{{ $deco->Address  }}"  autocomplete="Address" title="Fill this field with Address">

                            @error('Address')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row{{ $errors->has('Contact_No') ? ' has-error' : '' }}">
                        <label for="Contact_No" class="col-md-4 col-form-label offset-1">Contact Number :-</label>

                        
                            <input id="Contact_No" type="text"  class="form-control @error('Contact_No') is-invalid @enderror col-md-10 offset-1" name="Contact_No" value="{{ $deco->Contact_No  }}" autocomplete="Contact_No" title="Fill this field" >

                            @error('Contact_No')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                     
                    </div>

                    <div class="form-group row{{ $errors->has('Link') ? ' has-error' : '' }}">
                        <label for="Link" class="col-md-4 col-form-label offset-1">Link :-</label>

                        
                            <input id="Link" type="text" class="form-control @error('Link') is-invalid @enderror col-md-10 offset-1" name="Link" value="{{ $deco->Link  }}"   autocomplete="Link"  title="Fill this field with link of a webpage that gives details about your services including facebook,instagram,twitter etc. ">

                            @error('Link')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row{{ $errors->has('Description') ? ' has-error' : '' }}">
                    
                        <label for="Description" class="col-md-4 col-form-label offset-1">Description :-</label>
                        
                        
                            <textarea name='Description' cols='50' rows='5' id='Description' class="form-control @error('Description') is-invalid @enderror col-md-10 offset-1" title="Fill this area with the description about your designs. You can include what are your specialities other details.">{{$deco->Description }}</textarea>
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
                <form method="POST" action="{{URL('/AddDecorationPackage'.$deco->userid)}}" enctype="multipart/form-data">
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

                    <div class="form-group row{{ $errors->has('Decoration_Type') ? ' has-error' : '' }}">
                        <label for="Decoration_Type" class="col-md-4 col-form-label offset-1">Decoration_Type :-</label>

                        
                            <input id="Decoration_Type" type="text" value="{{ old('Decoration_Type') }}" class="form-control @error('Decoration_Type') is-invalid @enderror col-md-10 offset-1" name="Decoration_Type"  title="fill this field decoration type(flora, glass etc)">

                            @error('Decoration_Type')
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

                        
                            <input id="Price" type="text" value="{{ old('Price') }}" class="form-control @error('Price') is-invalid @enderror col-md-10 offset-1" name="Price"   autocomplete="Price"  title="Fill this field with average price of the package">

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
     @foreach($deto as $deto1)
  <div class="modal fade" id="modalEditPackage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Edit Package Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{URL('/EditDecorationPackage'.$deto1->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                                
                    <div class="form-group row{{ $errors->has('Package_Name1') ? ' has-error' : '' }} control-group">
                        <label for="Package_Name1" class="col-md-4 col-form-label offset-1">Package_Name :-</label>

                        
                            <input id="Package_Name1" type="text" value="{{$deto1->Package_Name}}" class="form-control @error('Package_Name1') is-invalid @enderror col-md-10 offset-1" name="Package_Name1"   title="fill this field with appropiate package name">

                            @error('Package_Name1')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>

                    <div class="form-group row{{ $errors->has('Decoration_Type1') ? ' has-error' : '' }}">
                        <label for="Decoration_Type1" class="col-md-4 col-form-label offset-1">Decoration_Type :-</label>

                        
                            <input id="Decoration_Type1" type="text" value="{{$deto1->Decoration_Type}}" class="form-control @error('Decoration_Type1') is-invalid @enderror col-md-10 offset-1" name="Decoration_Type1"  title="fill this field decoration type(flora, glass etc)">

                            @error('Decoration_Type1')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                   
                   

                   

              

                    <div class="form-group row{{ $errors->has('Services1') ? ' has-error' : '' }}">
                    
                        <label for="Services1" class="col-md-4 col-form-label offset-1">Services :-</label>
                        
                        
                            <textarea name='Services1' cols='50' rows='5' id='Services' value="{{$deto1->Services}}" class="form-control @error('Services1') is-invalid @enderror col-md-10 offset-1" title="Fill this field with services that are include in  this package (Table decoration, Entrance decoration ,Hall decoration etc) & some other description">{{$deto1->Services}}</textarea>
                            @error('Services1')
                                <span class="invalid-feedback offset-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    
                    </div>

                    <div class="form-group row{{ $errors->has('Price1') ? ' has-error' : '' }}">
                        <label for="Price1" class="col-md-4 col-form-label offset-1">Price :-</label>

                        
                            <input id="Price1" type="text" value="{{$deto1->Price}}" class="form-control @error('Price1') is-invalid @enderror col-md-10 offset-1" name="Price1"   autocomplete="Price1"  title="Fill this field with average price of the package">

                            @error('Price1')
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

    <!--==============model for edit package=================-->
    @endforeach
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
                <center><img src="uploads/decoration/{{$deco->Main_Pic}}" alt="User Avatar" width="200" hight="200"></center>
                    
                    <form enctype="multipart/form-data" action="{{URL('/ChangeDecorationMainpic'.$deco->deco_id)}}"  method="POST">
                    <div class="form-group row{{ $errors->has('Main_Pic') ? ' has-error' : '' }}">
                    <label for="Main_Pic" class="offset-1">Update Main Picture :-</label>
                    <center><input type="file" name="Main_Pic" class="form-control @error('Main_Pic') is-invalid @enderror col-md-10 offset-1"></center>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @error('Main_Pic')
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
                                <th width="5">Picture</th>
                                <th width="5">Change Picture</th>
                                
                            </tr>
                       </thead>
                       <tbody>
                       
                            <tr>
                                <td> <img src="/uploads/decoration/{{$deco->pic1}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/decarationpic1'.$deco->deco_id)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic1" class="form-control @error('pic1') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/decoration/{{$deco->pic2}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/decarationpic2'.$deco->deco_id)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic2" class="form-control @error('pic2') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/decoration/{{$deco->pic3}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/decarationpic3'.$deco->deco_id)}}" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="pic3" class="form-control @error('pic3') is-invalid @enderror col-md-10 offset-1">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit"  >
                                </form>
                                </td>

                                

                                
                            </tr>

                            <tr>
                                <td> <img src="/uploads/decoration/{{$deco->pic4}}" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="{{URL('/decarationpic4'.$deco->deco_id)}}" method="POST">
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
        
        @if ($errors->has('name')||$errors->has('email')||$errors->has('Team_Name')||$errors->has('Address')||$errors->has('Contact_No')||$errors->has('Link')||$errors->has('Description'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditInfo").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Package_Name')||$errors->has('Decoration_Type')||$errors->has('Services')||$errors->has('Price')||$errors->has('Pdf'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalAddPackage").modal('show');
            });
        </script>
        @endif
        @if ($errors->has('Package_Name1')||$errors->has('Decoration_Type1')||$errors->has('Services1')||$errors->has('Price1')||$errors->has('Pdf1'))
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalEditPackage").modal('show');
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
        @if ($errors->has('Main_Pic'))
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
    </body>
</html>