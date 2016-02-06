<?php

require('models/'.changesingular($resource).'.php');

session_start();

$comments = new Commentscontroller();

switch ($action) {
  case 'index':
    $comments->index();
    break;

//showは個別gameに対するcomment一覧
  case 'show':
    $comments->show($id);
    break;

//createはcommentを直接DB送信
  case 'create':
    $comments->create();
    break;

//編集画面へ
  case 'edit':
    $comments->edit($id);
    break;

  case 'destroy':
    $comments->destroy($id);
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
       $comment = new Comment();
       $this->resource='comments';
       $this->action='index';
       $this->view_options = array();
       $this->Comments = $comment;
    }

    // 試合一覧画面
    public function index(){
      //処理
      $all_comments = $this->Comments->findAll();

//      var_dump($all_comments);

      $this->view_options = compact('all_comments');

      $this->display();
    }

    //試合詳細画面
    public function show($id){
      echo 'comments_show';

      $this->id=$id;

      $one_comments = $this->Comments->view($id);
      // var_dump($one_comments);

      $this->view_options = compact('one_comments');
      $this->action='show';

      $this->display();

    }

    //試合作成画面を表示
    public function create(){
      // echo 'comments_create';
      $this->id=$id;
      
      // var_dump($_POST);
      $this->Comments->insert($_POST);

      header("Location:show/".$_POST['match_id']);
    }

    //編集ページを表示
    public function edit(){
      echo 'comments_controller.phpのエコーedit';
    }

    //削除
    public function destroy($id){
      // echo 'comments_destroy';
      // $this->id=$id;
      $this->Comments->delete($id);
      $match_id=$this->Comments->delete($id);

      // var_dump($match_id['match_id']);
      header("Location:../show/".$match_id['match_id']);

      //削除した後にどこに飛ぶか？
    }

    private function display(){
      require('/var/www/html/basketball/views/layout/application.php');
    }

  }




?>