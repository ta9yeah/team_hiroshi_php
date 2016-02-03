<?php

class Comment{
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
    $sql = 'select * from `comments` ;';
    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
   }

  public function view($value){
    //DBアクセス処理
    $return = array();
    $sql = 'select * from `comments` WHERE `delete_flag` = 0 AND `match_id` = '.$value.';';
    $results =mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
  }

  public function insert($comment){
    //INSERTのSQL文
    $sql = 'INSERT INTO `comments` SET user_id='.$comment['user_id'].', match_id='.$comment['match_id'].',
                                      comment="'.$comment['comment'].'", 
                                      created=NOW();';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

  }

  public function update($id){
  }

  public function delete($id){
    $sql = 'UPDATE `comments` SET delete_flag=1, deleted=NOW() WHERE id='.$id.';';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
  }
  
}
?>