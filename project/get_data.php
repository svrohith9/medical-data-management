
<html lang="en" >
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
  <div class="container">  
  <form id="contact" action="verify_data.php" method="post">
    <fieldset>
      <input placeholder="Enter name" name="name" type="text" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Adhaar Number" name="adhaar" type="tel" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Email Address" name="email" type="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Phone Number" name="phone" type="tel" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter PIN" type="text" name="pin" required autofocus>
    </fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>   

</body>

</html>