<?php
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit;
} include 'header.php';
?>
<!DOCTYPE html>
<title>
	Discover Now!
</title>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/cu.css">
<link rel="shortcut icon" type="image/x-icon" href="css/img/til.png" />
</head>


<body>

<div class="opa"></div>
<div class="grp">
	<a href="index.php"><button class="btn"> Home </button></a>
	<a href="about.php"><button class="btn"> About </button></a>
	<a href="contact.php"><button class="btn"> How? </button></a>
	<a href="browse.php"><button class="abtn"> Browse </button></a>
	
	

	
	<form class="search" action="browse.search.php" method="POST">
			<input type="text" placeholder="Search" name="search">
			<button type="submit" class="but" name="submit-search"> Search </button>
	</form>
	
	
		<div class="acc">
				<button class="qbtn"><?php print $_SESSION['username']; ?></button>
				<a href="logout.php"><button class="qbtn">Logout</button></a>
		</div>
	
	</div>
	
	



<div class="bros">
<div class="rt" id="rt">
<br>
<p style="font-size: 190%;"> All Researches...</p>


<?php	

	$sql = "SELECT * FROM rsrchinfo";
	$result = mysqli_query($conn, $sql);
	$queryResults = mysqli_num_rows($result);
	
	if($queryResults > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "<div><a href='rsrsch.php?title=".$row['title']."&date=".$row['date']."'>
				<p class='head' id='hat'>".$row['title']."</p></a>
				<p class='subtxt'>".$row['text']."</p>
				<p class='subtx'><p class='subtx' style='font-size: 80%; text-transform: capitalize;'>Posted by: ".$row['author']."
				 at ".$row['date']."</p>
				 
			
			</div>";
			
			
		}
	}
?>




</div>
</div>

	<script src="rs.js"></script>
</body>
</html>