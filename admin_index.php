
<html>
<head>
<title>C Programming Tutorial</title>
<script src="valid.js"> </script>
<link rel="stylesheet" type="text/css" href="design.css" />

</head>
<body>
<div class="headline">
      <b><span style={margin-left:250px;}>Administrator</span></b>
</div> 
<div id="top">
	<div style="height:100px;">
	       <div id="logo">
	       <a id="top"></a>	
               <a href="index.php"><img width="100" height="90" src="c.gif" alt="index" style="border:0;margin-top:5px;" /></a>
	       
	       </div>
	  
		<br><br>
			<div class="login">
				  
                         <form name="frmlogin" action="adm_login.php" method="post" onsubmit="return validateLogin();">   
                            E-mails: <input class="bckground" type="email" name="adm_email">
                            &nbspPassword: <input class="bckground" type="password" name="adm_password">
                            <input type="submit" value="Login">
                        </form> 
		        </div>
	</div>
	
        <div id="header">
              
        </div>

	<div id="content">
		      
	
	</div>
    
	<div id="signup">
                    
                    <form style={margin-left:30px;} name="frmsign" action="add_admin.php" method="post">
					<br><br><br>
                    First Name:&nbsp&nbsp&nbsp&nbsp&nbsp<input class="position" type="text" name="adm_fname"><BR><br>
                    Last Name:&nbsp&nbsp&nbsp&nbsp&nbsp<input class="position" type="text" name="adm_lname"><BR><br>
		            Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="position" type="email" name="adm_email"><BR><br>
		            Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="position" type="password" name="adm_password"><BR><br>
		                   <input style={margin-left:50px;width:80px;} type="submit" value="submit">
		                   <input style={margin-left:30px;width:80px;} type="reset">
                    </form><br>
        </div>
	<div id="footer">
		
	</div>
	<br>
	<br>
	<br>
        <br>
        <br>
</div>
</body>
</html>