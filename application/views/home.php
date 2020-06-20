<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TITANS Learning Portal</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('index.php'); ?>"><img src="assets/images/logo.png" height="90px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li>
		<!--Login Start-->

				<?php if ($this->session->flashdata('errmsg')){

					echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
				}
				?>
				<?php echo validation_errors(); ?>
				<?php echo form_open('Login/LoginUser'); ?>
					<div class="form-group" style="margin-top:5px;">
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</div>
					</li><li>
					<button type="submit" class="btn btn-warning" style="margin-top:10px; margin-left:10px;"><b>Log In</b></button>
				<?php echo form_close(); ?>
	
		<!--Login End-->
		</li>
		
          <li class="btn-trial"><a href="<?php echo base_url('index.php/Home/Register'); ?>">Register Now</a></li>
		            
 
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Banner-->
  <img src="assets\images\bg-banner.jpg" width="100%" height="580px" style="position:absolute;">
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"><img src="assets/images/bcslogo.png"></h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
              <p class="small-text">The impact of IT on modern society is greater than ever, it's down to all of us to ensure it is positive.<br> MATRIX IIT is engaging with BCS The Charted Institute for IT to give world wide students a full functional learning environment. </p>
             
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  
  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2><img src="assets/images/miit.png"></h2>
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Why you should use Distance Learning?</h4>
				<li>You can study from all over world.</li>
				<li>You will save money.</li>
				<li>Distance learning is a self-paced learning experience.</li>
				<li>Your schedule is flexible.</li>
				<li>You will increased your employability.</li>
				</ol></p>
				</div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>LEARNING hub Features</h4>
                <p>Ability to enroll for full BCS program which Certificate in IT, Diploma in IT and PGD in IT with Online modules, quizes, examinations as well as professional lecturers.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Award Winning Institute</h4>
                <p>MATRIX IIT has achieved 64 World Prizes and more than 10 Sri Lankan Prizes for BCS, BIT and ACS Qualifications from her inception.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->

  
  
  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3 align="left">Lecturer LogIn</h3>
<!--Lecturer Login Start-->
    <?php if ($this->session->flashdata('errmsg')){

        echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
    }
    ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('LoginLec/LoginUser'); ?>

        <div class="form-group" style="width:500px;">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>
        <div class="form-group" style="width:500px;">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="col-md-2 col-sm-4">
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Log In <i class="fa fa-arrow-right"></i></button>
		<?php echo form_close(); ?>
		  	<a href="<?php echo base_url('index.php/Home/RegisterLec'); ?>">Register Now</a>
        </div>
<!--Lecturer Login End-->
	  <br>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/contactform/contactform.js"></script>

</body>

</html>







<?php include 'partials/footer.php'?>


