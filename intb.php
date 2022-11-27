<?php
//sql query;
$sql = "INSERT INTO `tb` (`username`,`password`) VALUES ('$mail','$pwd')";

// insert in database
$rs = mysqli_query($conn,$sql);
//close conn
//$cc=mysqli_close($conn);

if($_SERVER['REQUEST_METHOD']=='POST')
{if($rs){
include "alert.php";
}
else{
include "usralert.php";
  }
  }
/*if($rs){
include "alert.php";
}
else{
include "usralert.php";
}
//unset($mail,$pwd,$cpwd);*/
?>
