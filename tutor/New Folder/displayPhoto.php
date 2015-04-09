
<?php
require 'connect_me.php';
require 'core.php';
mysql_select_db('c_tutor') or die("Can not select the database: ".mysql_error());

 /* if(loggedin())
    {
      $id=getUser('u_id');
      $_SESSION['u_id']=$id;
    }  */
    $id=$_GET['id'];

    if(!isset($id) && !is_numeric($id))
    {
        die("Please select your image!");
    }
    else
    {
        $query=mysql_query("SELECT * FROM users_photo WHERE u_id=$id");
        $row = mysql_fetch_array($query);
        $content = $row['image'];
        $en=base64_encode($content);
        $mime="image/jpeg";
        $b64src= "data:".$mime.";base64,".$en;
    }
    mysql_close($con);
?>
