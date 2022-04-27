<?php                           //insert.php (C:\xampp\htdocs\best)
session_start();
/*include_once 'accedi.php';*/
$_SESSION['username'];
$_SESSION['password'];
$_SESSION['ecommerce'];
if(isset($_POST['submit']))
{ 
     $ArtID = $_POST['ArtID'];
     $Descrizione = $_POST['Descrizione'];
     $Quantità = $_POST['Quantità'];
     $PrezzoAc = $_POST['PrezzoAc'];
     $PrezzoVe = $_POST['PrezzoVe'];
     $conn = new mysqli('localhost', $_SESSION['username'], $_SESSION['password'], 'ecommerce');
     $sql = "INSERT INTO magazzino (ArtID,Descrizione,Quantità,PrezzoAc,PrezzoVe)
     VALUES ($ArtID, '$Descrizione', $Quantità, $PrezzoAc, $PrezzoVe)";
     if ($conn->query($sql) === TRUE) {
     echo "Record inserito nel database<br> \n";
  
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

if(isset($_POST['submit2']))
{
     $conn = new mysqli('localhost', $_SESSION['username'], $_SESSION['password'], 'ecommerce');
     $sql = "SHOW FULL TABLES";
     echo "Questo è tutto<br> \n";       
}
     mysqli_close($conn);
     header("refresh:2; url=insertform.html?");
}
?>