<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Evora</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="rumi/images/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="css/css/style.css">
        <link rel="stylesheet" href="css/css/responsive.css">
        <!-- all css here -->
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="rumi/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="rumi/css/animate.css">
        <!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="rumi/css/owl.carousel.css">
        <!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="rumi/css/font-awesome.min.css">
        <!-- magnific-popup.css -->
        <link rel="stylesheet" href="rumi/css/magnific-popup.css">
        <!-- flaticon.css -->
        <link rel="stylesheet" href="rumi/css/flaticon.css">
        <!-- slicknav.min.css -->
        <link rel="stylesheet" href="rumi/css/slicknav.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="rumi/css/styles.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="rumi/css/responsive.css">
        <!-- modernizr css -->
        <script src="rumi/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
        <header class="header-area" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header-bottom">
                             <div class="row">
                                <div class="col-md-3 col-sm-9 col-xs-6">
                                    <div class="logo">
                                        <a href="/">
                                            Evora
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 hidden-sm hidden-xs">
                                    <div class="mainmenu text-right">
                                        <ul id="navigation">
                                            <!-- dhagdagdagdhsj -->
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area end -->

        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Contact us</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- contact-area start -->
        <div class="contact-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="cf-msg"></div>
                            <form method="POST" action="/addSuggestion" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                <div class="form-group row{{ $errors->has('Name') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-11">
                            <label for="Name">Name</label>
                                <input id="Name" placeholder="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}"  autocomplete="Name" autofocus title="Fill this field">

                                @if ($errors->has('Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('Email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-11 ">
                            <label for="Email">Email Address</label>
                                <input id="Email" placeholder="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}"  autocomplete="Email" title="Fill this field">

                                @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('Contact_No') ? ' has-error' : '' }}">
                            

                            <div class="col-md-11 ">
                            <label for="Contact_No">Email Address</label>
                                <input id="Contact_No" placeholder="Contact No" type="text" class="form-control @error('Contact_No') is-invalid @enderror" name="Contact_No" value="{{ old('Contact_No') }}"  autocomplete="Contact_No" title="Fill this field">

                                @if ($errors->has('Contact_No'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_No') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row{{ $errors->has('Regarding') ? ' has-error' : '' }}">
                            
                            
                            <div class="col-md-11">
                            <label for="Regarding">Regarding</label>
                                <select id="Regarding" placeholder="Regarding" class="form-control" name="Regarding" value="{{ old('Regarding') }}" title="Fill this field with Avalability" >
                                    <option value="" disabled selected>--Select One--</option>
                                    <option value="Financial">Financial</option>
                                    <option value="Services">Services</option>
                                    <option value="Community">Community</option>
                                    <option value="Development">Development</option>
                                    <option value="General Info">General Info</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Website Bug">Website Bug</option>
                                    <option value="Donations">Donations</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('Message') ? ' has-error' : '' }}">
                        <div class="form-group row">
                            
                            <div class="col-md-11">
                            <label for="Message">Message</label>
                                <textarea name='Message' placeholder="Message" cols='50' rows='5' id='Message' class="form-control @error('Message') is-invalid @enderror" title="Fill this field."></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit Suggestion
                                </button>
                            </div>
                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-wrap">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    Phone number
                                    <p>
                                        <span>+94 710908891</span>
                                        
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    Email Id
                                    <p>
                                        <span>evora@gmail.com</span>
                                        
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-location-arrow"></i>
                                    Location
                                    <p>
                                        <span>+227 Marion Street Address Jaffna, SC 29201</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=University%20of%20Jaffna&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen style="width:100%;height:100%;">
                </iframe>
                </div>
                <style>.mapouter{text-align:right;height:391px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:391px;width:100%;}
                </style>
            </div>
        </div>
        <!-- contact-area end -->

        <!-- footer-area start -->
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
							
							
							
						</aside>
					</div>
				</div>
			</div>
		</footer>
        <!-- footer-area end -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="rumi/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
        <script src="rumi/js/bootstrap.min.js"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="rumi/js/owl.carousel.min.js"></script>
		<!-- counterup.main.js -->
        <script src="rumi/js/counterup.main.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="rumi/js/imagesloaded.pkgd.min.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="rumi/js/isotope.pkgd.min.js"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="rumi/js/jquery.waypoints.min.js"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="rumi/js/jquery.magnific-popup.min.js"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="rumi/js/jquery.slicknav.min.js"></script>
		<!-- wow js -->
        <script src="rumi/js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="rumi/js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.712764, -74.005667),
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#222222"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#222222"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":17}]}]
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<!-- main js -->
        <script src="rumi/js/scripts.js"></script>
    </body>
</html>
