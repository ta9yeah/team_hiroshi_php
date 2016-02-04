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
  public function findAll($box3){
    $return = array();
    
    //sort 表示
    if ($box3['sort']== null ) {
    $sql = 'select * from `matches` ORDER BY date DESC ;';
    }elseif ($box3['sort'] == 1) {
    $sql = 'select * from `matches` WHERE level="'.$box3['level'].'" AND type="'.$box3['type'].'" ORDER BY date;';
      if ($box3['level'] == 0) {
      $sql = 'select * from `matches` WHERE type="'.$box3['type'].'" ORDER BY date;';
        if ($box3['type'] == 0) {
        $sql = 'select * from `matches` ORDER BY date ;';
        }
      }elseif ($box3['type'] == 0) {
      $sql = 'select * from `matches` WHERE level="'.$box3['level'].'" ORDER BY date;';
      }
    }elseif ($box3['sort'] == 2) {
    $sql = 'select * from `matches` WHERE level="'.$box3['level'].'" AND type="'.$box3['type'].'" ORDER BY date DESC;';
      if ($box3['level'] == 0) {
      $sql = 'select * from `matches` WHERE type="'.$box3['type'].'" ORDER BY date DESC;';
        if ($box3['type'] == 0) {
        $sql = 'select * from `matches` ORDER BY date DESC;';
        }
      }elseif ($box3['type'] == 0) {
      $sql = 'select * from `matches` WHERE level="'.$box3['level'].'" ORDER BY date DESC;';
      }
    }

    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
  }

  //entrance
  public function selectGame(){
    $return  = array();
    $sql     = 'SELECT * FROM `matches` LIMIT 4';
    $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

    while($row = mysqli_fetch_assoc($results)){
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

  public function insert($box2){
    //INSERTのSQL文
    $sql = 'INSERT INTO `matches` SET master_id=1,date="'.$box2['date'].'",
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
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    $id=mysqli_insert_id($this->dbconnect);
    // var_dump($id);
    $sql = 'INSERT INTO `match_members` SET match_id='.$id.', user_id=1, applied=NOW(), master_flag=1;';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

  }

  public function update($id){
    //editによる編集UPDATEのSQL文
    $sql = 'UPDATE `matches` SET id="'.$id['id'].'",date="'.$id['date'].'",
                                start_time="'.$id['start_time'].'",end_time="'.$id['end_time'].'",
                                deadline_date="'.$id['deadline_date'].'",deadline_time="'.$id['deadline_time'].'",
                                title="'.$id['title'].'",comment="'.$id['comment'].'",type="'.$id['type'].'",
                                level="'.$id['level'].'",people_min="'.$id['people_min'].'",
                                people_max="'.$id['people_max'].'",place_name="'.$id['place_name'].'",
                                place_type="'.$id['place_type'].'",address="'.$id['address'].'",address_url="'.$id['address_url'].'",
                                modified=NOW() WHERE `id` = '.$id['id'].';';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
  }

  public function delete($id){
    //deleteによる編集UPDATEのSQL文(論理削除)　statusの部分を２にする作業
    $sql = 'UPDATE `matches` SET `status_flag`=2 WHERE `id` ='.$id.';';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));


  }

  //match_membersテーブルに追加
  public function join($id){
    $sql = 'INSERT INTO `match_members` SET `match_id`='.$id['match_id'].', `user_id`='.$id['user_id'].',applied=NOW();';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
  }

  public function duplicate($id){
    $sql = 'SELECT count(*) AS cnt FROM `match_members` WHERE match_id='.$id.' AND user_id=1 AND cancel_flag=0;';
    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    $return = mysqli_fetch_assoc($results);
    
    if ($return['cnt']>0) {
      return 'true';
    }else{
      return 'false';
    }
  }

  //match_membersでcancel_flag=1にする
  public function cancel($id){

    $sql = 'UPDATE `match_members` SET `cancel_flag`=1, `cancelled`=NOW() WHERE `match_id`='.$id['match_id'].' AND `user_id`='.$id['user_id'].';';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
  }
  

}


  
?>