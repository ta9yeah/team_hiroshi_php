
<?php
echo '試合の詳細ページ';

$one_game = $this->view_options['one_game'];
foreach ($one_game as $row) {
  echo $row['id'].'<br />';
  echo $row['master_id'].'<br />';
  echo $row['date'].'<br />';
  echo $row['start_time'].'<br />';
  echo $row['end_time'].'<br />';
  echo $row['deadline_date'].'<br />';
  echo $row['deadline_time'].'<br />';
  echo $row['title'].'<br />';
  echo $row['comment'].'<br />';
  echo $row['type'].'<br />';
  echo $row['level'].'<br />';
  echo $row['people_min'].'<br />';
  echo $row['people_max'].'<br />';
  echo $row['place_type'].'<br />';
  echo $row['place_name'].'<br />';
  echo $row['address'].'<br />';
  echo $row['address_url'].'<br />';
  echo $row['created'].'<br />';
  echo $row['status_flag'].'<br />';
  echo $row['modified'].'<br />';
  echo $row['cancelled'].'<br />';
}
 
?>
<a href="../edit/<?php echo $row['id'];?>">試合編集</a>
<!-- <input type="button" value="DELETE" onClick="game_delete()"> -->
<a href="../destroy/<?php echo $row['id'];?>" onclick="game_delete()">試合削除</a>


