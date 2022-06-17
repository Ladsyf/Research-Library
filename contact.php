<?php
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit;
} 
?>
<!DOCTYPE html>
<title>
	How?
</title>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/cu.css">
<link rel="shortcut icon" type="image/x-icon" href="css/img/til.png" />
</head>


<body>

<div class="opa"></div>

<div class="grp">
	<a href="index.php"><button class="btn"> Home</button></a>
	<a href="about.php"><button class="btn"> About </button></a>
	<a href="contact.php"><button class="abtn"> How? </button></a>
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
<div class="cu">
	<div id="cont" class="cont">
	<p style="font-size:120%;">
		How to utilize this website?
	</p>
		<p class="please">This Research Library website gives information we may need in our papers, That we have to work as a team. The guidelines for using this website are the following:
<br>
<br>
		<img src="css/img/sp.png">RESPONSIBLE
<br>
		be responsible at the datas that you will give us. Any research papers that has sent in our system will be verified by the admin. Any papers that will be given are very much 		appreciated.
<br>
<br>
		<img src="css/img/sp.png">LOG IN
<br>
		For us to know who will be our bookworms in this website, Log in is the easiest way to reach you. Information's according to your private accounts will be protect and wont be leaked in any other sites. We assure you a secured website that you can trust.
<br>
<br>
	<img src="css/img/sp.png">DOWNLOADS
<br>
be responsible at the datas that you will give us. Any research papers that has sent in our system will be verified by the admin. Any papers that will be given are very much appreciated.

<center>
Got questions?
<br>
<u>
		<a style="cursor:pointer" onclick="cont()"> Contact Us </a>
</u>

</p>	
	</div>
<div id="con" class="con">
<p style="font-size:120%;text-align: center">
<br>
		How can you reach Us?
	</p>
	
	<p style=" text-align: center; font-size: 80%;">
<br>
		Telephone Number: 09238471849
<br><br>
		Email: RLibrary2019@gmail.com
<br><br>
		Facebook Page: Coming soon
<br>
</p>
<br>
	<p class="please" style=" text-align: center;text-indent: 0%;">
		The given informations above is for you to contact us for your questions, sugguestions and requests.
		the automatic replied messages were sent but we will reply for you as soon as possible. But please do
		follow us for you to be notified in any updates that will be changing in our site. Any prank calls
		and message will be not entertained and will be block.
<br>
<br>
	<u><a onclick="back()" style="cursor:pointer"><< back </a></u>
</div>

</div>



	<script src="javascript/js.js"></script></b>

</body>
</html>