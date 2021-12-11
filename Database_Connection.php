<?php
require ('C:\xampp\htdocs\php_files\Amaki\createAccount\db_credentials.php');

// Create connection
$conn = mysqli_connect(servername, username, password, dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
?>