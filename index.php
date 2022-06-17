<?php
session_start();
if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login.php");// send to login page
   exit;
} 
?>
<!DOCTYPE html>
<title>
	Research Library - Home
</title>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/cu.css">
<link rel="shortcut icon" type="image/x-icon" href="css/img/til.png" />
</head>


<body>
		<div id="id01" class="modal">
		<div class="content animate">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
			<div class="prof">
				Profile:
					<p>Username : <?php 
				print $_SESSION['username']; ?></p>
				</div>
		</div>
		</div>
<div class="opa"></div>
<div class="grp">
	<a href="index.php"><button class="abtn"> Home </button></a>
	<a href="about.php"><button class="btn"> About </button></a>
	<a href="contact.php"><button class="btn"> How? </button></a>
	<a href="browse.php"><button class="btn"> Browse </button></a>
	
	

	
	<form class="search" action="browse.search.php" method="POST">
			<input type="text" placeholder="Search" name="search" required>
			<button type="submit" class="but" name="submit-search"> Search </button>
	</form>
	
	
		<div class="acc">
				<button class="qbtn" onclick="document.getElementById('id01').style.display='block'"><?php 
				print $_SESSION['username']; ?></button>
				<a href="logout.php"><button class="qbtn">Logout</button></a>
		</div>
	
	</div>
	<?php
	if($_SESSION['username'] == 'admin'){
		echo " hi bro ";
	}
	else {
		
	}
	?>
	




	<script src="js.js"></script></b>

</body>
</html>