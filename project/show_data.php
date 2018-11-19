<html >

<head>
  <meta charset="UTF-8">
  <title>Data Table</title>   
      <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="css/style.css">  
</head>

<body>

  <html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Table Style</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
<div class="table-title">
<h3 align="center">Data Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">Health Data</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<?php
  session_start();
  $var=$_SESSION['id'];
  //echo $var;
  include 'includes/connect_db.php';
    //echo $data;
    $i=0;
    $ans=1;
    //echo $ans;
    while($ans==1)
    {
      $encr=hash('sha256',$i.$var);
      $sql="SELECT * FROM health_data where trans_id='$encr';";
      $res=mysqli_query($con,$sql);
      if(mysqli_num_rows($res)>0)
      {
        while($row =mysqli_fetch_assoc($res))
        {?>

  <td class="text-left"><?php echo $row['time'];?></td>
  <td class="text-left"><?php echo $row['data'];?></td>
</tr>
<?php
        }
        $i=$i+1;
      }
      else
        $ans=0;
    }
?>
  </tbody>
</table>
  <div class="container">  
  <form id="contact" action="index.php" method="post">
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Log out</button>
    </fieldset>
  </form>
</div>
 </body>
</body>
</html>