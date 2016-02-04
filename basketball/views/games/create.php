<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Team Hiroshi</title>

    <!-- Bootstrap core CSS -->
    <link href="/basketball/webroot/css/common/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/basketball/webroot/css/main.css" rel="stylesheet">
    <link href="/basketball/webroot/css/login.css" rel="stylesheet">
    <link href="/basketball/webroot/css/main_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/post_create.css" rel="stylesheet">
    <link href="/basketball/webroot/css/post_create_my.css" rel="stylesheet">

    <link href="/basketball/webroot/css/font-awesome.min.css" rel="stylesheet">

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
        <h1></h1>
        <h2></h2>
      </div>
    </div>

    <div class="row">
      <!-- <div class="col-lg-6 col-lg-offset-3"> --> 
      <div class="container auth">
        <div class="col-md-12 auth-box">
          <h1 class="text-center"></h1>

          <header class="major">
            <h2>CREATE MATCH</h2>
            <img src="images/02.jpg" alt="user_image" class="img-circle user_image">
            <p>user name　さん<br>として、試合を作成しています。</p>
          </header>

          <div id="big-form" class="well auth-box">
            <form action="check" method="post">
              <fieldset>
              <!-- my form -->
              <!-- date -->
              <div class="form-group">
                <label class=" control-label" for="start_date">Match day</label>  
                <div class="">
                  <input id="start_date" name="date" class="form-control input-md" type="date" required>
                </div>
              </div>
              <!-- start time -->
              <div class="form-group">
                <label class=" control-label" for="startime">Start time</label>  
                <div class="">
                  <input id="star_time" name="star_time" class="form-control input-md" type="time" step="900" value="10:00" required>
                </div>
              </div>
              <!-- end time -->
              <div class="form-group">
                <label class=" control-label" for="end_time">End time</label>  
                <div class="">
                  <input id="end_time" name="end_time" class="form-control input-md" type="time" step="900" value="12:00" required>
                </div>
              </div>
              <!-- dead line -->
              <div class="form-group">
                <label class=" control-label" for="deadline_date">Dead line</label>  
                <div class="">
                  <input id="deadline_date" name="deadline_date" class="form-control input-md" type="date" step="900" value="" required>
                </div>
                <div class="">
                  <input id="deadline_time" name="deadline_time" class="form-control input-md" type="time" step="900" value="" required>
                </div>
              </div>
              <!-- title-->
              <div class="form-group">
                <label class=" control-label" for="match_title">Match title</label>
                <div class="">
                  <input id="match_title" name="titile" class="form-control input-md" type="text" placeholder="match title" required>
                </div>
              </div>
              <!-- comment match -->
              <div class="form-group">
                <label class=" control-label" for="comment">comment</label>
                <div class="">                     
                  <textarea id="comment" name="comment" class="form-control" required>tell us details</textarea>
                </div>
              </div>
              <!-- Match type (inline\) -->
              <!-- 1=serious / 2=friendely / 3=training -->
              <div class="form-group">
                <label class=" control-label" for="radios">match type</label>
                <div class=""> 
                  <label class="radio-inline" for="radios-0">
                    <input id="radios-0" name="type" type="radio" value="1" checked="checked">
                    serious
                  </label> 
                  <label class="radio-inline" for="radios-1">
                    <input id="radios-1" name="type" type="radio" value="2">
                    friendely
                  </label> 
                  <label class="radio-inline" for="radios-2">
                    <input id="radios-2" name="type" type="radio" value="3" >
                    training
                  </label> 
                </div>
              </div>
              <!-- player level -->
              <!-- 1(Beginner), 2(High Beginner), 3(Low Intermediate), 4(Intermediate), 5(Advace(High)) -->
              <div class="form-group">
                <label class=" control-label" for="level">match type</label>
                <div class=""> 
                  <label class="radio-inline" for="level-0">
                    <input id="level-0" name="level" type="radio" value="1" checked="checked" >
                    1(Beginner)
                  </label> 
                  <label class="radio-inline" for="level-1">
                    <input id="level-1" name="level" type="radio" value="2" >
                    2(High Beginner)
                  </label> 
                  <label class="radio-inline" for="level-2">
                    <input id="level-2" name="level" type="radio" value="3" >
                    3(Low Intermediate)
                  </label>
                  <label class="radio-inline" for="level-3">
                    <input id="level-3" name="level" type="radio" value="4" >
                    4(Intermediate)
                  </label>
                  <label class="radio-inline" for="level-4">
                    <input id="level-4" name="level" type="radio" value="5" >
                    5(Advace)
                  </label>
                </div>
              </div>
              <!-- how many player -->
              <div class="form-group">
                <label class=" control-label" for="people_min">How many player do you want?</label>  
                <div class="">
                  <input id="people_min" name="people_min" class="form-control input-md" type="number" min="1" max="500" placeholder="how many?" value="12:00" required>
                </div>
              </div>
              <!-- how many player -->
              <div class="form-group">
                <label class=" control-label" for="people_max">How many player do you want?</label>  
                <div class="">
                  <input id="people_max" name="people_max" class="form-control input-md" type="number" min="1" max="500" placeholder="how many?" value="12:00" required>
                </div>
              </div>
              <!-- address name -->
              <div class="form-group">
                <label class=" control-label" for="place_name">Where</label>
                <div class="">
                  <input id="place_name" name="place_name" class="form-control input-md" type="text" placeholder="where" required>
                </div>
              </div>
              <!-- address address -->
              <div class="form-group">
                <label class=" control-label" for="address">Address</label>
                <div class="">
                  <input id="address" name="address" class="form-control input-md" type="text" placeholder="address" required>
                </div>
              </div>
              <!-- address place type -->
              <div class="form-group">
                <label class=" control-label" for="radios">place type</label>
                <div class=""> 
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
                <label class=" control-label" for="address_url">Google map</label>
                <div class="">
                  <input id="address_url" name="address_url" class="form-control input-md" type="text" placeholder="address" required>
                </div>
              </div>
              <!-- File Button 画像添付 --> 
              <div class="form-group">
                <label class=" control-label" for="match_image">Avatar</label>
                <div class="">
                  <input id="match_image" name="match_image" class="input-file" type="file">
                </div>
              </div>
              <!-- create button -->
              <div class="form-group">
                <div class="">
                  <p>注意事項</p>
                  <input type="submit" class="btn btn-primary" value="CREATE MATCH">
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





