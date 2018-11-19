<!DOCTYPE html>
<html lang="en" >
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

  <div class="container">  
  <form id="contact" action="signup.php" method="post">
    <fieldset>
      <input placeholder="Your name" name="name" type="text"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Adhaar Number" name="adhaar" type="tel"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" name="phone" type="tel"  required>
    </fieldset>
    <fieldset>
      <input placeholder="create PIN" type="text" name="pin"  required autofocus>
    </fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>   

</body>

</html>
