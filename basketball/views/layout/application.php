<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>バスケ</title>
<script type="text/javascript">
function game_delete(){
  
  if (window.confirm("Are you sure?")) {
    return true;
  }else{
    return false;
  }
}
</script>
</head>

<body>
    <?php
      include('./views/' . $this->resource . '/' . $this->action . '.php');
    ?>

</body>
</html>