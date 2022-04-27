<?php                                                          //accedi.php (C:\xampp\htdocs\best)

// Create connection
session_start();
$servername   = "localhost";
$database = "ecommerce";
$username = $_POST['username'];
$password = $_POST['password'];

/*$conn=mysqli_connect($servername, $username, $password, $database);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

*/
$conn = new mysqli($servername, $username, $password, $database);
// Check connection

if ($conn->connect_error) die("Fatal Error");


  /*sleep(10);*/
  echo "Connesso!!! \n <br>";
  $conn->close();

header("refresh:2; url=insertform.html");
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['ecommerce'] = $database;

?>