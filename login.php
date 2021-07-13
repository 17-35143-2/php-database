<!DOCTYPE html>
<html>
<head>
</head>

<body>


<?php

include('login_validation.php');

// if(isset($_SESSION['username'])){
// header("location: ../view/login.php");
// }
?>

<h1 id="Title">Log In</h1>

<form action="" method='post' >
  
  <Label>User Name:</label><br>  </h4>
  <input type="text" id="username" name="username" ><?php echo $usernameError;?><br><br>

  <Label>Password:</Label><br> 
  <input type="password" id="password" name="password" ><?php echo $passwordError; ?><br><br>


  
  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  

</form> 
</body>

</html>