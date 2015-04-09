<html>
<head>
<title>C Programming Tutorial</title>
<script>
function autoClick()
{
	document.getElementById('clickButton').click();
	alert("Time Out!");
}
</script>
<script src="valid.js"> </script>
<link rel="stylesheet" type="text/css" href="design.css" />
<link rel="stylesheet" type="text/css" href="design2.css" />
</head>
<body onload="setTimeout('autoClick();',20000); currentTime();">
<div id="top">
	<div style="height:100px;">
	       <div id="logo">
	       <a id="top"></a>	
               <a href="login.php"><img width="100" height="90" src="c.gif" alt="index" style="border:0;margin-top:5px;" /></a>
	       </div>
		<div class="login">
			<b style={}>Starting Time: <b id="time1"></b> </b>
			<b style={}>Closinging Time: <b id="time2"></b> </b>
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
			<a class="header" href="" target="_top">FORUM</a> |
			<a class="header" href="" target="_top">ABOUT</a> |
			<a class="header" href="" target="_top">CONTACT</a>
		</div>
        </div>
	<div id="page">
		
	<div id="leftcolumn" style={width:300px;height:1000px;overflow-y:scroll;}>
          <h2 class="left"><span class="left_h2">C</span> Online Test</h2>
          <a target="_blank" href="test1.php">C Programming Test 1</a>
          <a target="_blank" href="test1.php" >C Programming Test 2</a>
          <a target="_blank" href="test1.php" >C Programming Test 3</a>
          <a target="_blank" href="test1.php" >C Programming Test 4</a>
          <a target="_blank" href="test1.php" >C Programming Test 5</a>
          <a target="_blank" href="test1.php" >C Programming Test 6</a>
          <a target="_blank" href="test1.php" >C Programming Test 7</a>
          <a target="_blank" href="test1.php" >C Programming Test 8</a>
          <a target="_blank" href="test1.php" >C Programming Test 9</a>
          <a target="_blank" href="test1.php" >C Programming Test 10</a>
          <a target="_blank" href="test1.php" >C Programming Test 11</a>
          <a target="_blank" href="test1.php" >C Programming Test 12</a>
          <a target="_blank" href="test1.php" >C Programming Test 13</a>
          <a target="_blank" href="test1.php" >C Programming Test 14</a>
          <a target="_blank" href="test1.php" >C Programming Test 15</a><br>
	</div>
        </div>
        <div id="main" style={width:697px;height:1000px;background-color:#e5eecc;overflow-y:scroll;}>
                  
         <?php             
                  //      $con1=mysqli_connect("localhost","root","","c_tutor");
                 //       $result = mysqli_query($con1,"SELECT * FROM tests");
                  //      $i=1;
                  //      while($row = mysqli_fetch_array($result))
                   //     {
                     //       echo "<a href='#Q".$i."' target='_top'>". $row['question_id']."</a><BR>";
                   //         $i++;
                       // }
         
         
        //require 'connect_me.php';
        $con1=mysqli_connect("localhost","root","","c_tutor");
        $result = mysqli_query($con1,"SELECT * FROM tests");
        echo "<form action='test1.php' name='form2' method='post' formtarget='_self'>";
        $j=1;
    
        $score = 0;
	$count=0;
        while($row = mysqli_fetch_array($result))
	{
	if($j<=20)
	{
            echo "<h4><a id='Q".$j."'>Question ".$j."</a></h4>";
	    echo "<table style={background-color:#F0F0F0;} border='1' width='650' cellspacing='0' cellpadding='20'>";
           
            echo "<tr>";
            echo "<td>";
            echo "<br>".nl2br($row['question']);
            echo "<pre  class='borderline'><code>";
            echo nl2br($row['code']);
            echo "</code></pre>";
	    
            echo "<input style={margin-left:50px;} type='radio' name='q" .$j. "' value='A' />&nbsp&nbsp&nbsp&nbspA.". nl2br($row['option1'])."<br><br>";
	    echo "<input style={margin-left:50px;} type='radio' name='q" .$j. "' value='B' />&nbsp&nbsp&nbsp&nbspB.". nl2br($row['option2'])."<br><br>";
	    echo "<input style={margin-left:50px;} type='radio' name='q" .$j. "' value='C' />&nbsp&nbsp&nbsp&nbspC.". nl2br($row['option3'])."<br><br>";
            echo "<input style={margin-left:50px;} type='radio' name='q" .$j. "' value='D' />&nbsp&nbsp&nbsp&nbspD.". nl2br($row['option4'])."<br><br>";
            
	    echo "</td>";
    	    echo "</tr>";
	     if(isset($_POST['submit']))
	    {
		$_SESSION["q{$j}_answer"] = $row["answer"];
		
		echo "<tr style={background-color:#D4D4D4;}>";
                echo "<td>";
		if($_SESSION["q" . $j . "_answer"]==1)
		{
			$ans='A';
		}
		else if($_SESSION["q" . $j . "_answer"]==2)
		{
			$ans='B';
		}
		else if($_SESSION["q" . $j . "_answer"]==3)
		{
			$ans='C';
		}
		else if($_SESSION["q" . $j . "_answer"]==4)
		{
			$ans='D';
		}
		echo "Answer is: ".$ans."<br>";
		if(isset($_POST["q" . $j]))
		{
			echo "You Choose: ".$_POST["q" . $j]."<br>";
			$count++;;
		}
		else
		{
			echo "You have not choose any option!<br>";
		}
		if ((isset($_POST["q" . $j])) && ($_POST["q" . $j ] == $ans))
		{
			$score++;
		}
		echo "</td>";
    	        echo "</tr>";
	    } 
            
            echo "</table><BR>";
	    
	}    
        $j++;
        }
	
	if(isset($_POST['submit']))
	    {
		echo "<table style={background-color:#F0F0F0;} border='1' width='650' cellspacing='0' cellpadding='20'>";
		echo "<tr>";
		echo "<td>";
		echo "Attempted: $count <br> "; 
	        echo "Scored: $score ";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	    }
	
	?>
        
        </div>    
        
        <div id="footer" style={margin-top:1000px;height:60px;}>
		
		<input style={margin-top:10px;margin-left:500px;width:100px;height:40px;} type='submit' id='clickButton' name='submit' value='submit'>
		
		</form>
	</div>
	
    </div>
	<br>
	<br>
	<br>
        <br>

</body>
</html>