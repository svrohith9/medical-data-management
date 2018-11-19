<?php
session_start();
?> 
<html>
<head>
     <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

  <div class="container">  
  <form id="contact" action="action_in.php" method="post">
    <fieldset>
      <h2>Enter data</h2>
      <input placeholder="Enter data" name="entry" type="text" tabindex="1" required autofocus>
      <br>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>   

</body>

</html>
