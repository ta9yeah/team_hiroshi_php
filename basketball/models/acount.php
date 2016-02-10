<?php
  class Acount{
    //プロパティ
    private $dbconnect='';

    public function __construct(){
      //+++ DB接続 +++//
      require('/var/www/html/basketball/dbconnect.php');
      //初期化処理
      $this->dbconnect = $db;
      // var_dump($this->dbconnect);
    }

    //login　ログイン 
    public function getacount(){
      $return = array();  
      //   $sql = sprintf('SELECT * FROM `users` WHERE `username`="%s" AND `password`="%s"',
      //          mysqli_real_escape_string($this->dbconnect, $_POST['username']),
      //          mysqli_real_escape_string($this->dbconnect, sha1($_POST['password']))
      //   );
        $sql = 'SELECT * 
                FROM `users` 
                WHERE `username`="' .$_POST['username']. '"
                AND `password`="' .$_POST['password']. '" ';
        $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
        $row = mysqli_fetch_assoc($results);
        $return = $row;
      
        return $return;
    }//end getacount()

    //entrance sginup
    public function makeacount(){
      $sql = 'INSERT INTO `users` SET `username`="'.$_POST['username'].'" ,`password`="'.$_POST['password'].'",created=NOW()';
      mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
      $sql2 = 'SELECT * 
                FROM `users` 
                WHERE `username`="' .$_POST['username']. '"
                AND `password`="' .$_POST['password']. '" ';
      $results = mysqli_query($this->dbconnect,$sql2) or die(mysqli_error($this->dbconnect));
      $row = mysqli_fetch_assoc($results);
      $return = $row;
    }

    

  }//end class Acount

?>