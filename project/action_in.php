<?php
  session_start();
  $var=$_SESSION['id'];
  include 'includes/connect_db.php';
  if(isset($_POST['submit']))
  {
    $data=mysqli_real_escape_string($con,$_POST['entry']);
    //echo $data;
    $i=0;
    $ans=1;
    while($ans==1)
    {
      $encr=hash('sha256',$i.$var);
      $sql="SELECT * FROM health_data where trans_id='$encr';";
      $res=mysqli_query($con,$sql);
      if(mysqli_num_rows($res)>0)
        $i=$i+1;
      else
        $ans=0;
    }
      $sql="INSERT INTO health_data(trans_id, data) VALUES ('$encr','$data');";
      mysqli_query($con,$sql);
  }
?>
<html lang="en" >
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

  <div class="container">  
  <form id="contact" action="index.php" method="post">
    <fieldset>
      <h2>Data input Successfull</h2>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">log-out</button>
    </fieldset>
  </form>
</div>   

</body>

</html>