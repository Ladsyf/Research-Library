<?php
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit;
} 
?>
<!DOCTYPE html>
<title>
	Research Library - About
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
	<a href="about.php"><button class="abtn"> About </button></a>
	<a href="contact.php"><button class="btn"> How? </button></a>
	<a href="browse.php"><button class="btn"> Browse </button></a>
	
	

	
	<form class="search" action="browse.search.php" method="POST">
			<input type="text" placeholder="Search" name="search">
			<button type="submit" class="but" name="submit-search"> Search </button>
	</form>
	
	
		<div class="acc">
				<button class="qbtn"><?php print $_SESSION['username']; ?></button>
				<a href="logout.php"><button class="qbtn">Logout</button></a>
		</div>
	
	</div>
	
	




<div class="bout">

<div class="text">
<p style="margin:14%;">
This website is for us to help you to gather informations
for your research paper. All of the articles and research 
papers were double checked by our developer.The sources have
also gain through the feasibity studies and research papers
that are published. The links in each informations are under
the title section. Please bear with us in gathering informations
by simply sending the following files in our gmail accounts
(AuthReso@gmail.com) . Our team were looking for research
enthusiasts to keep our website a trusted site that you may have
in terms of looking sources.

<br>
<br>
This site is for you to easily collect the data's that you need.
We will not have any single penny to recieve by making this
website.This is for you to lessen your work.Kindly spread this site,
Dont hesitate to inform anybody that may be needing this site.
</p>

</div>

	</div>
</div></div><br><b>
<a href="contact.php"><div class="nexts" >Continue</div></a>
	<script src="js.js"></script></b>

</body>
</html>