<?php
$servername = "10.88.0.35";
$username = "root";
$password = "adamadam";
$db = "utilisateur";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
return $conn;
?>
