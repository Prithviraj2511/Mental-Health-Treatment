
<?php



include_once "dbh.php";
session_start();




?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>User</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
						<li><a class="nav-link" href="../../../../saboo/dashboard.php">Relaxation</a></li>
						
						<li><a class="nav-link" href="#appointment">Appointment</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#team">Doctor</a></li>
                        <li><a class="nav-link" href="registration form/index.html">Survey</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
						<li><a class="nav-link" href="logout.php">Logout</a></li>
				
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#" class="btn">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum</p>
							</div>
						</div>
					</div>
					
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to Health Lab </h2>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
								<a href="#" class="new-btn-d br-2">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="doctor1.jpg" alt="">
										</li>
										<li>
											<img src="doctor2.jpg" alt="">
										</li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Services -->
	
	<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Appointment</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Book an Appointment</h2>
                        </div>
                        <form action="appointment.php" method="post">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="email" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" >Doctors</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Choose Department">Choose Doctor</option>
											<option value="raj">Prithviraj</option>
											<option value="sri">Srividya</option>
											<option value="lokesh">Lokesh</option>
											<option value="rohan">Rohan</option>
											
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" id="singlebutton" name="singlebutton" class="new-btn-d br-2">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Appointment -->
	
	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-01.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-02.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-03.jpg" alt="">
						<div class="box-content">							
							<ul class="icon">
								<li><a href="images/gallery-03.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-04.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-04.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-05.jpg" alt="">
						<div class="box-content">							
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-05.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-06.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-06.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-07.jpg" alt="">
						<div class="box-content">
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-07.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-08.jpg" alt="">
						<div class="box-content">		
							<h3 class="title">Lorem ipsum dolor</h3>
							<ul class="icon">
								<li><a href="images/gallery-08.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Doctor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Srividya</h3>
                            <span class="post">Psychiatrist</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Lokesh</h3>
                            <span class="post">Psychologist</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Shalmali</h3>
                            <span class="post">Psychiatrist</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	
	<!-- End Team -->
	
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Statistics</h2>
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="6.jpg" alt="" />
						</div>
						
						<h2>Prevalence of Mental Illness <br>(By Age)</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a class="new-btn-d br-2" href="charts.php">Display Stats <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="2.jpg" alt="" />
						</div>
						
						<h2>Prevalence of Mental Illness <br>(By Race/Ethnicity) </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a class="new-btn-d br-2" href="charts2.php">Display Stats <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="1.jpg" alt="" />
						</div>
						
						<h2>Prevalence of Mental Illness <br>(By Gender)</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a class="new-btn-d br-2" href="charts3.php">Display Stats <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
		
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm" action="contactus.php" method="post">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="number" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" name="message" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
				
				
				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Address</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">demoinfo@gmail.com</a><br>
								<a href="#">demoinfo@gmail.com</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#">12345 67890</a><br>
								<a href="#">12345 67890</a>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Health Lab</a> Designed By : TEAM  POSEIDON</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
   
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>