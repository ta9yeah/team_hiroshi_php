<?php
  class Acount{
    //プロパティ
    private $dbconnect='';

    public function __construct(){
      //+++ DB接続 +++//
      require('/var/www/html/basketball/dbconnect.php');
      //初期化処理
      $this->dbconnect = $db;
    }

    //login　ログイン 
    public function getacount(){
      $return = array();
      if ($_POST['username'] != '' && $_POST['password'] != '') {
        $sql = sprintf('SELECT * FROM `users` WHERE `username`="%s" AND `password`="%s"',
               mysqli_real_escape_string($this->$dbconnect, $_POST['username']),
               mysqli_real_escape_string($this->$dbconnect, sha1($_POST['password']))
        );
        $results = mysqli_query($this->$dbconnect, $sql) or die(mysqli_error($this->dbconnect));
        while($row = mysqli_fetch_assoc($results)){
          $return[] = $row;
        }
        return $return;
      }else{
        $error['login'] = 'blank';
      }
    }
    //signUP サインアップ
    public function signup(){
      $hero = 'hello world';
      return $hero;
    }
  }

?>