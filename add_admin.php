<?php
require 'connect_me.php';
$fname=$_POST['adm_fname'];
  $lname=$_POST['adm_lname'];
  $unm=$_POST['adm_email'];
  $psw=$_POST['adm_password'];
  
  
 
if(!empty($unm) && !empty($psw) && !empty($fname) && !empty($lname))
{
    $sql="INSERT INTO administrator 
    VALUES('' ,  '$fname' , '$lname' , '$unm' , '$psw')";
    if(!mysql_query($sql,$con))
    { 
        header('Location: admin_index.php');
        die('Unable to add record'.mysql_error());
    }
    else
    {
        echo "You're Registered Successfully!";
        header('Location: admin_index.php');
    }
}



mysql_close($con);
?>




     