<?php
require 'core.php';
require 'connect_me.php';
  $qid=$_POST['query_id'];
  $rbody=$_POST['reply_body'];
  if(loggedin())
  {
    $rby=getUser('u_id');
    $_SESSION['u_id']=$rby;
  }
  
  if(!empty($qid) && !empty($rbody) && !empty($rby))
  {
    $sql2="INSERT INTO query_reply(reply_id,query_id,reply_body,reply_date,reply_by)
    VALUES('' , '$qid' ,'$rbody',now(), '$rby')";
    if(!mysql_query($sql2,$con))
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

