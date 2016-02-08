games participantのphpです。</br>
[id][match_id][user_id][cancel_flag][applied][cancelled][master_flag]</br>

<?php

$id = $this->id;

$members = $this->view_options['members'];
//var_dump($one_comments);
//全部データ表示
foreach ($members as $row){
	echo $row['id'].', ';
	echo $row['match_id'].', ';
	echo $row['user_id'].', ';
	echo $row['cancel_flag'].', ';
	echo $row['applied'].', ';
	echo $row['cancelled'].', ';
	echo $row['master_flag'].', </br></br>';
}
?>
<a href="../../games/show/<?php echo $id; ?>">試合詳細へ戻る</a></br>
