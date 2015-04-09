
<html>
<head>
<title>C Programming Tutorial</title>
<script src="valid.js"> </script>
<link rel="stylesheet" type="text/css" href="design.css" />
<link rel="stylesheet" type="text/css" href="design2.css" />
</head>
<body>
<div id="top">
	<div style="height:100px;">
	       <div id="logo">
	       <a id="top"></a>	
               <a href="home.php"><img width="100" height="90" src="c.gif" alt="index" style="border:0;margin-top:5px;" /></a>
	       </div>
	</div>
	
        <div id="header">
		<div id="headerTutorial">
			
                        <a class="header" href="chapters.php" target="_top">CHAPTERS</a>                       
			<a class="header" href="test.php" target="_top">TEST</a>
                        <a class="header" href="query.php" target="_top">QUERY</a>
		</div>
		<div id=headerAbout>
			<a class="header" href="" target="_top">REFERENCES</a> |
			<a class="header" href="" target="_top">FORUM</a>|
			<a class="header" href="" target="_top">ABOUT</a>|
			<a class="header" href="" target="_top">CONTACT</a>
		</div>
        </div>
	<div id="page">
		
	<div id="leftcolumn" style={width:300px;height:1000px;overflow-y:scroll;}>
          <h2 class='left'>Frequently Asked Question</h2>
        <?php
        
         function showImage($id)
        {
            $query=mysql_query("SELECT * FROM users WHERE u_id=$id");
            $row = mysql_fetch_array($query);
            $content = $row['image'];
            $en=base64_encode($content);
            $mime="image/jpeg";
            $b64src= "data:".$mime.";base64,".$en;
            echo "<img width='60' height='60' src=".$b64src.">";
        }
        
        $con1=mysqli_connect("localhost","root","","c_tutor");
        $result = mysqli_query($con1,"SELECT * FROM query");
        $i=1;
        while($row = mysqli_fetch_array($result))
        {
            echo "<a href='#Q".$i."' target='_top'>". $row['query_title']."</a><BR>";
            $i++;
        }
        ?>
	</div>
	</div>
        <div id='main' style={width:697px;height:1000px;background-color:#e5eecc;overflow-y:scroll;}>
		<h1 style={font-size:30px;color:#0000ff;padding-left:130px;}>Start a new discussion</h1>
		<form  name="frmquery" action="addQuery.php" method="post" onsubmit="return validateQuery();">
                <table border="1" width="670" cellspacing="0" cellpadding="20">
                <tr>
                <td>
                    Query Title<BR>
                    <textarea name="query_title" rows="1" cols="75"></textarea><br><br>
                    Query Body<BR>
                    <textarea name="query_body" rows="5" cols="75"></textarea><br><br>
                    <input type="submit" value="submit">
                </td>
                </tr>
                </table>    
		</form>
        <?php    
	require 'connect_me.php';
        $con1=mysqli_connect("localhost","root","","c_tutor");
        $result = mysqli_query($con1,"SELECT * FROM query");
        $j=1;
        while($row = mysqli_fetch_array($result))
	{
            echo "<h4><a id='Q".$j."'>Query ".$j."</a></h4>";
	    echo "<table border='1' width='670' cellspacing='0' cellpadding='20'>";
            $uid=$row['query_by'];
	    $result1= mysqli_query($con1,"SELECT * FROM users WHERE u_id=$uid");
            echo "<tr>";
            echo "<td>";
            //to display profile picture of the query user
            showImage($uid);
    
            if($row1=mysqli_fetch_array($result1))
            {
                echo "<br><i>". $row1['first_name']."&nbsp".$row1['last_name']."<br>". $row['query_date'] ."</i>".
                "<h1>" .nl2br($row['query_title'])."</h1>". nl2br($row['query_body'])."<BR><BR>";
            }
	    $qid= $row['query_id'];
            $result2=mysqli_query($con1,"SELECT * FROM query_reply WHERE query_id=$qid");
                
            while($row2=mysqli_fetch_array($result2))
            {
	    	echo "<table style={background-color:#F0F0F0;} border='1' width='624' cellspacing='0' cellpadding='10'>";
    		$uid2=$row2['reply_by'];
                $result3= mysqli_query($con1,"SELECT * FROM users WHERE u_id=$uid2");
                echo "<tr>";
                echo "<td>";
                //to display profile picture of the reply user
                showImage($uid2);
                
		if($row3=mysqli_fetch_array($result3))
		{
                    echo "<br><i>". $row3['first_name']."&nbsp".$row3['last_name']."<br>". $row2['reply_date'] ."</i>"."<br><br>".nl2br($row2['reply_body']) . "</td>";
		}
    		echo "</tr>";
    		echo "</table><BR>";
	    }
	    echo "<form action='addReply.php' method='post' name='frmReply' formtarget='_self' onsubmit='return validateReply();'>";
                echo "<input type='hidden' name='query_id' value='".$qid."'>";
	    	echo "<textarea name='reply_body' rows='5' cols='75'></textarea><br><br>";
	    	echo "<input type='submit' value='Reply'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
            echo "</table><br><br><br>";
            $j++;
        }
        ?>
	</div>
       
        <div id="footer" style={margin-top:1000px;}>
		<marquee behavior="alternate" direction="left" scrollamount="2">
	        <b><span>To post a Query you must Register your Name</span></b>
	        </marquee>
	</div>
	<br>
	<br>
	<br>
        <br>
	<br>
</div>
 </div>
</body>
</html>


