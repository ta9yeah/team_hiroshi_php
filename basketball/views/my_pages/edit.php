<?php
echo 'プロフィール編集ページ';
foreach($this->view_options['one_user'] as $row);
// echo $row['id'].'<br />';
// echo $row['user_id'].'<br />';
// echo $row['name'].'<br />';
// echo $row['name_flag'].'<br />';
// echo $row['nickname'].'<br />';
// echo $row['gender'].'<br />';
// echo $row['birthday'].'<br />';
// echo $row['birthday_flag'].'<br />';
// echo $row['basketball_level'].'<br />';
// echo $row['experience'].'<br />';
// echo $row['position'].'<br />';
// echo $row['height'].'<br />';
// echo $row['comment'].'<br />';
// echo $row['picture'].'<br />';
// echo $row['created'].'<br />';
// echo $row['modified'].'<br />';
?>
<form action="../edit_do" method="post"　enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br />
  name
  <input type="text" name="name" value="<?php echo $row['name'];?>"><br />
  nickname
  <input type="text" name="nickname" value="<?php echo $row['nickname'];?>"><br />
  gender
<?php
  switch ($row['gender']) {
    case '1':
      echo '<input type="radio" name="gender" value="1" checked="checked">男';
      echo '<input type="radio" name="gender" value="2" >女';
      break;
    case '2':
      echo '<input type="radio" name="gender" value="1" >男';
      echo '<input type="radio" name="gender" value="2" checked="checked">女';
      break;
    default:
      # code...
      break;
  }
?>
<br />
birthday
  <input type="date" name="birthday" value="<?php echo $row['birthday'];?>"><br />
  basketball_level
<?php
  switch ($row['basketball_level']) {
    case '1':
      echo '<input type="radio" name="basketball_level" value="1" checked="checked">Beginner';
      echo '<input type="radio" name="basketball_level" value="2" >Low Intermediate';
      echo '<input type="radio" name="basketball_level" value="3" >Intermediate';
      echo '<input type="radio" name="basketball_level" value="4" >High Intermediate';
      echo '<input type="radio" name="basketball_level" value="5" >Advanced';
      break;
    case '2':
      echo '<input type="radio" name="basketball_level" value="1" >Beginner';
      echo '<input type="radio" name="basketball_level" value="2" checked="checked">Low Intermediate';
      echo '<input type="radio" name="basketball_level" value="3" >Intermediate';
      echo '<input type="radio" name="basketball_level" value="4" >High Intermediate';
      echo '<input type="radio" name="basketball_level" value="5" >Advanced';
      break;
    case '3':
      echo '<input type="radio" name="basketball_level" value="1" >Beginner';
      echo '<input type="radio" name="basketball_level" value="2" >Low Intermediate';
      echo '<input type="radio" name="basketball_level" value="3" checked="checked">Intermediate';
      echo '<input type="radio" name="basketball_level" value="4" >High Intermediate';
      echo '<input type="radio" name="basketball_level" value="5" >Advanced';
      break;
    case '4':
      echo '<input type="radio" name="basketball_level" value="1" >Beginner';
      echo '<input type="radio" name="basketball_level" value="2" >Low Intermediate';
      echo '<input type="radio" name="basketball_level" value="3" >Intermediate';
      echo '<input type="radio" name="basketball_level" value="4" checked="checked">High Intermediate';
      echo '<input type="radio" name="basketball_level" value="5" >Advanced';
      break;
    case '5':
      echo '<input type="radio" name="basketball_level" value="1" >Beginner';
      echo '<input type="radio" name="basketball_level" value="2" >Low Intermediate';
      echo '<input type="radio" name="basketball_level" value="3" >Intermediate';
      echo '<input type="radio" name="basketball_level" value="4" >High Intermediate';
      echo '<input type="radio" name="basketball_level" value="5" checked="checked">Advanced';
      break;
    default:
      # code...
      break;
  }
?>
<br />
experience
  <input type="text" name="experience" value="<?php echo $row['experience'];?>"><br />
  position
<?php
  switch ($row['position']) {
    case '1':
      echo '<input type="radio" name="position" value="1" checked="checked">PG';
      echo '<input type="radio" name="position" value="2" >SG';
      echo '<input type="radio" name="position" value="3" >SF';
      echo '<input type="radio" name="position" value="4" >PF';
      echo '<input type="radio" name="position" value="5" >C';
      break;
    case '2':
      echo '<input type="radio" name="position" value="1" >PG';
      echo '<input type="radio" name="position" value="2" checked="checked">SG';
      echo '<input type="radio" name="position" value="3" >SF';
      echo '<input type="radio" name="position" value="4" >PF';
      echo '<input type="radio" name="position" value="5" >C';
      break;
    case '3':
      echo '<input type="radio" name="position" value="1" >PG';
      echo '<input type="radio" name="position" value="2" >SG';
      echo '<input type="radio" name="position" value="3" checked="checked">SF';
      echo '<input type="radio" name="position" value="4" >PF';
      echo '<input type="radio" name="position" value="5" >C';
      break;
    case '4':
      echo '<input type="radio" name="position" value="1" >PG';
      echo '<input type="radio" name="position" value="2" >SG';
      echo '<input type="radio" name="position" value="3" >SF';
      echo '<input type="radio" name="position" value="4" checked="checked">PF';
      echo '<input type="radio" name="position" value="5" >C';
      break;
    case '5':
      echo '<input type="radio" name="position" value="1" >PG';
      echo '<input type="radio" name="position" value="2" >SG';
      echo '<input type="radio" name="position" value="3" >SF';
      echo '<input type="radio" name="position" value="4" >PF';
      echo '<input type="radio" name="position" value="5" checked="checked">C';
      break;
    default:
      # code...
      break;
  }
?>
<br />
height
  <input type="number" name="height" step="0.1" min="0.1" max="10" value="<?php echo $row['height'];?>">ft<br />
comment
  <textarea name="comment"><?php echo $row['comment'];?></textarea><br />
picture
  <input type="file" name="picture" size="100" value="<?php echo $row['picture'];?>"><br />
  <input type="submit" value="UPDATE">
</form>