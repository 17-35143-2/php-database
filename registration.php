<!DOCTYPE html>
<html>
<head>
</head>

<body>


<?php

include('validation.php');


?>

<h1 id="Title">Registration</h1>

<form action="" method='post' >
  
  <fieldset>
    <legend>Baic Information</legend>
  <Label>First Name:</label><br>  
  <input type="text" id="fname" name="fname" ><?php echo $fnameError;?><br><br>


  <Label>Last Name:</Label><br>  
  <input type="text" id="lname" name="lname" ><?php echo $lnameError;?><br><br>

  <label>Gender:</label><?php echo $genderError; ?> 
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
<br><br>
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php echo $DOBError; ?> <br>  

<label for="religion">Religion</label><?php echo $religionError; ?>
<input type="checkbox" name="religion" id="religion">Islam
<input type="checkbox" name="religion" id="religion">Christianity
<input type="checkbox" name="religion" id="religion">Buddhism
<input type="checkbox" name="religion" id="religion">Hinduism

</fieldset><br>
<br>
<fieldset>
<legend>Contact Information</legend>

<Label>Present Address:</Label><br>
<textarea rows="3" cols="20"></textarea>  <br> <br><br>

<Label>Permannent Address:</Label><br>
<textarea rows="3" cols="20"></textarea>  <br> <br><br>

<Label>Phone Number:</Label><br>
<input type="tel" id="phone" name="phone" ><br> <br>

  <Label>Email:</Label><br> 
  <input type="text" id="email" name="email" ><?php echo $emailError;?><br><br>

  <a href="http://www.w3schools.com/" target="_blank">Personal Website Link</a>

</fieldset>
<br><br>
<fieldset>
<legend>Academic Information</legend>

  <Label>User Name:</label><br>  </h4>
  <input type="text" id="username" name="username" ><?php echo $usernameError;?><br><br>

  <Label>Password:</Label><br> 
  <input type="password" id="password" name="password" ><?php echo $passwordError; ?><br><br>

</fieldset>  
  
  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  

</form> 
</body>

</html>