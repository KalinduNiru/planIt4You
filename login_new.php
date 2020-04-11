<?php session_start(); ?>
	<?php include('includes/header.php'); 
		
?>

<link rel="stylesheet" href="css/log.css">
<form name="login" method="post" action="login_new.php">
	<div class="log">
		<table width="330" height="268" border="0" align="center">
			<tr>
				<td width="294">
					<p class="imgcontainer">&nbsp;</p>
					<p class="imgcontainer"><img src="img/43518840_2069786066575450_946411681649524736_n.jpg" alt="Avatar" width="63%" height="195" class="avatar"/>

					</p>
					<div class="container">
						<p>
							<label for="uname"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="txtuname" required>

							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="txtpassword" required>
						</p>

					<?php
				if(isset($_POST["btnsubmit"]))
				{
					$uName = $_POST["txtuname"];
					$pwd = $_POST["txtpassword"];
					$valid = false;
					$con= mysqli_connect("localhost","root","","planit4u");
					if(!$con)
					{
						die("cannot contact the db server");
					}
					
					$sql= "SELECT 'email','password' 
							FROM  `sign` 
							WHERE  `email` =  '".$uName."'
							AND  `password` =  '".$pwd."'";
					$result= mysqli_query($con,$sql);
					if((mysqli_num_rows($result)>0))
					{
						$valid = true;
					}
					else
						{
						$valid = false;
						}
				
						if ($valid)
						{
							header ('Location:index.html');
							$_SESSION["userName"]=$uName;
						}
						else
						{
							echo ("please enter the correct username and the password");
						}
					
				}
			
				
				
		                             
            ?>
					
						<button class="lognbt" type="submit" name="btnsubmit">Login</button>

					</div>

					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="psw">Forgot <a href="#">password?</a></span>
					</div>&nbsp;</td>
			</tr>
		</table>
	</div>
	

	<?php include('includes/footer.php'); ?>