<?php
echo 'edit_check画面';

?>
<?php
$edit_check = $this->view_options['edit'];

var_dump($edit_check);

foreach ($edit_check as $row){
echo $row['id'];
echo $row['date'];


?>
<!-- 
<form action="update" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" /></br>

date
<input type="hidden" name="date" value="<?php echo $row['date']; ?>" /></br>
start time
<input type="hidden" name="start_time" value="<?php echo $row['start_time']; ?>" /></br>
end time
<input type="hidden" name="end_time" value="<?php echo $row['end_time']; ?>" /></br></br>

deadline date
<input type="hidden" name="deadline_date" value="<?php echo $row['deadline_date']; ?>" /></br>
deadline time
<input type="hidden" name="deadline_time" value="<?php echo $row['deadline_time']; ?>" /></br></br>

title
<input type="hidden" name="title" value="<?php echo $row['title']; ?>" /></br>
comment
<input type="hidden" name="comment" value="<?php echo $row['comment']; ?>" /></br></br>

game type
<input type="hidden" name="type" value="<?php echo $row['type']; ?>" /></br>
Player wants level
<input type="hidden" name="level" value="<?php echo $row['level']; ?>" /></br></br>

people min
<input type="hidden" name="people_min" value="<?php echo $row['people_min']; ?>" /></br>
people max
<input type="hidden" name="people_max" value="<?php echo $row['people_max']; ?>" /></br></br>

place name
<input type="hidden" name="place_name" value="<?php echo $row['place_name']; ?>" /></br>
place type
<input type="hidden" name="place_type" value="<?php echo $row['place_type']; ?>" /></br>
address
<input type="hidden" name="address" value="<?php echo $row['address']; ?>" /></br>
address url
<input type="hidden" name="address_url" value="<?php echo $row['address_url']; ?>" /></br></br>

<input type="submit" value="Update!!" /></br>
</form>
 -->
<?php
}
?>