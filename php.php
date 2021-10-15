<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php.php</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "phong";
$password = "ubuntu";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"myDB");
//   echo var_dump($conn);
echo "<br>";

?>
<form action="" method="post">
  username: <input type="text" name="username" > <br>
  password: <input type="password" name="password" >
  <br>
  <input type="submit" name= "login" value="login">
</form>
<?php

if (isset($_POST["login"])) {
  $name = $_POST["username"];
  $passwd = $_POST["password"];
  $dbname = $conn->query('select username from customer');
  $dbpasswd = $conn->query('select passwd from customer');
  if (in_array($name,$dbname->fetch_assoc()) & in_array($passwd,$dbpasswd->fetch_assoc())) {
    echo "<script>window.location.href = 'pentesting.php'</script>";
  }else{
    echo "invalid";
  }
}

?>




</body>
</html>



