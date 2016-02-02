<?php
echo '試合チェックページ';
$box = $_POST;
?>

  <p>date</p>
  <?php echo $box['date'];?>
  <br />

  <p>start time</p>
  <?php echo $box['start_time'];?>
  <br />

  <p>end time</p>
  <?php echo $box['end_time'];?>
  <br />

  <p>deadline time</p>
  <?php echo $box['deadline_date'];?>
  <br />

  <p>deadline time</p>
  <?php echo $box['deadline_time'];?>
  <br />

  <p>Title</p>
  <?php echo $box['title'];?>
  <br />

  <p>comment</p>
  <?php echo $box['comment'];?>
  <br />

  <tr>
    <td>Game type</td><br />
    <td>
    <?php 
    switch ($box['type']) {
      case '1':
      echo 'ガチンコ';
        break;

      case '2':
      echo '練習試合';
        break;
      
      case '3':
      echo 'トレーニング';
        break;

      default:
        # code...
        break;
    }?>
      
  </td>
  </tr>
  <br />

  <tr>
    <td>Level</td>
    <td>
      <?php
      switch ($box['level']) {
        case '1':
      echo '1';
          break;
        
        case '2':
      echo '2';
          break;

        case '3':
      echo '3';
          break;

        case '4':
      echo '4';
          break;

        case '5':
      echo '5';
          break;

        default:
          # code...
          break;
      }
      ?>
    </td>
  </tr>
  <br />

  <p>peoplemin</p>
  <?php echo $box['people_min'];?>
  <br />

  <p>peoplemax</p>
  <?php echo $box['people_max'];?>
  <br />

  <p>場所の名前</p>
  <?php echo $box['place_name'];?>
  <br />

  <tr>
    <td>
      <?php
      switch ($box['place_type']) {
        case '1':
      echo '屋内';
          break;
        
        case '2':
      echo '屋外';
          break;

        default:
          # code...
          break;
      }
      ?>

    </td>
  </tr>
  <br />

  <p>address</p>
  <?php echo $box['address'];?>
  <br />

  <p>Google Map</p>
  <?php echo $box['address_url'];?>

  <br />
  <p>注意事項</p>
  <br />
<form action="create2" method="post" enctype="multipart/form-data">
  <input type="hidden" name="date" value="<?php echo $box['date'];?>"　/>
  <input type="hidden" name="start_time" value="<?php echo $box['start_time'];?>" />
  <input type="hidden" name="end_time" value="<?php echo $box['end_time'];?>" />
  <input type="hidden" name="deadline_date" value="<?php echo $box['deadline_date'];?>" />
  <input type="hidden" name="deadline_time" value="<?php echo $box['deadline_time'];?>" />
  <input type="hidden" name="title" value="<?php echo $box['title'];?>" />
  <input type="hidden" name="comment" value="<?php echo $box['comment'];?>" />
  <input type="hidden" name="type" value="<?php echo $box['type'];?>" />
  <input type="hidden" name="level" value="<?php echo $box['level'];?>" />
  <input type="hidden" name="people_min" value="<?php echo $box['people_min'];?>" />
  <input type="hidden" name="people_max" value="<?php echo $box['people_max'];?>" />
  <input type="hidden" name="place_name" value="<?php echo $box['place_name'];?>" />
  <input type="hidden" name="place_type" value="<?php echo $box['place_type'];?>" />
  <input type="hidden" name="address" value="<?php echo $box['address'];?>" />
  <input type="hidden" name="address" value="<?php echo $box['address_url'];?>" />
  <input type="submit" value="CREATE MATCH">
  <input type="button" onclick="history.back()" value="BACK">
</form>