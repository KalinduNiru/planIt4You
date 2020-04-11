<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Plan It 4U</title>
<link href="style.css" rel="stylesheet">
<link href="log.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/scrollreveal.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<?php include('php/header.php');?> 
<body>


<!-- Navigation -->

       
<br>
<form name="login" method="post" action="login.php">
<table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer">&nbsp;</p>
          <p class="imgcontainer"><img src="img/logo001.png" alt="Avatar" width="63%" height="195" class="avatar" />
            
          </p>
          <div class="container">
            <p>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" required>
            </p>
            <p>
            
             </p>
    
      <button type="submit" name="btnsubmit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="cnkremember"> Remember me
      </label>
</div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>&nbsp;</td>
      </tr>
    </table>
  

<!--Footer-->
    <footer>
  <div class="footer-wrapper">
    <table class="one" align="center" width="1360" border="0">
      <tbody>
        <tr>
          <td width="455">Privacy Policy</td>
          <td>&nbsp;</td>
          <td class="add">Address : No 145,Gampaha &nbsp;</td>
        </tr>
        <tr>
          <td>Terms of Services</td>
          <td width="450"><h3 align="center">Connect Us</h3></td>
          <td width="450"></td>
        </tr>
        <tr>
          <td>Payment Terms</td>
          <td>&nbsp;</td>
          <td class="add">Telephone No: 071965321 &nbsp;</td>
        </tr>
        <tr>
          <td>Help</td>
          <td align="center"><a href="https://www.facebook.com/PlanIt4U.lk" class="fa fa-facebook"></a>&nbsp;<a href="#" class="fa fa-instagram"></a>&nbsp;<a href="#" class="fa fa-youtube"></a></td>
          <td class="add">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 077568932  &nbsp;</td>
        </tr>
        <tr>
          <td>Report a Bug</td>
          <td>&nbsp;</td>
          <td class="add">Email : planit4u@gmail.com &nbsp;</td>
        </tr>
      </tbody>
    </table>
    <br>
    <hr>
    <br>
    <p>
    <h4 align="center">&copy;Team Undefined - 2019</h4>
    </p>
    <p>&nbsp;</p>
  </div>
</footer>

       
</body>
</html>
