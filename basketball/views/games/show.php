
<?php
$one_game = $this->view_options['one_game'];
$check = $this->view_options['check'];

//var_dump($check);

foreach ($one_game as $row) {
  // echo $row['id'].'<br />';
  // echo $row['master_id'].'<br />';
  // echo $row['date'].'<br />';
  // echo $row['start_time'].'<br />';
  // echo $row['end_time'].'<br />';
  // echo $row['deadline_date'].'<br />';
  // echo $row['deadline_time'].'<br />';
  // echo $row['title'].'<br />';
  // echo $row['comment'].'<br />';
  // echo $row['type'].'<br />';
  // echo $row['level'].'<br />';
  // echo $row['people_min'].'<br />';
  // echo $row['people_max'].'<br />';
  // echo $row['place_type'].'<br />';
  // echo $row['place_name'].'<br />';
  // echo $row['address'].'<br />';
  // echo $row['address_url'].'<br />';
  // echo $row['created'].'<br />';
  // echo $row['status_flag'].'<br />';
  // echo $row['modified'].'<br />';
  // echo $row['cancelled'].'<br />';
}

if ($check == 'true') {
?>
<form action="../recall" method="post">
  <input type="hidden" name="match_id" value="<?php echo $row['id']; ?>">
  <input type="hidden" name="user_id" value="1">
  <input type="hidden" name="cancel_flag" value="1">
  <input class="btn btn-default" type="submit" value=">>Cancel...">
</form>

<?php
 }else{
?>
<form action="../apply" method="post">
  <input type="hidden" name="match_id" value="<?php echo $row['id']; ?>">
  <input type="hidden" name="user_id" value="1">
  <input class="btn btn-default" type="submit" value=">>Join!!">
</form>

<?php
 }
//>>>>>>> 33ad79aa9a16d14b181dd6acada24ec7412d6607
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>POST ALL</title>

    <!-- Bootstrap core CSS -->
    <link href="/basketball/webroot/css/common/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/basketball/webroot/css/common/main.css" rel="stylesheet">
    <link href="/basketball/webroot/css/common/login.css" rel="stylesheet">
    <link href="/basketball/webroot/css/main_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/post_all.css" rel="stylesheet">

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
    <div class="row">
      <div class="col-sm-4 nav-left">
        <a href="#">SEARCH</a>
      </div>
      <div class="col-sm-4 nav-center">
        LOGO
      </div>
      <div class="col-sm-4 nav-right">
        <!-- <a href="#" data-toggle="modal" data-target="#login-modal">LOG IN</a> -->
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Dropdown
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
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
    
  <!-- POSTS ALL -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <section>
        <div id="post-container">

          <div>
            <article>
              <div><!-- introduction -->
                <p>match title :</p>
                <h1 class="match-title"><?php echo $row['title'] ?></h1>
                <dl>
                  <!-- date -->
                  <dt>date :</dt><dd><?php echo $row['date']; ?></dd>
                  <!-- time -->
                  <dt>time :</dt><dd><?php echo $row['start_time']; ?></dd><dd>~<?php echo $row['end_time']; ?></dd>
                  <!-- place -->
                  <dt>place</dt><dd><?php echo $row['place_name']; ?></dd>
                  <!-- address -->
                  <dt>address</dt><dd><?php echo $row['address']; ?></dd>
                </dl>
              </div>
              <div><!-- body -->
                <h2>detail</h2>
                <dl>
                  <!-- game master -->
                  <dt>Game Master</dt><dd>Master name</dd><!-- master name を取り出す -->
                  <!-- comment -->
                  <dt>comment</dt><dd><?php echo $row['comment']; ?></dd>
                  <!-- matcht type -->
                  <dt>match type :</dt><dd><?php echo $row['type']; ?></dd>
                  <!-- match level -->
                  <dt>match Level :</dt><dd><?php echo $row['level']; ?></dd>
                  <!-- member -->
                  <dt>number of recruited persons :</dt><dd><strong><?php echo $row['people_min']; ?></strong>/<?php echo $row['people_max']; ?></dd>
                  <!-- dead line -->
                  <dt>time limit for application :</dt><dd><?php echo $row['deadline_date'].' ~'.$row['deadline_time']; ?></dd>
                </dl>
                <button type="button" class="btn btn-default"><a href="#">>> Join </a></button>
              </div>

              <div><!-- chat -->
                <h2>Ask master</h2>
                <!-- visiter -->
                <img class="visiter" src="">
                <p class="visiter-name">user name</p>
                <p class="visiter-comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                <!-- master -->
                <img class="visiter" src="">
                <p class="visiter-name">user name</p>
                <p class="visiter-comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
              </div>
            </article>
          </div>
        </div>
        </section>
      </div>
    </div>
  </div>

  <!-- SOCIAL FOOTER -->
  <footer>
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
  </footer>
  <a href="../index"> Return to Index </a>
  <a href="../../comments/show/<?php echo $row['id'];?>"> Chat board </a>

  <a href="../edit/<?php echo $row['id'];?>"> Edit </a>
<?php
  if ($row['id'] == $row['master_id']){
    echo '<a href="../destroy/'.$row['id'].'" onclick="game_delete('.$row['id'].')">試合削除</a>';
  }
?>
<?php
//endforeach;
?>

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
  });
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


