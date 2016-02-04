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
  default:
    echo 'error';
    break;
}

// login logout コントローラー
class Acountscontroller{
  //property
  private $resource = '';
  private $action = '';
  private $user_acount = '';
  private $Acount = '';

  //construct
  public function __construct(){
    $acount = new Acount();// class Acount 呼び出し

    $this->Acount = $acount;
  }

  //login　メソッド
  public function login(){
    //ティックを付けた場合
    // if ($_COOKIE['username'] != ''){
    //   $_POST['username'] = $_COOKIE['email'];
    //   $_POST['password'] = $_COOKIE['password'];
    //   $_POST['save'] = 'on';
    // }

    $record = $this->Acount->getacount();

    //取得の判定
    if ($table = $record){
      //login 成功
      $_SESSTION['id']   = $table['id'];
      $_SESSTION['time'] = time();

      //login クッキー記録
      // if ($_POST['save'] == 'on'){
      //   setcookie('username', $_POST['username'], time()+60*60*24*14);
      //   setcookie('password', $_POST['password'], time()+60*60*24*14);
      // }

      header('Location:index.php');
      exit();
    }else{
      $error['login'] = 'faild';
    }
  }
  //logout　メソッド
  public function logout(){
    $record = $this->Acount->signup();
    echo $record;
  }
}

function changesingular($value){
  //複数から単数形へ変換
  if ($value =='acounts') {
    return 'acount';
  }
}

?>