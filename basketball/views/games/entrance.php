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
    <link href="/basketball/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/basketball/webroot/css/common/main.css" rel="stylesheet">
    <link href="/basketball/webroot/css/main_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/post_all_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/header.css" rel="stylesheet">

    <link href="/basketball/webroot/css/common/font-awesome.css" rel="stylesheet">

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
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
      <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../games/entrance">Mr.Anzai</a>
          <?php echo $_SESSION['id']; ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <!-- my profile dropdown menu -->
          
          <ul class="nav navbar-nav navbar-right">
          <?php if($_SESSION['id']): ?>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Show profile</a></li>
                <li><a href="#">Match info</a></li>

                <li class="divider"></li>
                <li><a href="#">Alert</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          <?php endif;?>

          <?php if($_SESSION['id']): ?>
            <!-- account アラート -->
            <li class="alert-success" role="alert">
              <a href="#" class="alert-link"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login as nickName</a>
            </li>
            <li class="alert-warning" role="alert">
              <a href="#" class="alert-link"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Let's make ur profile</a>
            </li>
            <li class="alert-danger" role="alert">
              <a href="#" class="alert-link"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Sign up !!!</a>
            </li>
          <?php endif;?>

            <!-- login form -->
            <li class="dropdown">
              <?php if(!$_SESSION['id']): ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
              <?php endif;?>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      Login via
                      <div class="social-buttons">
                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                      </div>
                      or
                      <form class="form" role="form" method="post" action="../acounts/login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputEmail2">Email address</label>
                           <input type="email" name="username" class="form-control" id="exampleInputEmail2" placeholder=
                           <?php
                            if($_SESSION['error'] == 'blank'){
                              echo '"U need E-mail & password" required>';
                            }elseif($_SESSION['error'] == 'failed'){
                              echo '"login failed, Try again" required>';
                            }else{
                              echo '"E-mail address" required>';
                            }
                           ?>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>'
                          <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                          <label>
                          <input type="checkbox" name="safe"> keep me logged-in
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="bottom text-center">
                      New here ? <a href="#"><b>Join Us</b></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <!-- logout -->
            <?php if($_SESSION['id']): ?>
            <li><a href="../acounts/logout" role="button"><b>Logout</b></a></li>
            <?php endif;?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
	
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
							
							<form class="form" role="form" method="post" action="../acount/signup" accept-charset="UTF-8" id="login-nav">
								<!-- <div class="form-group">
									<label class="sr-only" for="exampleInputName2">Your name</label>
									<input type="name" class="form-control" id="exampleInputName2" placeholder="Your name" required>
								</div> -->
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" name=""class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
									<input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Create account</button>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="keep-login" name="safe">
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

					<a class="btn btn-primary" href="../games/index" role="button"><i class="fa fa-dribbble"></i> Show matches</a>
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
		<div id="post-container">
			<?php foreach ($this->view_options['select_games'] as $value): ?> 	
				<!-- <div class="row mt"> -->
				<div class="post-wrap">
					<article>
						<div class="dg post-box color-0<?php echo $value['level']; ?>">
							<header>
								<p>match title :</p>
								<p></P>
								<h1 class="match-title"><?php echo $value['comment']; ?></h1>
							</header>
							<dl>		
								<dt>date :</dt><dd><?php echo $value['date']; ?></dd>
								<dt>time :</dt><dd><?php echo $value['start_time']; ?></dd>
								<dt>match type :</dt><dd>
								<?php //1=serious / 2=friendely / 3=training
									switch($value['type']){
										case '1':
											echo 'Serious';
											break;
										case '2':
											echo 'Friendely';
											break;
										case '3':
											echo 'Training';
											break;
										default:
											break;
									}
								?></dd>
								<dt>match Level :</dt><dd>
								<?php // 1(Beginner),High Beginner,Low Intermediate,Intermediate,Advace(High)
									switch($value['level']){
										case '1':
											echo 'Beginner';
											break;
										case '2':
											echo 'High Beginner';
											break;
										case '3':
											echo 'Low Intermediate';
											break;
										case '4':
											echo 'Intermediate';
											break;
										case '5':
											echo 'Advace';
											break;
										default:
											break;
									}
								?>
								</dd>
								<dt>number of recruited persons :</dt><dd><strong>00</strong>/<?php echo $value['people_max']; ?></dd>
								<dt>time limit for application :</dt><dd><?php echo $value['deadline_date']; ?><i class="fa fa-bomb"></i> <?php echo $value['deadline_time']; ?></dd>
							</dl>
							<button type="button" class="btn btn-default"><a href="#">>> show more</a></button>
						</div>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- </div> --><!-- row -->
	</div><!-- post_container -->

	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>Stay Connected</h1>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
	
	<!-- FOOTER -->
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
	<script>
	$(function(){
		var $container = $('#post-container');
			$container.imagesLoaded( function(){
			$container.masonry({
				itemSelector : '.post-wrap',
				isFitWidth: true
			});
		});
	});
</script>
  </body>
</html>
