<?php
echo '試合一覧';
$all_games = $this->view_options['all_games'];
//var_dump($all_games);
foreach ($all_games as $row) {
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
?>
<a href="create">試合作成</a>
<a href="show/<?php echo $row['id']; ?>">試合詳細</a>
<a href="edit/<?php echo $row['id'];?>">試合編集</a>
<br />
<br />

<?php
}
?>