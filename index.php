<!-- edw kanw include thn bash apla logo oti den tha exete connection den tha sas to fortosi gi auto to ebagala -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Planner | Online Booking</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
         function hideURLbar(){ window.scrollTo(0,1); } 
      </script>
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
      <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
   </head>
   <body>
      <div class="w3_navigation">
         <div class="container">
            <nav class="navbar navbar-default">
               <div class="navbar-header navbar-left">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  <h1>
                     <a class="navbar-brand" href="index.php">
                        Planner 
                        <p class="logo_w3l_agile_caption">Online Booking</p>
                     </a>
                  </h1>
               </div>
               <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <nav class="menu menu--iris">
                     <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
                        <li class="menu__item"><a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">About</a></li>
                        <?php session_start(); if(!isset($_SESSION["user"])) { echo '<li class="menu__item"><a href="admin/index.php" class="menu__link">Login</a></li><li class="menu__item"><a href="admin/register.php" class="menu__link">Register</a></li>'; }else{ /* echo '<li><a href="admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>'; */ echo '<li class="menu__item"><a href="admin/logout.php" class="menu__link">Logout</a></li>'; } ?>
                     </ul>
                  </nav>
               </div>
            </nav>
         </div>
      </div>
      <div id="home" class="w3ls-banner">
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides callbacks callbacks1" id="slider4">
                  <li>
                     <div class="w3layouts-banner-top">
                        <div class="container">
                           <div class="agileits-banner-info">
                              <h4>Planner Online Booking</h4>
                              <h3>Plan every matter</h3>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="thim-click-to-bottom"><a href="#about" class="scroll"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4>Planner <span> | Online Booking</span></h4>
                  <img src="images/1.jpg" alt=" " class="img-responsive">
                  <h5>Plan every matter</h5>
               </div>
            </div>
         </div>
      </div>
      <div class="banner-bottom">
         <div class="container">
            <div class="agileits_banner_bottom">
               <h3><span>Plan your appointment. Enjoy fantastic offers!</span> Explore our recommendations</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
               <ul class="cbp-ig-grid">
                  <li>
                     <div class="w3_grid_effect">
                        <span class="cbp-ig-icon w3_road"></span>
                        <h4 class="cbp-ig-title">Doctors</h4>
                        <span class="cbp-ig-category">Available Doctors</span>
                     </div>
                  </li>
                  <li>
                     <div class="w3_grid_effect">
                        <span class="cbp-ig-icon w3_users"></span>
                        <h4 class="cbp-ig-title">Food & Drink</h4>
                        <span class="cbp-ig-category">Available Stores</span>
                     </div>
                  </li>
                  <li>
                     <div class="w3_grid_effect">
                        <span class="cbp-ig-icon w3_cube"></span>
                        <h4 class="cbp-ig-title">Clinics</h4>
                        <span class="cbp-ig-category">Available Clinics</span>
                     </div>
                  </li>
                  <li>
                     <div class="w3_grid_effect">
                        <span class="cbp-ig-icon w3_cube"></span>
                        <h4 class="cbp-ig-title">Clothing</h4>
                        <span class="cbp-ig-category">Available Clothing Stores</span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="advantages">
         <div class="container">
            <div class="advantages-main">
               <h3 class="title-w3-agileits">Our Services</h3>
               <div class="advantage-bottom">
                  <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                     <div class="advantage-block ">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <h4>Pay your way</h4>
                        <p>Our users have a variety of payment options to choose from, including:</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Credit and Debit cards</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Paypal</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>And cash of course!</p>
                     </div>
                  </div>
                  <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                     <div class="advantage-block">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>24/7 available support</h4>
                        <p>Our trained support team, is here to solve any issues you may face.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Technical issues</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Payment issues</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Appointment reprogramming</p>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
      <section class="contact-w3ls" id="contact">
         <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
               <div class="contact-agileits">
                  <h4>Contact Us</h4>
                  <p class="contact-agile2">Sign up to our Newsletter</p>
                  <form method="post" name="sentMessage" id="contactForm">
                     <div class="control-group form-group">
                        <label class="contact-p1">Full Name:</label><input type="text" class="form-control" name="name" id="name" required>
                        <p class="help-block"></p>
                     </div>
                     <div class="control-group form-group">
                        <label class="contact-p1">Phone Number:</label><input type="tel" class="form-control" name="phone" id="phone" required>
                        <p class="help-block"></p>
                     </div>
                     <div class="control-group form-group">
                        <label class="contact-p1">Email Address:</label><input type="email" class="form-control" name="email" id="email" required>
                        <p class="help-block"></p>
                     </div>
                     <input type="submit" name="sub" value="Submit" class="btn btn-primary">
                  </form>
                  <?php if(isset($_POST['sub'])) { $name =$_POST['name']; $phone = $_POST['phone']; $email = $_POST['email']; $approval = "Not Allowed"; $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ; if(mysqli_query($con,$sql)) echo"OK"; } ?>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
               <h4>Connect With Us</h4>
               <p class="contact-agile1"><strong>Phone: </strong>Coming Soon</p>
               <p class="contact-agile1"><strong>Email: </strong><a href="mailto:name@example.com">info@planner.com</a></p>
               <p class="contact-agile1"><strong>Address: </strong> Coming Soon</p>
               <div class="social-bnr-agileits footer-icons-agileinfo">
                  <ul class="social-icons3">
                     <li><a href="#" class="fa fa-facebook icon-border facebook"></a></li>
                     <li><a href="#" class="fa fa-twitter icon-border twitter"></a></li>
                     <li><a href="#" class="fa fa-google-plus icon-border googleplus"></a></li>
                  </ul>
               </div>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662"></iframe>
            </div>
            <div class="clearfix"></div>
         </div>
      </section>
      <div class="copy">
         <p>© 2021 Planner | Online Booking. All Rights Reserved | Design by <a href="index.php">Planner inc.</a></p>
      </div>
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><script src="js/jqBootstrapValidation.js"></script><script src="js/jquery-ui.js"></script><script>;$(function(){$('#datepicker,#datepicker1,#datepicker2,#datepicker3').datepicker()});</script>
      <link rel="stylesheet" href="css/swipebox.css">
      <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "7fUMkb4vpV");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
      <script src="js/jquery.swipebox.min.js"></script><script type="text/javascript">;jQuery(function(e){e('.swipebox').swipebox()});</script><script type="text/javascript" src="js/move-top.js"></script><script type="text/javascript" src="js/easing.js"></script><script type="text/javascript">;jQuery(document).ready(function(t){t('.scroll').click(function(o){o.preventDefault();t('html,body').animate({scrollTop:t(this.hash).offset().top},1000)})});</script><script defer src="js/jquery.flexslider.js"></script><script type="text/javascript">;$(window).load(function(){$('.flexslider').flexslider({animation:'slide',start:function(i){$('body').removeClass('loading')}})});</script><script src="js/responsiveslides.min.js"></script><script>;$(function(){$('#slider4').responsiveSlides({auto:!0,pager:!0,nav:!1,speed:500,namespace:'callbacks',before:function(){$('.events').append('<li>before event fired.</li>')},after:function(){$('.events').append('<li>after event fired.</li>')}})});</script><script src="js/main.js"></script><script src="js/easy-responsive-tabs.js"></script><script>;$(document).ready(function(){$('#horizontalTab').easyResponsiveTabs({type:'default',width:'auto',fit:!0,closed:'accordion',activate:function(i){var a=$(this),t=$('#tabInfo'),e=$('span',t);e.text(a.text());t.show()}});$('#verticalTab').easyResponsiveTabs({type:'vertical',width:'auto',fit:!0})});</script><script type="text/javascript">;$(document).ready(function(){$().UItoTop({easingType:'easeOutQuart'})});</script>
      <div class="arr-w3ls"><a href="#home" id="toTop" style="display:block"><span id="toTopHover" style="opacity:1"></span></a></div>
      <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
   </body>
</html>