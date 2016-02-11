
<?php
$one_game = $this->view_options['one_game'];
$check = $this->view_options['check'];

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
    <!-- <link href="/basketball/webroot/css/common/main.css" rel="stylesheet"> -->
    <!-- <link href="/basketball/webroot/css/main_my.css" rel="stylesheet"> -->
    <link href="/basketball/webroot/css/header.css" rel="stylesheet">
    <!-- <link href="/basketball/webroot/css/post_all.css" rel="stylesheet"> -->

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
          <a class="navbar-brand" href="../../games/entrance">Mr.Anzai</a>
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
          <?php if($_SESSION['id']): ?> 
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My menu <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Show profile</a></li>
                <li><a href="#">Match info</a></li>

                <li class="divider"></li>
                <li><a href="#">Alert</a></li>
                <li class="divider"></li>
                <li><a href="../games/create">Match Create</a></li>
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
    
  <!-- POSTS ALL -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <section>
        <?php foreach ($one_game as $row): ?>
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="../index">Return to Index</a></li>
          <li role="presentation" class="active"><a>Match deatail</a></li>
          <li role="presentation"><a href="../../comments/show/<?php echo $row['id'];?>">Chat board</a></li>
          <li role="presentation"><a href="../../games/participant/<?php echo $row['id'];?>">Participants</a></li>
          <li role="presentation"><a href="../edit/<?php echo $row['id'];?>">Edit</a></li>
        </ul>  
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
                  <dt>map</dt><dd><div id="map" style="width:330px; height:100px;"></div></dd>
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
                <!-- <button type="button" class="btn btn-default"><a href="#">>> Join </a></button> -->
              <?php endforeach; ?>

              <?php
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
              ?>
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
  <!-- <button type="button" class="btn btn-default"><a href="../index"> Return to Index </a></button> -->
  <!-- <button type="button" class="btn btn-default"><a href="../../comments/show/<?php //echo $row['id'];?>"> Chat board </a></button> -->
  <!-- <button type="button" class="btn btn-default"><a href="../../games/participant/<?php //echo $row['id'];?>"> Participants </a></button> -->
  <!-- <button type="button" class="btn btn-default"><a href="../edit/<?php //echo $row['id'];?>"> Edit </a></button> -->
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
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
<script>
    function drawMap(address) {
        var geocoder = new google.maps.Geocoder();
        //住所から座標を取得する
        geocoder.geocode(
                {
                    'address': address,//検索する住所　〒◯◯◯-◯◯◯◯ 住所　みたいな形式でも検索できる
                    'region': 'jp'
                },
                function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        google.maps.event.addDomListener(window, 'load', function () {
                            var map_tag = document.getElementById('map');
                            // 取得した座標をセット緯度経度をセット
                            var map_location = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
                            //マップ表示のオプション
                            var map_options =
                            {
                                zoom: 13,//縮尺
                                center: map_location,//地図の中心座標
                                //ここをfalseにすると地図上に人みたいなアイコンとか表示される
                                disableDefaultUI: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP//地図の種類を指定
                            };

                            //マップを表示する
                            var map = new google.maps.Map(map_tag, map_options);

                            //地図上にマーカーを表示させる
                            var marker = new google.maps.Marker({
                                position: map_location,//マーカーを表示させる座標
                                map: map//マーカーを表示させる地図
                            });
                        });
                    }
                }
        );
    }
    drawMap('<?php echo $row['address']; ?>');
</script>
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


