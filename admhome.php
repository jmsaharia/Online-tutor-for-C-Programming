
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
                    require 'adm_core.php';
                    require 'connect_me.php';
                    if(loggedin())
                    {
                        $id=getAdmin('adm_id');
                        $fname=getAdmin('adm_fname');
                        $lname=getAdmin('adm_lname');
                    }
                    $query=mysql_query("SELECT * FROM administrator WHERE adm_id=$id");
                    $row = mysql_fetch_array($query);
                    echo "&nbspHi<B>".$fname." ".$lname."<a href='adm_logout.php'>Log out</a></B>";
                ?>
            </div>
	</div>
	
        <div id="header">
		<div id="headerTutorial">
			<a class="header" href="adm_test.php" target="_blank">ADDQUESTION</a>
			<a class="header" href="tutor/chapters.php" target="_blank">CHAPTERS</a>
			<a class="header" href="tutor/test.php" target="_blank">TEST</a>
			<a class="header" href="tutor/query.php" target="_bkank">QUERY</a>
		</div>
		<div id=headerAbout>
			<a class="header" href="" target="_blank">REFERENCES</a> |
			<a class="header" href="" target="_blank">FORUM</a> |
			<a class="header" href="" target="_blank">ABOUT</a> |
			<a class="header" href="" target="_blank">CONTACT</a>
		</div>
        </div>

	<div id="content">
	    
        
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
 