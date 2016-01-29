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
    $sql = 'INSERT INTO `matches` SET master_id=1, date="'.$box2['date'].'",
                                      start_time="'.$box2['start_time'].'", 
                                      end_time="'.$box2['end_time'].'",
                                      deadline_date="'.$box2['deadline_date'].'",
                                      deadline_time="'.$box2['deadline_time'].'",
                                      title="'.$box2['title'].'",
                                      comment="'.$box2['comment'].'",
                                      type="'.$box2['type'].'",
                                      level="'.$box2['level'].'",
                                      people_min="'.$box2['people_min'].'",
                                      people_max="'.$box2['people_max'].'",
                                      place_name="'.$box2['place_name'].'",
                                      place_type="'.$box2['place_type'].'",
                                      address="'.$box2['address'].'",
                                      address_url="'.$box2['address_url'].'",
                                      created=NOW();';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_query($this->dbconnect));
  }

  public function update(){

  }

  public function delete(){

  }
  
}


  
?>