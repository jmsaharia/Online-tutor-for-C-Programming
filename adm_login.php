<?php
//$current_file=$_SERVER['SCRIPT_NAME'];
//$http_referer=$_SERVER['HTTP_REFERER'];
require 'connect_me.php';
require 'adm_core.php';
if(isset($_POST['adm_email']) && isset($_POST['adm_password']))
{
    $adm=$_POST['adm_email'];
    $psw=$_POST['adm_password'];
    if(!empty($adm) && !empty($psw))
    {
        $query="SELECT adm_id FROM administrator WHERE adm_email='".mysql_real_escape_string($adm)."'AND adm_password='".mysql_real_escape_string($psw)."'";
        if($query_run=mysql_query($query))
        {
            $query_num_rows=mysql_num_rows($query_run);
            if($query_num_rows==0)
            {
                echo "<BR><BR>"."<B>Invalid username or password!</B>";
                header('Location: admhome.php');
            }
            else if($query_num_rows==1)
            {
                $admid=mysql_result($query_run ,0,'adm_id');
                $_SESSION['adm_id']=$admid;
                header('Location: admhome.php');
            }
        }
    }
    else
    {
       echo "<BR><BR>"."<B>You must supply User name and Password.</B>";
    }
}
?>