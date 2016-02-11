<?php

class My_page{
  //プロパティ
  private $dbconnect='';

  //コンストラクタ
  public function __construct(){

    //+++ DB接続　+++//
    require('/var/www/html/basketball/dbconnect.php');
    //初期化処理
    $this->dbconnect = $db;
  }


  //プロフィール表示
  public function view($value){
    $return = array();
    $sql = 'SELECT * from `user_profiles` WHERE `user_id`='.$value.';';
    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
  }

  //編集
  public function update($box5){
    // editによる編集UPDATEのSQL文
    $sql = 'UPDATE `user_profiles` SET name="'.$box5['name'].'",
                                nickname="'.$box5['nickname'].'",
                                gender="'.$box5['gender'].'",
                                birthday="'.$box5['birthday'].'",
                                basketball_level="'.$box5['basketball_level'].'",
                                experience="'.$box5['experience'].'",
                                position="'.$box5['position'].'",
                                height="'.$box5['height'].'",
                                comment="'.$box5['comment'].'",
                                picture="'.$box5['picture'].'",
                                modified=NOW() WHERE `id` = '.$box5['id'].';';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
  }

  //スケジュール表示
  public function plan($user_id){
    $return = array();
    $sql = 'select * from match_members INNER JOIN matches ON matches.id = match_members.match_id WHERE match_members.user_id IN(SELECT '.$user_id.' FROM user_profiles)';
    $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    while ($row = mysqli_fetch_assoc($results)) {
      $return[] = $row;
    }
    return $return;
  }

  //アカウント作成
  public function signup($box6){
    //INSERTのSQL文
    $sql = 'INSERT INTO `users` SET   username = "'.$box6['username'].'", 
                                      password="'.$box6['password'].'",
                                      created=NOW();';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    $name = $box6['name']; 
    $user_id = mysqli_insert_id($this->dbconnect);
    // var_dump($user_id);
    $sql = 'INSERT INTO `user_profiles` SET user_id='.$user_id.',name="'.$name.'",created=NOW();';
    mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    
    // $user_id2 = $user_id;
    // return $user_id;
    // var_dump($user_id2);

  }
}




?>