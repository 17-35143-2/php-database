<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "wtk";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}


function insertUser($conn, $username, $password ){
$result=$conn->query("insert into users( username, password ) values('$username','$password')") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Login Successful!</h3>";
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>