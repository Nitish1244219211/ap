<?php
 //get the post records
$mail= $_REQUEST ['Usr'];
$pwd= $_REQUEST ['Pwd'];
//$cpwd= $_REQUEST ['CPwd'];
//$btn= $_POST['btn'];
//check mail n other aren't null

if(!$mail||!$pwd)
{}
  //verify pwd

//elseif($pwd==$cpwd)
   {
    /*check whether  Signup  btn dbaya ya nhi
      coz check kiye bina he agla conn kre ja ra 
      n Givin err*/
        include "conn.php";
        include "Lckusrdt.php";
        //include "dpusrdt.php";
        //include "intb.php";
      
   }
?>
