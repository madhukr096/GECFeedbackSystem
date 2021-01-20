<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vetrivel Pandian">
	<title>Online Student Feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<img src="images/Downloads_0_0.jpg" height="127" width="1348" >
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar" role="navigation" style="background:#0366fc;padding: 10px;font-weight: bold;font-size: 16px">
        <div class="container" >
		
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online Student Feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Register</a></li>
	 <li>
				<li><a style="color:#FFFFFF" href="login1.php"><i class="fa fa-sign-in fa-fw"></i>Login</a></li>
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						
						 
						 if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
						 
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/govt-college-hassan-college-view.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
		 <div class="item">
                <div class="fill" style="background-image:url('images/GEC1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/Government_Engineering_College,_Hassan.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->

	<div class="content">
    <p><meta name="google-site-verification" content="IwBrwNUF_ppQ6YvScxcX3TfSoLaWpOcwY9pDIcAVqO0" /></p>
<div style="color:black;background:#E6E6FA ; border:100px solid;border-radius:7px;border-color:transparent; padding:15px; text-align:justify"><strong>ವಿಷನ್</strong>
<div class="oSioSc">
<div id="tw-target">
<div class="gsrt tw-hfl tw-compact-ta-container" id="tw-target-text-container">ತಾಂತ್ರಿಕ ಸಾಮರ್ಥ್ಯ, ನಾಯಕತ್ವ ಗುಣಗಳು, ನೈತಿಕ ನಡವಳಿಕೆ ಮತ್ತು ನವೀನ ಸಾಮರ್ಥ್ಯಗಳನ್ನು ಹೊಂದಿರುವ ಉನ್ನತ ಗುಣಮಟ್ಟದ ವೃತ್ತಿಪರರನ್ನು ಅತ್ತ್ಯುತ್ತಮ ಶೈಕ್ಷಣಿಕ ವಾತಾವರಣ ಹಾಗೂ ಸೃಜನಶೀಲ ಬೋಧಕವರ್ಗದ ಸಹಕಾರದೊಂದಿಗೆ ರಚಿಸಲು ಎಂಜಿನಿಯರಿಂಗ್ ಶಿಕ್ಷಣ ಮತ್ತು ತಂತ್ರಜ್ಞಾನದ ಒಂದು ಆದರ್ಶಪ್ರಾಯ ಸಂಸ್ಥೆಯಾಗುವುದು.</div>
<p>
<strong>Vision</strong></p>
<div class="oSioSc">
<div id="tw-target">
<div class="gsrt tw-hfl tw-compact-ta-container">To become an exemplary institution for engineering education and technology to create high quality professionals having technical competency, leadership qualities, ethical behavior, innovative abilities with the support of best academic environment and creative faculty.</div>
</div>
</div>
</div>
</div>
</div>
  </div>
</div>
<div id="sidebar-second" class="column sidebar"><div class="section">
          <div class="region region-sidebar-second">
    <div id="block-block-1" class="block block-block">

    
 
	<!--Vetri Contents ends here-->

			</div>
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
