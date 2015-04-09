<?php
require 'adm_core.php';
require 'connect_me.php';

  $qsn=$_POST['question'];
  $code=$_POST['code']; 
  $op1=$_POST['option1']; 
  $op2=$_POST['option2']; 
  $op3=$_POST['option3']; 
  $op4=$_POST['option4']; 
  $ans=$_POST['answer']; 
  if(loggedin())
  {
    $admid=getAdmin('adm_id');
    $_SESSION['adm_id']=$admid;
  }
  
  if(!empty($admid) && !empty($qsn) && !empty($code) && empty($op1) && empty($op2) && empty($op3) && empty($op4) && empty($ans))
  {
    $sql="INSERT INTO tests(question_id,adm_id,question,code,option1,option2,option3,option4,answer)
    VALUES('' , '$admid' , '$qsn','$code','$op1','$op2','$op3','$op4','$ans')";
    if(!mysql_query($sql,$con))
    { 
       die('Unable to add record'.mysql_error());
    }
    else
    {
      echo "Submitted Successfully!";
      header('Location: adm_test.php');
      exit;
    }
  }
?>