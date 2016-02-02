<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Team Hiroshi</title>

    <!-- Bootstrap core CSS -->
    <link href="/basketball/webroot/css/common/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/basketball/webroot/css/common/main.css" rel="stylesheet">
    <link href="/basketball/webroot/css/common/login.css" rel="stylesheet">
	<link href="/basketball/webroot/css/main_my.css" rel="stylesheet">

    <link href="/basketball/webroot/fonts/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="/basketball/webroot/js/modernizr.custom.js"></script>
    
  </head>

  <body>

	<!-- Header Menu  -->
	<header>
		<div class="row">
			<div class="col-sm-4 nav-left">
				<a href="#">ABOUT US</a>
			</div>
			<div class="col-sm-4 nav-center">
				LOGO
			</div>
			<div class="col-sm-4 nav-right">
				<a href="#" data-toggle="modal" data-target="#login-modal">LOG IN</a>
			</div>
		</div>
	</header><!-- end header nav -->

	<!-- logIn form -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to Your Account</h1><br>
				<form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				</form>
				<p>or</p>
				<div class="row">
					<div class="col-md-5 social-box">
						<div class="social-buttons">
							<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>Facebook</a>
						</div>
					</div>
					<div class="col-md-5 social-box">
						<div class="social-buttons">
							<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i>Twitter</a>
						</div>
					</div>
				</div>
				<div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				</div><!-- end login-help -->
			</div><!-- end loginmodal-container -->
		</div><!-- end modal-dialog -->
	</div><!-- end login form -->
	
	<!-- MAIN IMAGE SECTION -->
	<div id="headerwrap">
		<div class="container">
			<div class="row catch-copy">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Hello Mr.Anzai!!</h1>
					<h2>I wanna play the basketball!!</h2>
				</div>
			</div>

			<div class="row signup-copy">
				<div class="col-lg-6 col-lg-offset-3">
					<h2>Sign up</h2>

					<div class="row signup"><!-- sign up -->
						<div class="col-md-5">
							
							<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
								<div class="form-group">
									<label class="sr-only" for="exampleInputName2">Email address</label>
									<input type="name" class="form-control" id="exampleInputName2" placeholder="Your name" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Create account</button>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="keep-login">
									<label for="keep-login">keep me logged-in</label>
								</div>
							</form>
						</div>

						<div class="col-md-2">
							<p>or</p>
						</div>

						<div class="col-md-5 social-box">
							<div class="social-buttons">
								<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>Facebook</a>
							</div>
							<div class="social-buttons">
								<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i>Twitter</a>
							</div>
						</div>

					</div><!-- end sign up -->

					<i class="fa fa-angle-down"></i>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	<!-- BLOG POSTS -->
	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>Recent Posts</h1>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
		
		<div class="row mt">
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post01.jpg" alt="">
				<h3><a href="#">Designing for the reader experience</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div>
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post02.jpg" alt="">
				<h3><a href="#">25 Examples of flat web application design</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div>
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post03.jpg" alt="">
				<h3><a href="#">We are an award winning design agency</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div>		
		</div><!-- row -->
	</div><!-- container -->

	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>Stay Connected</h1>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
	
	
	<!-- SOCIAL FOOTER -->
	<section id="contact">
	</section>
	<div id="sf">
		<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 dg">
				
				</div>
				<div class="col-lg-4 lg">
					
				</div>
				<div class="col-lg-4 dg">

				</div>
			</div><!-- row -->
		</div><!-- container -->
		</footer>
	</div><!-- Social Footer -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/basketball/webroot/js/bootstrap.min.js"></script>
    <script src="/basketball/webroot/js/main.js"></script>
	<script src="/basketball/webroot/js/masonry.pkgd.min.js"></script>
	<script src="/basketball/webroot/js/imagesloaded.js"></script>
    <script src="/basketball/webroot/js/classie.js"></script>
	<script src="/basketball/webroot/js/AnimOnScroll.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	</script>
  </body>
</html>
