<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="css/sign.css"> 
&nbsp;
<form action="signup.php" method="post">
      <div class="sign">
      <table width="383" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><h1>Create Account</h1>&nbsp;</td>
        
        </tr>
        
      <tr>
        <td width="146">Full Name</td>
        <td width="227"><input type="text" name="txtFullName" id="txtFullName" /></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><input type="text" name="txtEmail" id="txtEmail" /></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="text" name="txtContact" id="txtContact" /></td>
      </tr>
		  <tr>
        <td>NIC Number</td>
        <td><input type="text" name="txtNic" id="txtNic" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="datalist" /></td>
      </tr>
     
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Join Now"   />
             
             <?php
				if(isset($_POST["btnSubmit"]))
				{
					$email = $_POST["txtEmail"];
					$name = $_POST["txtFullName"];
					$contact = $_POST["txtContact"];
					$nic = $_POST["txtNic"];
					$pwd = $_POST["txtPassword"];
					
					
					
					$valid = false;
					$con= mysqli_connect("localhost","root","","planit4u");
					if(!$con)
					{
						die("cannot contact the db server");
					}
					
					$sql= "INSERT INTO `sign` (`email`, `fullname`, `contactnum`, `nicnum`, `password`) VALUES ('".$email."', '".$name."', '".$contact."', '".$nic."', '".$pwd."')";
					$result= mysqli_query($con,$sql);
					if($result)
					{
						header ('Location:login_new.php');
						
					}
					else
						{
						echo ("Something wrong");
						}
				
						
					
				}
			
				
				
		                             
            ?>
             
            <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
         
        </blockquote></td>
        </tr>
    </table>
		  </div>
    </form>
    &nbsp;
	

<?php include("includes/footer.php"); ?>
