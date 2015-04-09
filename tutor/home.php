
<html>
<head>
<title>C Programming Tutorial</title>

<link rel="stylesheet" type="text/css" href="design.css" />

</head>
<body>
<div class="headline">
	<marquee behavior="alternate" direction="left" scrollamount="2">
	   <b><span>Your guide to C programming</span></b>
	</marquee>
</div>
<div id="top">
	<div style="height:100px;">
	       <div id="logo">
	       <a id="top"></a>	
               <a href="home.php"><img width="100" height="90" src="c.gif" alt="index" style="border:0;margin-top:5px;" /></a>
	       </div>
            <div class="afterlogin">
                
                <?php
                    require 'core.php';
                    require 'connect_me.php';
                    if(loggedin())
                    {
                        $id=getUser('u_id');
                        $fname=getUser('first_name');
                        $lname=getUser('last_name');
                    }
                    $query=mysql_query("SELECT * FROM users WHERE u_id=$id");
                    $row = mysql_fetch_array($query);
                    $content = $row['image'];
                    $en=base64_encode($content);
                    $mime="image/jpeg";
                    $b64src= "data:".$mime.";base64,".$en;
                    echo "<img width='60' height='60' src=".$b64src.">";
                    echo "&nbspHi<B>".$fname." ".$lname."<a href='logout.php'>Log out</a></B>";
                ?>
            </div>
	</div>
	
        <div id="header">
		<div id="headerTutorial">
			<a class="header" href="home.php" target="_top">HOME</a>
			<a class="header" href="chapters.php" target="_blank">CHAPTERS</a>
			<a class="header" href="test.php" target="_blank">TEST</a>
			<a class="header" href="query.php" target="_bkank">QUERY</a>
		</div>
		<div id=headerAbout>
			<a class="header" href="" target="_blank">REFERENCES</a> |
			<a class="header" href="" target="_blank">FORUM</a> |
			<a class="header" href="" target="_blank">ABOUT</a> |
			<a class="header" href="" target="_blank">CONTACT</a>
		</div>
        </div>

	<div id="content">
	    <br>
	    <p style={margin-left:40px;font-size:18px;}>Upload profile picture!</p>
            <div style={margin-left:40px;}>
                <form enctype="multipart/form-data" action="insertPhoto.php" method="post">
                    <input name="MAX_FILE_SIZE" value="102400" type="hidden">
                    <input name="image" accept="image/jpeg" type="file">
                    <input value="Upload" type="submit">
                </form>   
            </div>
        
	</div>
	<div id="signup">
                  
        </div>
	<div id="footer">
		<marquee behavior="alternate" direction="left" scrollamount="2">
	        <b><span>To post a Query you must Register your Name</span></b>
	        </marquee>
	</div>
	<br>
	<br>
	<br>
</div>
</body>
</html>
 