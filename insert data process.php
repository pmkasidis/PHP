<?php include "connect sql.php"; ?>
<?php
  $id = $_POST['id']; //insert id
  $name = $_POST['name']; //insert name
  $pass = $_POST['pass']; //insert password
  $email = $_POST['email']; //insert e-mail

  mysqli_query($condb,"INSERT INTO .....(...,...,...,...)
                       VALUES('$id','$name','$pass','$email')");
 ?>
