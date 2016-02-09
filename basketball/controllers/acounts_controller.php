<?php
require('models/'.changesingular($resource).'.php');

session_start();

$acountCont = new Acountscontroller();

//判定
switch($action){
  case 'login':
    $acountCont->login();
    break;
  case 'logout':
    $acountCont->logout();
    break;
  case 'signup':
    $acountCont->signup();
    break;
  default:
    echo 'error';
    break;
}

// login logout コントローラー
class Acountscontroller{
  //property
  private $resource = '';
  private $action = '';
  private $user_options = '';
  private $Acount = '';

  //construct
  public function __construct(){
    $acount = new Acount();// class Acount 呼び出し
    $this->user_options = array();
    $this->Acount = $acount;
  }

  //login　メソッド
  public function login(){
    //ティックを付けた場合
    if ($_COOKIE['username'] != ''){
      $_POST['username'] = $_COOKIE['username'];
      $_POST['password'] = $_COOKIE['password'];
      $_POST['save'] = 'on';
    }
    // var_dump($_POST['username']);
    // var_dump($_POST['password']);

    if ($_POST['username'] != '' && $_POST['password'] != '') { //空じゃない時

      $record = $this->Acount->getacount();
      $this->user_options = compact('record');
      // var_dump($this->user_options);

      if (!$this->user_options['record']) {
        //error 処理
        $_SESSION['error'] = 'failed';
        $uri = $_SERVER['HTTP_REFERER'];
        header('Location:'.$uri);

      }else{

        //ログイン成功
        $_SESSION['id'] = $this->user_options['record']['id'];
        $_SESSION['time'] = time();
        
        //login クッキー記録
        if ($_POST['save'] == 'on'){
          setcookie('username', $_POST['username'], time()+60*60*24*14);
          setcookie('password', $_POST['password'], time()+60*60*24*14);
        }
        //画面遷移
        header('Location:../games/index');
      }
    }else{
      //error 処理
      $_SESSION['error'] = 'blank';
      $uri = $_SERVER['HTTP_REFERER'];
      header('Location:'.$uri);
    }
  }

  //logout　メソッド
  public function logout(){
    //　セッション情報を削除
    $_SESSION = array();
    if (ini_get("session.use_cookies")){
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000, //マイナス時間を設定することで、cookieを無効に出来る
      $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
    session_destroy();

    // Cookie情報も削除する
    setcookie('email', '', time() - 3600 );//マイナス時間を設定することで、cookieを無効に出来る
    setcookie('password', '', time() - 3600 );//マイナス時間を設定することで、cookieを無効に出来る

    header('Location:../games/entrance');
    exit();
  }

  //signup メソッド
  public function signup(){
    $record = $this->Acount->makeacount($_POST);
    $this->user_options = compact('record');
    //ログイン成功
    $_SESSION['id'] = $this->user_options['record']['id'];
    $_SESSION['time'] = time();

    //login クッキー記録
    if ($_POST['save'] == 'on'){
      setcookie('username', $_POST['username'], time()+60*60*24*14);
      setcookie('password', $_POST['password'], time()+60*60*24*14);
    }
    //画面遷移
    header('Location:../games/index');
  }
}//end class Acountscontroller

function changesingular($value){
  //複数から単数形へ変換
  if ($value =='acounts') {
    return 'acount';
  }
}

?>