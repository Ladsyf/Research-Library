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
	<script src="js.js"></script>
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
<br>
<?php	
	$title =  mysqli_real_escape_string($conn, $_GET['title']);
	$date =  mysqli_real_escape_string($conn, $_GET['date']);	
	$sql = "SELECT * FROM rsrchinfo WHERE title='$title' AND date='$date'";
	$result = mysqli_query($conn, $sql);
	$queryResults = mysqli_num_rows($result);
	
	if($queryResults > 0){
		while($row = mysqli_fetch_assoc($result)) {
			echo "<div style='color: #6b5f55;'>
				<h3 style='text-align: center;'>".$row['title']."</h3>
				<p> Introduction: </p>
				<p style='text-indent: 5%;'>".$row['text']."</p>
				<a href='files/".$row['title'].".pdf' download> Download </a>
				<p style='text-transform: capitalize;'> Posted by ".$row['author']."</p>
				<p>".$row['date']."</p>
				
			</div>";
			
		}
		}
	if($_SESSION['username'] == 'admin'){
		echo " <a href=del.php'> Remove this paper </a> ";
	}
?>


<center><a href='browse.php'><p style=" color: #6b5f55;text-decoration: underline;"> << Go back </p></a></center>

</div>
</div>

	<script src="rs.js"></script>
</body>
</html>