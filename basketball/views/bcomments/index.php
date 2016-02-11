comments indexのviewです。</br>

<?php
$all_comments = $this->view_options['all_comments'];
//var_dump($all_comments);
//全部データ表示
foreach ($all_comments as $row){
	echo $row['id'].', ';
	echo $row['user_id'].', ';
	echo '<a href="show/'.$row['match_id'].'">'.$row['match_id'].'(しょう)</a>';
	echo $row['match_id'].', ';
	echo $row['comment'].', ';
	echo $row['created'].', ';
	echo $row['modified'].', ';
	echo $row['delete_flag'].', ';
	echo $row['deleted'].', ';
	echo '<a>[削除]</a></br>';
}
?>
