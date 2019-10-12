<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/css/responsive.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Evora</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active">
                        <a href="/">Home</a>
                      </li>
                      <li><a href="/Events">Events</a></li>
                      <li class="has-children">
                            <a>Services</a>
                            <ul class="dropdown">
                      <li><a href="Venue">Venues</a></li>
                      <li><a href="Bridal">Beautician</a></li>
                      <li><a href="Decorator">Decorators</a></li>
                      <li><a href="Music">DJs/Music</a></li>
                      <li><a href="Photography">Photography & Videography</a></li>
                      <li><a href="Dancing">Dancers & Choregraphy</a></li>
                      <li><a href="Cake">Cake Designers</a></li>
                      <li><a href="EventPlanner">Event Planners</a></li>
                      <li><a href="catering">Catering Service</a></li>
                      <li><a href="CostumeDesigner">Costume Designers</a></li> 
                      <li><a href="Poruwa">Poruwa Rituals</a></li>
                      <li><a href="Actor">Presenters & Entertainers</a></li>
                      <li><a href="Transport">Wedding Transport</a></li>
                      </ul>
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
                                <img src="/images/default.jpg" style="width:32px; height:32px; border-radius: 50%;" >
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
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/dj2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">DJs And Music</h1>
              <h2 class="caption">Loud And Clear</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/dj3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Any Music Event</h1>
              <h2 class="caption">Enjoy With Us</h2>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover overlay" style="background-image: url(images/dj6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Rock And Roll</h1>
              <h2 class="caption">Remember The Day</h2>
            </div>
          </div>
        </div>
      </div> 

    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                
                  
                   
                  <img src="images/dj5.jpg" alt="" class="img-fluid">
                
              </div>

              <img src="images/dj4.jpg" alt="Image" class="img-fluid image-absolute">
            
          </div>
          <div class="col-md-5 ml-auto">
            

            <div class="section-heading text-left">
              <h2 class="mb-5">Are You Looking For ?</h2>
            </div>
            <p class="mb-4">You are able to contact Sri Lanka's Most professional, Most successful leading Dj & Bands with best music equipments. </p>
            
          </div>
        </div>
      </div>
    </div>


    
    <div class="py-5 upcoming-events" style="background-image: url('images/hero_1.jpg'); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2 class="text-white">Join With Professional DJs And Bands</h2>
            <a href="register" class="text-white btn btn-outline-warning rounded-0 text-uppercase">Register Now</a>
          </div>
          <div class="col-md-6">
            <span class="caption">The Promo will start in</span>
            <div id="date-countdown"></div>    
          </div>
        </div>
        
      </div>
    </div>
    <div class="topnav">
    <button type="submit" >Search</button>
      <input type="text" placeholder="Search..">
      
    </div>
    
    <div class="site-section border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our DJs/Music</h2>
          </div>
        </div>
        <div class="row no-gutters">
          
          
        @foreach($musics as $levee)
        
        <div class="site-block d-lg-flex">
          <div class="col-md-7 col-lg-4">
            <a href="uploads/music/{{$levee->Main_Logo}}" class="image-popup img-opacity"><img src="uploads/music/{{$levee->Main_Logo}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <br>
            <h2 > {{$levee->Dj_Name}}</h2>
            <h5>Address :- <i>{{$levee->Address}}</i></h5>
            <h5>Contact No. :- <i>{{$levee->ContactNo}}</i></h5>
            <h5>Email :-  <i>{{$levee->email}}</i> </h5>
              
            <p><a href="{{URL('/MusicView'.$levee->id)}}"class=""><button class="btn btn-danger ">View More <span class="icon-arrow-right small"></button></span></a></p>          
          </div>
        </div>
        <br><br><br>
      @endforeach
    
    
      </div>
    </div>
  </div>


  


  
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
							<a href="/contact" ><h3>Contact Us</h3></a>
							</div>
							
						</aside>
					</div>
				</div>
			</div>
		</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>


<script src="js/mediaelement-and-player.min.js"></script>

<script src="js/main.js"></script>
  

<script>
    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
  </script>

</body>
</html>