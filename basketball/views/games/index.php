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
    <link href="/basketball/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/basketball/webroot/css/common/main.css" rel="stylesheet">
    <link href="/basketball/webroot/css/main_my.css" rel="stylesheet">
    <link href="/basketball/webroot/css/post_all_my.css" rel="stylesheet">
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
          
          <form class="navbar-form navbar-left" role="search" action="index" method="post">
            <div class="form-group">
              <select name="sort" class="form-control">
                <option value="1">Older</option>
                <option value="2">Newer</option>
              </select>
              <select name="level" class="form-control">
                <option value="0">- level select -</option><!-- 1(Beginner),High Beginner,Low Intermediate,Intermediate,Advace(High) -->
                <option value="1">Beginner</option>
                <option value="2">High Beginner</option>
                <option value="3">Low Intermediate</option>
                <option value="4">Intermediate</option>
                <option value="5">Advace</option>
              </select>
              <select name="type" class="form-control">
                <option value="0">- match type -</option><!-- 1=serious / 2=friendely / 3=training -->
                <option value="1">serious</option>
                <option value="2">friendely</option>
                <option value="3">training</option>
              </select>
              <button type="submit" class="btn btn-success">SORT</button>
            </div>
          </form>

          <!-- my profile dropdown menu -->
          <ul class="nav navbar-nav navbar-right">
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
                <h1 class="match-title"><?php echo $value['title']; ?></h1>
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
                  // 1(Beginner), 2(High Beginner), 3(Low Intermediate), 4(Intermediate), 5(Advace(High))
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
              <button type="button" class="btn btn-default"><a href="show/<?php echo $value['id']; ?>">>> show more</a></button>
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