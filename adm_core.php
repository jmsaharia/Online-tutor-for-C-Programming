<?php
ob_start();
session_start();
//$current_file=$_SERVER['SCRIPT_NAME'];

function loggedin()
{
    if(isset($_SESSION['adm_id']) && !empty($_SESSION['adm_id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function getAdmin($admid)
{
    $query="SELECT * FROM administrator WHERE adm_id=".$_SESSION['adm_id']."";
    if($query_run=mysql_query($query))
    {
        if($query_result=mysql_result($query_run,0,$admid))
        {
            return $query_result;
        }
    }
}
?>