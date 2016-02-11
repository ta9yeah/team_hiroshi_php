<?php
foreach($this->view_options['schedule'] as $row){
echo $row['type'].'<br />';
echo $row['date'].'<br />';
echo $row['start_time'].'<br />';
echo $row['title'].'<br />';
echo $row['status_flag'].'<br />';
}
?>
<a href="./show">プロフィール</a>
<a href="./alert">アラート</a>