<?php
    require 'connect_me.php';
    require 'core.php';
    if(loggedin())
    {
      $id=getUser('u_id');
    }
    mysql_select_db ('c_tutor');
    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0)
    {
        $tmpName = $_FILES['image']['tmp_name'];
        $fp = fopen($tmpName, 'r');
        $data = fread($fp, filesize($tmpName));
        $data = addslashes($data);
        fclose($fp);
        $query1="UPDATE users SET image='$data' WHERE u_id='$id'";
        $result1=mysql_query($query1,$con);
        echo "Picture uploaded successfully!";
    }
    else
    {
        print "No image selected/uploaded";
    }
    
    header('Location: home.php');
    mysql_close($con);
?>
