<?php
// echo '試合一覧';
// $all_games = $this->view_options['all_games'];
//var_dump($all_games);
// foreach ($all_games as $row) {
//   echo $row['id'].'<br />';
//   echo $row['master_id'].'<br />';
//   echo $row['date'].'<br />';
//   echo $row['start_time'].'<br />';
//   echo $row['end_time'].'<br />';
//   echo $row['deadline_date'].'<br />';
//   echo $row['deadline_time'].'<br />';
//   echo $row['title'].'<br />';
//   echo $row['comment'].'<br />';
//   echo $row['type'].'<br />';
//   echo $row['level'].'<br />';
//   echo $row['people_min'].'<br />';
//   echo $row['people_max'].'<br />';
//   echo $row['place_type'].'<br />';
//   echo $row['place_name'].'<br />';
//   echo $row['address'].'<br />';
//   echo $row['address_url'].'<br />';
//   echo $row['created'].'<br />';
//   echo $row['status_flag'].'<br />';
//   echo $row['modified'].'<br />';
//   echo $row['cancelled'].'<br />';
//   }
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
    <link href="/basketball/webroot/css/post_all_my.css" rel="stylesheet">

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
        <a href="#">SERCH</a>
      </div>
      <div class="col-sm-4 nav-center">
        LOGO
      </div>
      <div class="col-sm-4 nav-right">
        <a href="#" data-toggle="modal" data-target="#login-modal">LOG IN</a>
      </div>
    </div>
  </header><!-- end header nav -->

  <!-- heaer sort -->
  <form action="index" method="post">
    <select name="sort">
      <option value="1">古い順</option>
      <option value="2">新しい順</option>
    </select>
    <select name="level">
      <option value="0">特になし</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <select name="type">
      <option value="0">特になし</option>
      <option value="1">ガチンコ</option>
      <option value="2">練習試合</option>
      <option value="3">トレーニング</option>
    </select>
    <input type="submit" value="SORT">
  </form>

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
  <section>
  <div id="post-container">

    <!-- post each -->
    <?php foreach ($this->view_options['all_games'] as $value): ?>   
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
                <?php
                  switch($value['level']){
                    case '1':
                      echo '1(Beginner)';
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
                      echo 'Advace(High)';
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
  </section>

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

<a href="create">試合作成</a>
<a href="show/<?php echo $row['id']; ?>">試合詳細</a>

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