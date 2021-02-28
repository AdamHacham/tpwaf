<?php include("config.php"); ?>

<?php 
     $mysqli = $conn;
   if (isset($_POST['usname']) && isset($_POST['pswd'])){
  	$user = $_POST['usname'];
  	$pass = $_POST['pswd'];
     	$query = "SELECT * FROM accounts WHERE username= '".$user."' AND password = '".$pass."';";
  	$result = $mysqli->query($query);
        if ($result -> num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
        	$field1name = $row["username"];
        	$field2name = $row["email"];
 		echo '<b> Bienvenue '.$field1name.' email = '.$field2name.'</b><br />';
    	    }
?>
<html lang="fr">
<head>
  <title>Projet WAF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


</body>
</html>



<?php
        $result->free();
  	} else {
          
          echo "<h6>identifiants incorrect</h6> ";
        }
  }
else 
{
  $user = null;
  echo "no username supplied";
}
?>
