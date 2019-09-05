<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Evora</title>
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
								<li class="nav-item"><a class="nav-link" href="/">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="/Decorator">Decorations</a></li> 
								<li class="nav-item "><a class="nav-link" href="/Music">DJs/Music</a></li>
                                <li class="nav-item"><a class="nav-link" href="/Photography">Photography</a></li>
                                <li class="nav-item active"><a class="nav-link" href="#">Cake designer</a></li> 
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
               <div class="offset-3">
               <h1>Cake Designers<h1>
               </div>
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="uploads/cake/{{$data1->Main_pic}}" width="500" hight="800" alt="">
							</div>
                            
							<div class="media-body">
                            <div class="row">
                            <div class="column">
								<div class="personal_text">
									<h6>Hello Everybody, we are</h6> 
									<h3>{{$data1->Organization_Name}}</h3>
									<h5>Contact Person :-{{$data1->name }}</h5>
                                    <br>
                                    
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-home"></i> {{$data1->Address}}</a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i>{{$data1->Contact_No}}</a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> {{$data1->email}}</a></li>
										<li><a href="#"><i class="lnr lnr-earth" ></i>{{$data1->Link}}</a></li>
                                        
									</ul>
                                    <br>
                                      
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
        			<h2>offerings to my clients</h2>
        		</div>
        		<div class="feature_inner row">
                    @if($data1->Wedding_cake=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<img src="images/musicwedding.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>Wedding Cake</h4>
                           
                            
                        </div>
        			</div>
                    @endif

                    @if($data1->Birthday_cake=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <img src="images/partysalon.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>Birthday Cake</h4>
                          
        				</div>
        			</div>
                    @endif

                    @if($data1->Pastry_cake=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/musicbday.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>Pastry Cake</h4>
                           
                            
                        </div>
        			</div>
                    @endif

                    @if($data1->Cup_Cake=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/musicget.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>Cup Cake</h4>
                           
                            
                        </div>
        			</div>
                    @endif

                    @if($data1->Cake_Structure=="Available")
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                        <img src="images/musicget.jpg"  width="300" height="200 ">
                            <br><br>
        					<h4>Cake Structure</h4>
                           
                            
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
                                    <img src="uploads/cake/{{$data1->pic1}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" >
                                    <img src="uploads/cake/{{$data1->pic2}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/cake/{{$data1->pic3}}" alt="IMage" class="img-fluid">
                                    <br><br><br>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project">
                                    <img src="uploads/cake/{{$data1->pic4}}" alt="IMage" class="img-fluid">
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>
			
        </section>
        @endforeach
        <!--================End Home Gallery Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Testimonials</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="testi_inner">
					<div class="testi_slider owl-carousel">
						<div class="item">
							<div class="testi_item">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
                        
						<div class="item">
							<div class="testi_item">
                                
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
                        
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
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
    </body>
</html>