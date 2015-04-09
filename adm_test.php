
<html>
<head>
<title>C Programming Tutorial</title>

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
			<a class="header" href="adm_test.php" target="_blank">ADDQUESTIONS</a>
            <a class="header" href="tutor/chapters.php" target="_blank">CHAPTERS</a>                       
			<a class="header" href="tutor/test.php" target="_blank">TEST</a>
            <a class="header" href="tutor/query.php" target="_blank">QUERY</a>
		</div>
		<div id=headerAbout>
			<a class="header" href="" target="_top">REFERENCES</a> |
			<a class="header" href="" target="_top">FORUM</a>|
			<a class="header" href="" target="_top">ABOUT</a>|
			<a class="header" href="" target="_top">CONTACT</a>
		</div>
        </div>
	<div id="page">
	<?php
        echo "<div id='main' style={width:998px;height:500px;background-color:#e5eecc;overflow-y:scroll;}>";	
	    echo "<h1>Add New Questions</h1>";
		echo "<form action='add_Question.php' method='post'>";
                echo "<table border='1' width='900' cellspacing='0' cellpadding='20'>";
                echo "<tr>";
                echo "<td>";
                    echo "Qestion<BR>";
                    echo "<textarea name='question' rows='2' cols='80'></textarea><br><br>";
                    echo "Code<BR>";
                    echo "<textarea name='code' rows='10' cols='80'></textarea><br><br>";
                echo "</td>";
                
                echo "<td>";
				    echo "Option 1";
					echo "<input style={width:200px;} type='text' name='option1'><br><br>";
					echo "Option 2";
					echo "<input style={width:200px;} type='text' name='option2'><br><br>";
					echo "Option 3";
					echo "<input style={width:200px;} type='text' name='option3'><br><br>";
					echo "Option 4";
					echo "<input style={width:200px;} type='text' name='option4'><br><br>";
					echo "Answer";
					echo "<input style={width:200px;} type='text' name='answer'><br><br>";
                    echo "<input type='submit' value='submit'>";
				 echo "</td>";
                echo "</tr>";
                echo "</table>";
		echo "</form>";
	?>	
		</div>
		
	</div>
       
        <div id="footer" style={margin-top:500px;}>
		
	    </div>
	<br><br><br><br>
</body>
</html>


