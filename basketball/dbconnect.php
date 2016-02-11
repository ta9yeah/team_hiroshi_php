<?php
require('const.php');
//開発環境
	// $db = mysqli_connect('localhost','root','mysql','basketball') or die(mysqli_connect_error());
	// mysqli_set_charset($db,'utf8');

//本番用（sakura）
	// $db = mysqli_connect('mysql457.db.sakura.ne.jp','cebu-basketball','basketball_1116','cebu-basketball_hiroshi') or die(mysqli_connect_error());
	// mysqli_set_charset($db,'utf8');

//const.php
	$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die(mysqli_connect_error());
	mysqli_set_charset($db,'utf8');
?>