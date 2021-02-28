<?php include("config.php"); ?>
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
<?php
   echo $_SERVER['SERVER_NAME'];
   echo $_SERVER['REQUEST_URI'];
   $query = "SELECT * FROM accounts;";
   echo "<b> <center>Database Output</center> </b> <br> <br>";
   $mysqli = $conn;
   if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["password"];

        echo '<b>'.$field1name.' '.$field2name.'</b><br />';
    }
/*freeresultset*/
$result->free();
}
?>

<div class="container">
  </br>
  </br>
  <h2>TP Web Application Firewall (Version Vulnerable)</h2>
  <form action="/action_page.php" class="was-validated" method="post">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="usname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>

