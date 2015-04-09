<?php
$current_file=$_SERVER['SCRIPT_NAME'];
//$http_referer=$_SERVER['HTTP_REFERER'];
if(isset($_POST['user_name']) && isset($_POST['password']))
{
    $unm=$_POST['user_name'];
    $psw=$_POST['password'];
    if(!empty($unm) && !empty($psw))
    {
        $query="SELECT u_id FROM users WHERE user_name='".mysql_real_escape_string($unm)."'AND password='".mysql_real_escape_string($psw)."'";
        if($query_run=mysql_query($query))
        {
            $query_num_rows=mysql_num_rows($query_run);
            if($query_num_rows==0)
            {
               // echo "<BR><BR>"."<B>Invalid username or password!</B>";
            }
            else if($query_num_rows==1)
            {
                $uid=mysql_result($query_run ,0,'u_id');
                $_SESSION['u_id']=$uid;
                //header('Location: home.php');
                include "home.php";
            }
        }
    }
    else
    {
       // echo "<BR><BR>"."<B>You must supply User name and Password.</B>";
    }
}
?>