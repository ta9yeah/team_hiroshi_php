<?php
echo 'プロフィールのshowページ';
foreach($this->view_options['one_user'] as $row);
echo $row['id'].'<br />';
echo $row['user_id'].'<br />';
echo $row['name'].'<br />';
// echo $row['name_flag'].'<br />';
echo $row['nickname'].'<br />';
echo $row['gender'].'<br />';
echo $row['birthday'].'<br />';
// echo $row['birthday_flag'].'<br />';
echo $row['basketball_level'].'<br />';
echo $row['experience'].'<br />';
echo $row['position'].'<br />';
echo $row['height'].'<br />';
echo $row['comment'].'<br />';
echo $row['picture'].'<br />';
// echo $row['created'].'<br />';
// echo $row['modified'].'<br />';
?>
<a href="./edit/<?php echo $row['id'];?>">プロフィール編集</a>
<a href="./schedule">スケジュール</a>
<a href="./alert">アラート</a>
