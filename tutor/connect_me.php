<?php
$con=mysql_connect('localhost','root','');
if(!@$con||!mysql_select_db('c_tutor'))
 {
  die('Unable to add record'.mysql_error());
 }


?>