<?php
session_unset();
?>
<html lang="en" >
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style >
     	hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
     </style>
</head>
<body>
	<center>
	<br>
	<br>
	<br>
	<h2 align="center">WELCOME TO HEALTH CHAIN</h2>
	<hr>
	<img src="images/health1.gif">
	<br>
	<p>
		<form method="post" action="get_data.php">
    <button class="w3-button w3-ripple w3-blue">Sign-In</button>
		</form>
		<form method="post" action="insert_data.php">
    <button class="w3-button w3-ripple w3-blue">Sign-Up</button>
		</form>
	</p>

</center>
</form>
</div>   

</body>

</html>