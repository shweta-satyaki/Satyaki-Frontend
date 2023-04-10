<?php
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
  
	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'admin@satyaki.co.in'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $body, $headers);
		$emailSent = true;
	}
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
     <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="AI, ML and Testing Solutions">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="./static/Icons/Satyakilogo.png">
  <meta name="description" content="AI, ML and Testing Solutions">
  <title>SATYAKI</title>


    <!--  
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link rel="stylesheet" href="./static/lib/bootstrap/dist/css/bootstrap.min.css">
    <!-- Template specific stylesheets-->
    <link rel="stylesheet" href="./static/fonts/Roboto_condensed.css">
    <link rel="stylesheet" href="./static/fonts/Adobe_arabic.css">
    <link rel="stylesheet" href="./static/fonts/Volkhov.css">
    <link rel="stylesheet" href="./static/fonts/opensans.css">
    <link rel="stylesheet" href="./static/lib/animate.css/animate.css">
    <!-- <link rel="stylesheet" href="./static/"> -->
    <link rel="stylesheet" href="./static/lib/components-font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/lib/flexslider/flexslider.css">
    <link rel="stylesheet" href="./static/lib/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./static/lib/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./static/lib/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="./static/lib/simple-text-rotator/simpletextrotator.css">
    <!-- Main stylesheet and color file -->
    <link rel="stylesheet" href="./static/css/style.css">
    <link id="color-scheme" rel="stylesheet" href="./static/css/colors/default.css">
    <link rel="stylesheet" href="./static/about/about.css">
    <link rel="stylesheet" href="./static/about/bootstrapabout.css">
    <link rel="stylesheet" href="./static/css/contactMobile.css">
    <link href="//db.onlinewebfonts.com/c/6b75b24d502dab23003320c2e1b2fc68?family=Adobe+Arabic" rel="stylesheet" type="text/css"/>
	<style>
@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1, 1);
  }
  to {
    -webkit-transform: scale(1.12, 1.12);
  }
}

