<?php
$sql = "SELECT *  FROM `tb` WHERE `username` = '$mail'";          $rs=mysqli_query($conn,$sql);
$rs=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
//if($row&&$rs)
if($row)
{
  include"dpusr.php";
}
else{
include"intb.php";}
?>