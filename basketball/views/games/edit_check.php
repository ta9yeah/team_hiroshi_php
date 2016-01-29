<?php
echo 'edit_check画面';

?>
<?php
$edit_check = $this->view_options['edit'];

var_dump($edit_check);

echo $edit_check['id']."</br>";
echo $edit_check['date']."</br>"; 
echo $edit_check['master_id'];?>
</br>

date</br>
<?php echo $edit_check['date']; ?>" /></br>
start time</br>
<?php echo $edit_check['start_time']; ?>"</br>
end time</br>
<?php echo $edit_check['end_time']; ?>"</br></br>

deadline date</br>
<?php echo $edit_check['deadline_date']; ?></br>
deadline time</br>
<?php echo $edit_check['deadline_time']; ?></br></br>

title</br>
<?php echo $edit_check['title']; ?></br>
comment</br>
<?php echo $edit_check['comment']; ?></br></br>

game type</br>
<?php echo $edit_check['type']; ?></br>
Player wants level</br>
<?php echo $edit_check['level']; ?></br></br>

people min</br>
<?php echo $edit_check['people_min']; ?></br>
people max</br>
<?php echo $edit_check['people_max']; ?></br></br>

place name</br>
<?php echo $edit_check['place_name']; ?></br>
place type</br>
<?php echo $edit_check['place_type']; ?></br>
address</br>
<?php echo $edit_check['address']; ?></br>
address url</br>
<?php echo $edit_check['address_url']; ?></br></br>

<p>チェックしたら送信</p>

<form action="edit_do" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $edit_check['id'] ?>" />
	<input type="hidden" name="date" size="100" value="<?php echo $edit_check['date']; ?>" />
	<input type="hidden" name="start_time" size="100" value="<?php echo $edit_check['start_time']; ?>" />
	<input type="hidden" name="end_time" size="100" value="<?php echo $edit_check['end_time']; ?>" />

	<input type="hidden" name="deadline_date" size="100" value="<?php echo $edit_check['deadline_date']; ?>" />
	<input type="hidden" name="deadline_time" size="100" value="<?php echo $edit_check['deadline_time']; ?>" />

	<input type="hidden" name="title" size="100" value="<?php echo $edit_check['title']; ?>" />
	<input type="hidden" name="comment" size="100" value="<?php echo $edit_check['comment']; ?>" />

	<input type="hidden" name="type" size="100" value="<?php echo $edit_check['type']; ?>" />
	<input type="hidden" name="level" size="100" value="<?php echo $edit_check['level']; ?>" />

	<input type="hidden" name="people_min" size="100" value="<?php echo $edit_check['people_min']; ?>" />
	<input type="hidden" name="people_max" size="100" value="<?php echo $edit_check['people_max']; ?>" />

	<input type="hidden" name="place_name" size="100" value="<?php echo $edit_check['place_name']; ?>" />
	<input type="hidden" name="place_type" size="100" value="<?php echo $edit_check['place_type']; ?>" />
	<input type="hidden" name="address" size="100" value="<?php echo $edit_check['address']; ?>" />
	<input type="hidden" name="address_url" size="100" value="<?php echo $edit_check['address_url']; ?>" />

	<input type="submit" value="UPDATE" /></br>

</form>

<?php

?>