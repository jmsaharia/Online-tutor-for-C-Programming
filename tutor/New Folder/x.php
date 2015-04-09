<?php
require 'connect_me.php';
session_start();

  $userid=$_SESSION['u_id'];
  $testid=1;
  $dateFormat ="Y-m-d H:i:s";
  $starttime=time();
  $closetime=time()+60*20;
  
  $actualDate = time();
    $secondsDiff = $closetime - $starttime;
    $remainingDay     = floor($secondsDiff/60/60/24);
    $remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
    $remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-         ($remainingHour*60*60))/60);
    $remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-    ($remainingHour*60*60))-($remainingMinutes*60));
    $actualDateDisplay = date($dateFormat,$starttime);
    $targetDateDisplay = date($dateFormat,$closetime);
  if(!empty($userid) && !empty($testid) && !empty($starttime) && !empty($closetime))
{
    $sql="INSERT INTO user_test (user_test_id,user_id,test_id,start_time,close_time)
    VALUES('' , '$userid' , '$testid', '$starttime' , '$closetime')";
    if(!mysql_query($sql,$con))
    { 
	//include "start1.php";
        die('Unable to add record'.mysql_error());
    }
    else
    {
	  // include "index.php";
    }
}
echo "Started Time:".date($dateFormat,$starttime)."<br>"."Closing Time:".date($dateFormat,$closetime)."<br>";
echo "Time Left:".$remainingMinutes.":".$remainingSeconds;


?>

<div class="rightcolumn">
			<h4 class="right">
			<video width="160" height="140" controls>
				<source src="movie.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<video width="160" height="140" controls>
				<source src="city.webm" type="video/webm">
				Your browser does not support the video tag.
			</video> 
	</div>