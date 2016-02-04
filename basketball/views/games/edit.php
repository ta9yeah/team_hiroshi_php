<?php
echo '試合編集';

?>
<?php
$edit_game = $this->view_options['edit_game'];
//var_dump($edit_game);
$edit_game as $row
?>

<form action="../edit_check" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
Master ID</br>  <?php echo $row['master_id'];?>
</br>

date
<input type="date" name="date" size="100" value="<?php echo $row['date']; ?>" /></br>
start time
<input type="time" name="start_time" size="100" value="<?php echo $row['start_time']; ?>" /></br>
end time
<input type="time" name="end_time" size="100" value="<?php echo $row['end_time']; ?>" /></br></br>

deadline date
<input type="date" name="deadline_date" size="100" value="<?php echo $row['deadline_date']; ?>" /></br>
deadline time
<input type="time" name="deadline_time" size="100" value="<?php echo $row['deadline_time']; ?>" /></br></br>

title
<input type="text" name="title" size="100" value="<?php echo $row['title']; ?>" /></br>
comment
<input type="text" name="comment" size="100" value="<?php echo $row['comment']; ?>" /></br></br>

game type
<input type="text" name="type" size="100" value="<?php echo $row['type']; ?>" /></br>
Player wants level
<input type="text" name="level" size="100" value="<?php echo $row['level']; ?>" /></br></br>

people min
<input type="text" name="people_min" size="100" value="<?php echo $row['people_min']; ?>" /></br>
people max
<input type="text" name="people_max" size="100" value="<?php echo $row['people_max']; ?>" /></br></br>

place name
<input type="text" name="place_name" size="100" value="<?php echo $row['place_name']; ?>" /></br>
place type
<input type="text" name="place_type" size="100" value="<?php echo $row['place_type']; ?>" /></br>
address
<input type="text" name="address" size="100" value="<?php echo $row['address']; ?>" /></br>
address url
<input type="text" name="address_url" size="100" value="<?php echo $row['address_url']; ?>" /></br></br>

<input type="submit" value="Go to confirm" /></br>
</form>

<?php

?>