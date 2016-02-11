<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>MATCH CREATE</title>

    <!-- Bootstrap core CSS -->
    <link href="/basketball/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="/basketball/webroot/css/common/main.css" rel="stylesheet"> -->
    <!-- <link href="/basketball/webroot/css/main_my.css" rel="stylesheet"> -->
    <!-- <link href="/basketball/webroot/css/common/post_create.css" rel="stylesheet"> -->
    <link href="/basketball/webroot/css/post_create_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/header.css" rel="stylesheet">

    <link href="/basketball/webroot/css/common/font-awesome.min.css" rel="stylesheet">

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
                           <input type="email" name="username" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
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

      <div class="row">
        <!-- <div class="col-lg-6 col-lg-offset-3"> --> 
        <div class="container auth">
          <div class="col-md-10 col-md-offset-1 auth-box">
            <h1 class="text-center"></h1>

            <header class="major">
              <h2>CREATE MATCH</h2>
              <img src="images/02.jpg" alt="user_image" class="img-circle user_image">
              <p>user name　さん<br>として、試合を作成しています。</p>
            </header>

            <div id="" class="well auth-box">

              <form action="check" method="post" class="form-horizontal">
                <fieldset>
                <!-- my form -->

                <!-- date -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="start_date">Match day</label>  
                  <div class="col-sm-7">
                    <input id="start_date" name="date" class="form-control input-md" type="date" required>
                  </div>
                </div>

                <!-- start time -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="startime">Start time</label>  
                  <div class="col-sm-7">
                    <input id="star_time" name="star_time" class="form-control input-md" type="time" step="900" value="10:00" required>
                  </div>
                </div>

                <!-- end time -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="end_time">End time</label>  
                  <div class="col-sm-7">
                    <input id="end_time" name="end_time" class="form-control input-md" type="time" step="900" value="12:00" required>
                  </div>
                </div>

                <!-- dead line -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="deadline_date">Dead line</label>  
                  <div class="col-sm-3">
                    <input id="deadline_date" name="deadline_date" class="form-control input-md" type="date" value="" required>
                  </div>
                  <div class="col-sm-3">
                    <input id="deadline_time" name="deadline_time" class="form-control input-md" type="time" step="900" value="10:00" required>
                  </div>
                </div>

                <!-- title-->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="match_title">Match title</label>
                  <div class="col-sm-7">
                    <input id="match_title" name="title" class="form-control input-md" type="text" placeholder="match title" required>
                  </div>
                </div>

                <!-- comment match -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="comment">comment</label>
                  <div class="col-sm-7">                     
                    <textarea id="comment" name="comment" class="form-control" required>tell us details</textarea>
                  </div>
                </div>

                <!-- Match type (inline\) -->
                <!-- 1=serious / 2=friendely / 3=training -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="radios">match type</label>
                  <div class="col-sm-9"> 
                    <label class="radio-inline" for="radios-0">serious</label>
                      <input id="radios-0" name="type" type="radio" value="1" checked="checked"> 
                    <label class="radio-inline" for="radios-1">friendely</label>
                      <input id="radios-1" name="type" type="radio" value="2"> 
                    <label class="radio-inline" for="radios-2">training</label> 
                      <input id="radios-2" name="type" type="radio" value="3" >  
                  </div>
                </div>

                <!-- player level -->
                <!-- 1(Beginner), 2(High Beginner), 3(Low Intermediate), 4(Intermediate), 5(Advace(High)) -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="level">match level</label>
                  <div class="col-sm-8"> 
                    <label class="radio-inline" for="level-0">Beginner</label> 
                      <input id="level-0" name="level" type="radio" value="1" checked="checked" >
                    <label class="radio-inline" for="level-1">High Beginner</label>
                      <input id="level-1" name="level" type="radio" value="2" >
                    <label class="radio-inline" for="level-2">Low Intermediate</label>
                      <input id="level-2" name="level" type="radio" value="3" >
                    <label class="radio-inline" for="level-3">Intermediate</label>
                      <input id="level-3" name="level" type="radio" value="4" >
                    <label class="radio-inline" for="level-4">Advace</label>
                      <input id="level-4" name="level" type="radio" value="5" >
                  </div>
                </div>

                <!-- how many player -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="people_min">How many player do you need?</label>  
                  <div class="col-sm-7">
                    <input id="people_min" name="people_min" class="form-control input-md" type="number" min="1" max="500" placeholder="min people?" value="12:00" required>
                  </div>
                </div>

                <!-- how many player -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="people_max">How many player<br>do you want?</label>  
                  <div class="col-sm-7">
                    <input id="people_max" name="people_max" class="form-control input-md" type="number" min="1" max="500" placeholder="how many do u want?" value="12:00" required>
                  </div>
                </div>

                <!-- address name -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="place_name">Where</label>
                  <div class="col-sm-7">
                    <input id="place_name" name="place_name" class="form-control input-md" type="text" placeholder="where" required>
                  </div>
                </div>

                <!-- address address -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="address">Address</label>
                  <div class="col-sm-7">
                    <input id="address" name="address" class="form-control input-md" type="text" placeholder="address" required>
                  </div>
                </div>

                <!-- address place type -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="radios">place type</label>
                  <div class="col-sm-7"> 
                    <label class="radio-inline" for="placetype-0">
                      <input id="placetype-0" name="place_type" type="radio" value="1" checked="checked">
                      Inside
                    </label> 
                    <label class="radio-inline" for="placetype-1">
                      <input id="placetype-1" name="place_type" type="radio" value="2">
                      Outside
                    </label> 
                  </div>
                </div>

                <!-- address google map -->
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="address_url">Google map</label>
                  <div class="col-sm-7">
                    <input id="address_url" name="address_url" class="form-control input-md" type="text" placeholder="address" required>
                  </div>
                </div>

                <!-- File Button 画像添付 --> 
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="match_image">Avatar</label>
                  <div class="col-sm-7">
                    <input id="match_image" name="match_image" class="input-file" type="file">
                  </div>
                </div>

                <!-- create button -->
                <div class="form-group">
                  <div class=" control-label">
                    <h4 class="col-sm-3">Attention</h4>
                  </div>
                  <div class="col-sm-7">
                    <p>sample text sample text sample text sample text sample text sample text<br>
                      sample text sample text sample text sample text sample text sample text </p>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-3 col-sm-ofset-4">
                    <input type="hidden" name="master_id" value="<?php echo $_SESSION['id']; ?>" />
                    <input type="submit" class="submit-button btn btn-primary" value="CREATE MATCH">
                  </div>
                </div>

                
                </fieldset>
              </form>
            </div><!-- end my form -->
            <div class="clearfix"></div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- /container -->
  </div><!-- /headerwrap -->
    
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





