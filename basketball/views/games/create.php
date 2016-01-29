<?php
echo '試合作成ページ';
?>
<form action="check" method="post">
  <p>date</p>
  <input type="date" name="date">
  <br />

  <p>start time</p>
  <input type="time" name="start_time">
  <br />

  <p>end time</p>
  <input type="time" name="end_time">
  <br />

  <p>deadline time</p>
  <input type="date" name="deadline_date">
  <br />

  <p>deadline time</p>
  <input type="time" name="deadline_time">
  <br />

  <p>Title</p>
  <input type="text" name="title">
  <br />

  <p>comment</p>
  <textarea name="comment"></textarea>
  <br />

  <tr>
    <td>Game type</td>
    <td>
      <input type="radio" name="type" value=1>ガチンコ
      <input type="radio" name="type" value=2>練習試合
      <input type="radio" name="type" value=3>トレーニング
    </td>
  </tr>
  <br />

  <tr>
    <td>Level</td>
    <td>
      <input type="radio" name="level" value=1>1
      <input type="radio" name="level" value=2>2
      <input type="radio" name="level" value=3>3
      <input type="radio" name="level" value=4>4
      <input type="radio" name="level" value=5>5
    </td>
  </tr>
  <br />

  <p>peoplemin</p>
  <input type="number" name="people_min" min=1 max=20 >
  <br />

  <p>peoplemax</p>
  <input type="number" name="people_max" min=2 max=100 >
  <br />

  <p>場所の名前</p>
  <input type="text" name="place_name">
  <br />

  <tr>
    <td>
      <input type="radio" name="place_type" value=1>屋内
      <input type="radio" name="place_type" value=2>屋外
    </td>
  </tr>
  <br />

  <p>address</p>
  <textarea name="address"></textarea>
  <br />

  <p>Google Map</p>
  <textarea name="address_url"></textarea>
  <br />
  <p>注意事項</p>
  <br />

  <input type="submit" value="CREATE MATCH">
</form>