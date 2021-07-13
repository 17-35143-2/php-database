<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "wtk";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}


function insertUser($conn,$fname,$lname,$gender,$DOB,$religion, $email, $username, $password ){
$result=$conn->query("insert into users(fname,lname, gender, DOB, religion, email, username, password ) values('$fname','$lname','$gender','$DOB','$religion','$email','$username','$password')") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Registration Successful!</h3>";
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>