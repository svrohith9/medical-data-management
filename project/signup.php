<?php
	if(isset($_POST['submit']))
	{
		include 'includes/connect_db.php';
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$adhaar=mysqli_real_escape_string($con,$_POST['adhaar']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$phone=mysqli_real_escape_string($con,$_POST['phone']);
		$pin=mysqli_real_escape_string($con,$_POST['pin']);
		$block_id=$name." ".$adhaar." ".$email." ".$phone." ".$pin;
		$encr_block_id=base64_encode($block_id);
		$sql="SELECT * FROM register_db WHERE person_id='$encr_block_id';";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			?>
			<!DOCTYPE html>
<html lang="en" >
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

  <div class="container"> 
  	
  	<form id="contact" action="insert_data.php" method="post">
    <fieldset>
    	<h2> USER ALREADY EXIST</h2>
      <button name="goback" type="submit" >Go Back</button>
    </fieldset>
    </fieldset>
  </div>
</body>
</html>
  	<?php
		}
		else
		{
			$sql="INSERT INTO register_db(person_id) VALUES ('$encr_block_id');";	
			mysqli_query($con,$sql);
			?>
			<!DOCTYPE html>
<html lang="en" >
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

  <div class="container"> 
  	
  	<form id="contact" action="get_data.php" method="post">
    <fieldset>
    	<h2> USER SUCCESSFULLY ADDED</h2>
      <button name="goback" type="submit" >login here</button>
    </fieldset>
    </fieldset>
  </div>
</body>
</html>

			<?php
		}
	}
	else
	{
		header("Location: ../insert_data.php");
		exit();
	}
?>