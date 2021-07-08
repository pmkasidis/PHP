<?php include "connect sql.php"; ?>
<?php
  $id = $_POST['id']; //delete data from your id
  mysqli_query($condb,"DELETE FROM ..... WHERE .....='$id' ");//$condb in connect sql.php
 ?>
