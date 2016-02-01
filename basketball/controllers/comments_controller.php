<?php

require('models/'.changesingular($resource).'.php');

$comments = new Commentscontroller();

switch ($action) {
  case 'index':
    $comments->index();
    break;
  
  case 'show':
    $comments->show($id);
    break;
//createは試合作成画面の表示
  case 'create':
    $comments->create();
    break;

//編集画面へ
  case 'edit':
    $comments->edit($id);
    break;

  case 'destroy':
    $comments->destroy();
    break;

  case 'view':
    $comments->view();
    break;

  case 'update':
    $comments->update();
    break;

  case 'delete':
    $comments->delete();
    break;

  default:
    echo '席に戻ってやり直し';
    break;
}
  
  function changesingular($value){
    //複数から単数形へ変換
    if ($value =='comments') {
      return 'comment';
    }
  }

  //Gamescontrollerのクラス
  class Commentscontroller{
    //プロパティ
    private $resource = '';
    private $action = '';
    private $view_options = '';
    private $comment = '';
    private $id = -1;

    //コンストラクタ
    public function __construct(){
       $comment = new Comments();
       $this->resource='games';
       $this->action='index';
       $this->view_options = array();
       $this->Comments = $comment;
    }

    // 試合一覧画面
    public function index(){
      //処理
      $all_games = $this->Comments->findAll();

      $this->view_options = compact('all_comments');
    
      $this->display();
    }

    //試合詳細画面
    public function show($id){

      $this->id=$id;

      $one_game = $this->Comments->view($id);

      $this->view_options = compact('one_comments');

      $this->action='show';

      $this->display();

      echo 'comments_show';
    }

    //試合作成画面を表示
    public function create(){
      echo 'comments_create';  
    }
    

    //編集ページを表示
    public function edit(){
      echo 'comments_controller.phpのエコーedit';
    }


    //削除
    public function destroy(){
      echo 'comments_destroy';
      //削除した後にどこに飛ぶか？
    }

    private function display(){
      require('/var/www/html/basketball/views/layout/application.php');
    }

  }




?>