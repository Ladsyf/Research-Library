<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<title>
	Research Library - Login
</title>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="shortcut icon" type="image/x-icon" href="css/img/til.png" />



</head>

<body>


<div class="head1">
	<p class="h">
	Read research papers<br> you're looking for...
	</p>
</div>
<div class="p">
	<p class="i">
	Hear what other people think, Login Now!
	</p>
</div><div>
<button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin:auto;position:absolute;top: 57%;border-radius: 3px;padding-top: .6%;height: 6.5%;left: 25%;transform: translate(-50%, -50%);">Login</button>
<div style="position:absolute;top: 66%;left: 25%;text-align:center;color: #727273;transform: translate(-50%, -50%);z-index: 100;">Don't have an account?<a onclick="document.getElementById('id02').style.display='block'" style="cursor:pointer;"> <u><br>Sign Up</u></a></div>

<div style="position:absolute;top: 74%;color: #ff6961;left: 25%;font-size:120%;text-align:center;transform: translate(-50%, -50%);"><?php include('errors.php') ?></div></div>
	<div class="intr">
		<p class="asd"><img src="css/img/srch.png"> Search </p>
		<p class="asd"><img src="css/img/brwse.png"> Browse </p>
		<p class="asd"><img src="css/img/dscvr.png"> Discover something new!</p>
	</div>
<div class="halfbg"></div>
<div class="bgleft"></div>

<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="passsword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_1" required>
        
      <button class="bt" type="login" name="login_user">Login</button>
	  
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button class="bt" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <form class="modal-content animate" method= "post" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
    </div>

    <div class="container">
	        <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_1" required>
	  
	       <label for="password"><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_2" required>
	  
		<label for="track"><b>Track</b></label>
        <select name="track">
		<option value="tvl">Technical-Vocational-Livelihood (TVL)</option>
		<option value="acad">Academic Track</option>
		</select>

	  <label for="email"><b>E-mail Address</b></label>
      <input type="email" placeholder="Enter your E-mail" name="email" required>
	  
	  

        
      <button class="bt"type="submit" name="reg_user">Sign Up</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button class="bt" type="button" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
    </div>
  </form>
</div>

<script src="rs.js"></script>

</body>
</html>