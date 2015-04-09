<?php
ob_start();
session_start();
//$current_file=$_SERVER['SCRIPT_NAME'];

function loggedin()
{
    if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function getUser($uid)
{
    $query="SELECT * FROM users WHERE u_id=".$_SESSION['u_id']."";
    if($query_run=mysql_query($query))
    {
        if($query_result=mysql_result($query_run,0,$uid))
        {
            return $query_result;
        }
    }
}
?>