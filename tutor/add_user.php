<?php
require 'connect_me.php';

  $unm=$_POST['user_name'];
  $psw=$_POST['password'];
  $fname=$_POST['first_name'];
  $lname=$_POST['last_name'];
  $day=$_POST['day'];
  $month=$_POST['month'];
  $year=$_POST['year'];
  $dob=$year.'-'.$month.'-'.$day;
  $gndr=$_POST['gender'];
  $phn=$_POST['phone'];
  echo $gndr;
  

if(!empty($unm) && !empty($psw) && !empty($fname) && !empty($lname) && !empty($dob) && !empty($gndr) && !empty($phn))
{
    $sql="INSERT INTO users (u_id,user_name,password,first_name,last_name,birth_day,gender,phone)
    VALUES('' , '$unm' , '$psw', '$fname' , '$lname' , '$dob' , '$gndr' , '$phn')";
    if(!mysql_query($sql,$con))
    { 
        header('Location: index.php');
        die('Unable to add record'.mysql_error());
    }
    else
    {
        echo "You're Registered Successfully!";
        header('Location: index.php');
    }
}



mysql_close($con);
?>




     