<?php

require('models/'.changesingular($resource).'.php');

$games = new Gamescontroller();

switch ($action) {
  case 'index':
    $games->index();
    break;
  
  case 'show':
    $games->show($id);
    break;
//createは試合作成画面の表示
  case 'create':
    $games->create();
    break;

//編集画面へ
  case 'edit':
    $games->edit($id);
    break;
//編集内容確認画面へ
  case 'edit_check':
    $games->edit_check();
    break;

  case 'edit_do':
    $games->edit_do();
    break;

  case 'destroy':
    $games->destroy();
    break;

  case 'view':
    $game->view();
    break;

  case 'update':
    $game->update();
    break;

  case 'delete':
    $game->delete();
    break;
//create2は試合作成を行う
  case 'create2';
    $games->create2();
    break;


  default:
    echo '席に戻ってやり直し';
    break;
}
  
  function changesingular($value){
    //複数から単数形へ変換
    if ($value =='games') {
      return 'game';
    }
  }

  //Gamescontrollerのクラス
  class Gamescontroller{
    //プロパティ
    private $resource = '';
    private $action = '';
    private $view_options = '';
    private $Game = '';
    private $id = -1;
    //$boxは試合作成データ
    private $box = '';
    private $edit ='';
    private $edit_check ='';

    //コンストラクタ
    public function __construct(){
       $game = new Game();
       $this->resource='games';
       $this->action='index';
       $this->view_options = array();
       $this->Game = $game;
    }

    // 試合一覧画面
    public function index(){
      //処理
      $all_games = $this->Game->findAll();

      $this->view_options = compact('all_games');
    
      $this->display();
    }

    //試合詳細画面
    public function show($id){

      $this->id=$id;

      $one_game = $this->Game->view($id);

      $this->view_options = compact('one_game');

      $this->action='show';

      $this->display();

      echo 'show';
    }

    //試合作成画面を表示
    public function create(){
      echo 'create';
      $this->display();
      
    }
    //試合を作成する
    public function create2(){
      echo 'create2';
      $box = $_POST;
      //データが入っているか確認する
      var_dump($box);
      //insert メソッドの呼び出し
      $this->Game->insert($box);

      //試合チェックに飛ぶ
      $this->action='check';
      $this->display();
    }

    //編集ページを表示
    public function edit($id){
      
      $this->id=$id;
      $edit_game = $this->Game->view($id);
      var_dump($edit_game);
      $this->view_options = compact('edit_game');

      $this->action="edit";
      $this->display();

      echo 'games_controller.phpのエコーedit';
    }

    //編集内容チェック画面表示
    public function edit_check(){
      $edit = $_POST;
    //edit内容受領確認
      var_dump($edit);

      $this->view_options = compact('edit');

      $this->action="edit_check";
      $this->display();

      echo "function edit_check";
    }

    public function edit_do(){
      $edit
    }

    //削除
    public function destroy(){
      echo 'destroy';
      //削除した後にどこに飛ぶか？
    }

    private function display(){
      require('/var/www/html/basketball/views/layout/application.php');
    }

  }




?>