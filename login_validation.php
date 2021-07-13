<?php
include('dblogin.php');

session_start(); 
 $username =  $password=  "";

 $usernameError=  $passwordError =    " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){


$username = test_input($_POST["username"]);

$password = test_input($_POST["password"]);

if ( (empty($_POST['username'])) || (empty($_POST['password']))  )
 {
    
    $usernameError =  " UserName is required";
    $passwordError = " Password is required";
    
   
    
} else{

$username = $_POST['username'];
$password = $_POST['password'];





$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn, $username,  $password);


$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

}
}

?>