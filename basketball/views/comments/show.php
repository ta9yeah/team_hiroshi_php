comments showのphpです。</br>
[id][user_id][match_id][comment][created][modified][delete_frag][deleted]</br>

<?php

// $id = $this->id;

$one_comments = $this->view_options['one_comments'];
//var_dump($one_comments);
//全部データ表示
foreach ($one_comments as $row){
	echo $row['id'].', ';
	echo $row['user_id'].', ';
	echo '<a href="show/'.$row['match_id'].'">'.$row['match_id'].'(しょう)</a>';
	// echo $row['match_id'].', ';
	echo $row['comment'].', ';
	echo $row['created'].', ';
	echo $row['modified'].', ';
	echo $row['delete_flag'].', ';
	echo $row['deleted'].', ';
?>
	<a href="../destroy/<?php echo $row['id']; ?>">[削除]</a></br>';
<?php
}

	echo '<a href="../index">一覧へ</a></br>'
?>

<html>
<form action="../create" method="post">
<input type="hidden" name="user_id" value="<?php echo '1'; ?>">
<input type="hidden" name="match_id" value="<?php $id; ?>">
<input type="text" name="comment" size="100">
<input type="submit" value="コメント">
</form>

</html>