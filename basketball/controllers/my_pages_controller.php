<?php

require('models/'.changesingular($resource).'.php');

$my_pages = new My_pagescontroller();

switch ($action) {
  //マイプロフィール表示
  case 'show':
  //引数にuserのidの値を入れる
    $my_pages->show();
    break;
  //マイプロフィール編集
  case 'edit':
    $my_pages->edit($id);
    break;
  //マイアラート表示
  case 'alert':
    $my_pages->alert();
    break;
  //マイスケジュール表示
  case 'schedule':
    $my_pages->schedule();
    break;
  case 'edit_do':
    $my_pages->edit_do($id);
    break;
  //default
  default:
    echo '席に戻ってやり直し';
    break;
}

  function changesingular($value){
    //複数から単数形へ変換
    if ($value == 'my_pages') {
      return 'my_page';
    }
  }

  //My_pagescontrollerのクラス
  class My_pagescontroller{
    private $resource = '';
    private $action = '';
    private $view_options = '';
    private $My_page = '';
    private $id =-1;
    //$user_idというグローバル変数を作る必要がある

    //コンストラクタ
    public function __construct(){
      $my_page = new My_page();
      $this->resource = 'my_pages';
      $this->action = 'show';
      $this->view_options = array();
      $this->My_page = $my_page;
    }

    //マイプロフィール表示
    public function show(){
      // user_idはサインアップの時に作られるので、今はとりあえず4とする
      $user_id = 4;
      $one_user = $this->My_page->view($user_id);
      $this->view_options = compact('one_user');
      $this->display();
    }

    //マイプロフィール編集
    public function edit($id){
      $user_id = 4;
      $this->id=$id;
      $one_user = $this->My_page->view($user_id);
      $this->view_options = compact('one_user');
      $this->action="edit";
      $this->display();
    }

    public function edit_do($id){
       $box5 = $_POST;
       $this->My_page->update($box5);
      //マイプロフィール表示に戻る
      header("Location:show");
    }

    //マイスケジュール表示
    public function schedule(){
      echo "schedule";
      $user_id = 4;
      $schedule = $this->My_page->plan($user_id);
      $this->view_options = compact('schedule');
      $this->action = "schedule";
      $this->display();
    }


    //マイアラート表示
    public function alert(){
      
      echo "alert";
      $this->action = "alert";
      $this->display();
    }


    private function display(){
      require('/var/www/html/basketball/views/layout/application.php');
    }
  }

?>