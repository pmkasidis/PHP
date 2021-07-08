<?php include "connect sql.php"; ?>
<?php
 $sql ="SELECT * FROM .....";
 $result = $condb->query($sql);

 if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
     echo $row["....."] .$row["....."] .$row["....."] .$row["....."]."<br>";
   }
 }
 else{
  echo "0 row";
}
?>
