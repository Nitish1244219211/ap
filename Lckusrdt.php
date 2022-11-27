<?php
$sql = "SELECT *  FROM `tb` WHERE `username` = '$mail'";
$rs=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
//if($row&&$rs)
if($row)
{
  $sql = "SELECT *  FROM `tb` WHERE `password` = '$pwd'";
  $rs=mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($rs);
//if($row&&$rs)
  if($row){
//       header("location:welcome.php");
//session_start();
       include"R.php";
     }
   else {//alert no pwd
        echo "wrong pwd";
        }
}
else{// alert no usr
     echo "no usr";
    }
?>
