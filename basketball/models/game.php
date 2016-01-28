<?php

class Game{
  //プロパティ
  private $dbconnect='';

  //コンストラクタ
  public function __construct(){
    
    //+++ DB接続 +++//
    require('/var/www/html/basketball/dbconnect.php');
    //初期化処理
    $this->dbconnect = $db;
  }

  //表示
   public function findAll(){
    $return = array();
    $sql = 'select * from `matches` ;';
    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
   }

  public function view($value){
    //DBアクセス処理
    $return = array();
    $sql = 'select * from `matches` where `id` = '.$value.';';
    $results =mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
  }

  public function insert($box){
    //INSERTのSQL文
    $sql = 'INSERT INTO `matches` SET ';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_query($this->dbconnect));
  }

  public function update(){

  }

  public function delete(){

  }
  
}


  
?>