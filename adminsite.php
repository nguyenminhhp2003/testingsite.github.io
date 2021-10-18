<?php
session_start();
if ($_SESSION["name"] != "ADMIN") {
  echo "<script>window.location.href='login.php'</script>";
  exit();

}
$servername = "localhost";
$username = "phong";
$password = "ubuntu";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"myDB");
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="shortcut icon" href="w3images/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify user and pages</title>
</head>
<body>
    
<a href="index.php">HOME</a>
<form  action="login.php" method="post">
  <input type="submit" name= "logout" value="logout" style="margin-bottom: -60px;" >
</form>


<div style = "margin-top : 30px;">--------------Add users------------
        <form action="" method="post">
            Name: <input type="text" name="name" id=""> <br> <br>
            Username: <input type="text" name="username" id=""> <br> <br>
            Password: <input type="password" name="password" id=""> <br> <br>
            <input type="submit" value="add" >
        </form>
<br>--------------**********************------------
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strtoupper(htmlspecialchars($_POST["name"])) ;
    $usern = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["password"]);
    $sql = "insert into customer (Name, username,passwd) values ('$name','$usern','$pass')";
if ($conn->query($sql)) {
    echo "Update successfully";

}else{
  echo "Error! Maybe the username already existed. ";
}
}

?>

</body>
</html>