<?php

require('models/'.changesingular($resource).'.php');

$games = new Gamescontroller();

switch ($action) {
//エントランス
  case 'entrance':
    $games->entrance();
    break;
//試合一覧
  case 'index':
    $games->index();
    break;
//試合詳細
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
    $games->destroy($id);
    break;

  case 'view':
    $game->view();
    break;

  case 'update':
    $game->update();
    break;

  case 'check':
    $games->check();
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
    private $box2 = '';
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
    
    //試合一覧画面
    public function index(){
      //処理
      $all_games = $this->Game->findAll();

      $this->view_options = compact('all_games');
    
      $this->display();
    }

    //エントランス画面
    public function entrance(){
      $select_games = $this->Game->selectGame();

      $this->view_options = compact('select_games');

      $this->action = 'entrance';

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

      $this->action='create';
      $this->display();
      
    }
    //試合を作成する
    public function check(){
      echo 'check';
      //$box = $_POST;
      //データが入っているか確認する
      //var_dump($box);
      //試合チェックに飛ぶ
      $this->action='check';
      $this->display();
    }
    //試合を作成する
    public function create2(){
      $box2 = $_POST; 
      //var_dump($box2);
      //insert メソッドの呼び出し
      $this->Game->insert($box2);
      //試合一覧に飛ぶ
      header('Location:index');
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
      echo "function edit_check";
      $edit = $_POST;
    //edit内容受領確認
      //var_dump($edit);

      $this->view_options = compact('edit');

      $this->action="edit_check";
      $this->display();

    }

    public function edit_do(){
      $this->Game->update($_POST);

    //試合一覧に飛ぶ
      header("Location:index");
      exit();
    }

    //削除
    public function destroy($id){
      $this->Game->delete($id);
      //論理削除した後に一覧に飛ぶ
      header('Location:../index');
      
    }

    private function display(){
      require('/var/www/html/basketball/views/layout/application.php');
    }

  }




?>