@keyframes zoom {
  from {
    transform: scale(1, 1);
  }
  to {
    transform: scale(1.12, 1.12);
  }
}
.carousel-inner .item > img {
  -webkit-animation: zoom 10s;
  animation: zoom 10s;
}
#logo {
   position:absolute;
   top:5px;
   left:13px;
}
</style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-dark" role="navigation">
        <div>
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-logo" id="logo" href="/"><img src="./static/images/logo.png" alt="Satyaki" ></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              
            <li class="dropdown"><a  href="./aboutus.html" >About Us</a>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Solutions</a>
                <ul class="dropdown-menu">
                  <li><a href="./aisolutions.html">AI & ML Solutions</a></li>
                  <li><a href="./sted.html">STED</a></li>
                  <li><a href="./digital_branding.html">Digital Branding</a></li>
                  <li><a href="./full_stack_development.html">Full Stack Development</a></li>
                  <li><a href="./iot.html">IoT & Robotics</a></li>
                  <li><a href="./arkunHomePage.html">Arkun</a></li>
                </ul>
            </ul>
          </div>      
        </div>
      </nav>
       
	  
  <section class="module contact-page-header" id="home" data-background="./static/images/dev_export_assets/Desktop_assets/Contact_us/contact_us.png" >
    <div class="textbox">
        <h1 class="contact-text">CONTACT US</h1>

    </div>
  </section>
    <section class="module contact-page-body " id="home" data-background="./static/images/new_updated-images/new_updated_images/contat-us_background-updated.png">
      <div class="container">
        <div class="mobile">
         <div class="row">
            <div class="course-col">
                <img src="./static/images/contactus/call.png" alt="" srcset="">
                <p>
                  +91 7411767400
                </p>
            </div>
            <div class="course-col">
                <img src="./static/images/contactus/placeholder.png" alt="" srcset="">
                <p>
                   538, 34, 11th Cross Rd, 
                   near New Tippasandra, 
                   Narayana Nagar 2nd Block, Bengaluru, Karnataka 560062
                </p>
            </div>
            <div class="course-col">
                <img src="./static/images/contactus/email.png" alt="" srcset="">
                <p>
                  info@satyaki.co.in
                </p>
            </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="message">
            <h2>Have Any Questions?<br/>
            Drop Us A Message</h2>
            <div class="form1">
              <div class="form2">
                <div class="row2"></div>
                  <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
                    <fieldset>                      
                      <div class="row2">
                        <div class="name-col">
                          <input type="text" class="name_forms" name="name"  id="name" value="" placeholder="Name" role="input" required aria-required="true" />
                          <input type="text" class="email_forms" name="email" id="email" value="" placeholder="Email" role="input" required aria-required="true" />
                        </div>
                      </div>
                      <textarea class="forms" id="message" name="message" placeholder="Message" required></textarea>
                      <div class="actions">
                        <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-outline-primary ml-1 mt-5" title="Click here to submit your message!" />
                      </div>
                      <?php if(isset($hasError)) { //If errors are found ?>
                        <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
                      <?php } ?>

                      <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                        <div class="alert alert-success status">
                          <p><strong> We&rsquo;ll be in touch with you soon. </strong></p>
                        </div>
                      <?php } ?>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>

            <div class="icons">
              <div class="row">
                <div class="icon-col1">
                    <a href="https://www.facebook.com/Satyaki.co.in/"><img src="./static/images/contactus/facebook (1).png"/></a>
                </div>
                <div class="icon-col2">
                    <a href="https://www.instagram.com/satyakisolutions/"><img src="./static/images/contactus/instagram (1).png"/></a>
                </div>
                <div class="icon-col3">
                     <a href="https://www.linkedin.com/company/satyaki-solutions/"><img src="./static/images/contactus/linkedin (1).png"/></a>
                </div>
                <div class="icon-col4">
                     <a href="https://www.behance.net/satyakisolutio"><img src="./static/images/contactus/behance.png"/></a>
                </div>
                <div class="icon-col5">
                    <a href="https://youtube.com/channel/UC0YS9PxEXppwzpMoqKuGBuA"><img src="./static/images/contactus/youtube (3).png"/></a>
                </div>
              </div>
            </div>
    </section >
        <section class="location">
            <!-- <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.5672514729945!2d77.55219651413421!3d12.871203620557502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae4006ef27e2b1%3A0x1df79af8fe061c7c!2s538%2C%2034%2C%2011th%20Cross%20Rd%2C%20near%20New%20Tippasandra%2C%20Narayana%20Nagar%202nd%20Block%2C%20Near%2C%20New%20Tippasandra%2C%20Bengaluru%2C%20Karnataka%20560062!5e0!3m2!1sen!2sin!4v1651383245918!5m2!1sen!2sin" 
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
            </p> -->
            <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.5669245534955!2d77.55016781466334!3d12.871224695793073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15061118d301%3A0xfbb2b2df2dee241e!2sSatyaki!5e0!3m2!1sen!2sin!4v1651649981656!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
            
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.6978865666188!2d77.57348991413478!3d12.927128819351852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e33c78490ad%3A0x81b06b93f2f7a484!2sKNOVATION!5e0!3m2!1sen!2sin!4v1651384490926!5m2!1sen!2sin" 
            width="100%" height="618px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </section>	
    <!-- <hr class="divider-w"><hr class="divider-w"> -->
     <!-- <hr class="divider-d"> -->
     <footer class="footer bg-dark">
       <div class="container">
         <div class="row" style="margin-top:1%;">
           <div class=" col-xs-6 col-sm-6">
            <cool-ad>
              <template class="ad__mobile">
                <p class="copyright font-alt">&copy; 2022&nbsp;<a href="/">Satyaki</a></p>
              </template>
              <template class="ad__desktop">
                <p class="copyright font-alt">&copy; 2022&nbsp;<a href="/">Satyaki</a>, All Rights Reserved</p>
              </template>
            </cool-ad>
           </div>
           <div class="col-xs-6 col-sm-6">
             <div class="footer-social-links">
               <a href="https://www.facebook.com/Satyaki.co.in/" ><i class="fa fa-facebook"></i></a>
               <a href="https://instagram.com/satyakisolutions/"><i class="fa fa-instagram"></i></a>
               <a href="https://www.linkedin.com/company/satyaki-solutions/"><i class="fa fa-linkedin"></i></a>
               <a href="https://twitter.com/SatyakiSolutio1"><i class="fa fa-twitter"></i></a>
               <a href="https://www.behance.net/satyakisolutio"><i class="fa fa-behance"></i></a>
             </div>
           </div>
         </div>
       </div>
     </footer>
   </div>
   <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
 </main>
 <script src="./static/lib/jquery/dist/jquery.js"></script>
 <script src="./static/lib/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="./static/lib/wow/dist/wow.js"></script>
 <script src="./static/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
 <script src="./static/lib/isotope/dist/isotope.pkgd.js"></script>
 <script src="./static/lib/imagesloaded/imagesloaded.pkgd.js"></script>
 <script src="./static/lib/flexslider/jquery.flexslider.js"></script>
 <script src="./static/lib/owl.carousel/dist/owl.carousel.min.js"></script>
 <script src="./static/lib/smoothscroll.js"></script>
 <script src="./static/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
 <script src="./static/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
 <script src="./static/js/plugins.js"></script>
 <script src="./static/js/main.js"></script>

<script src="./static/about/bootstrap.bundle.min.js"></script>
</body>
<!--
 JavaScripts
 =============================================
 -->
 
</html>
