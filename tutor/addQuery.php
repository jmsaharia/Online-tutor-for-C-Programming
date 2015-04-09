<?php
require 'core.php';
require 'connect_me.php';

  $qtitle=$_POST['query_title'];
  $qbody=$_POST['query_body']; 
  if(loggedin())
  {
    $qby=getUser('u_id');
    $_SESSION['u_id']=$qby;
  }
  
  if(!empty($qtitle) && !empty($qby))
  {
    $sql="INSERT INTO query (query_id,query_title,query_body,query_date,query_by)
    VALUES('' , '$qtitle' , '$qbody', now(),'$qby')";
    if(!mysql_query($sql,$con))
    { 
       die('Unable to add record'.mysql_error());
    }
    else
    {
      echo "Submitted Successfully!";
      header('Location: query.php');
      exit;
    }
  }
?>