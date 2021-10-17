<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="w3images/favicon.ico" type="image/x-icon">  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>


<!-- style------------------------- -->
<style>
 body{
  background: #e6e6ff;
 }
 .logindiv{
   margin:200px;
   width:50%;
   
 }
 
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

a:link, a:visited {
  background-color: black;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active ,input[type=submit]:hover{
  background-color: gray;
  color:black;
}
.link{
  margin:10px;
}
  
 #nouser{
   color:red;
 }
</style>


<!-- style------------------------- -->


<?php

$servername = "sql302.epizy.com";
$username = "epiz_29808693";
$password = "XTJaqs2ZdBFqlh";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"epiz_29808693_myDB");

echo "<br>";

?>

<div class= "logindiv">
  <form class="login" action="" method="post">
  Username: <input type="text" name="username" > <br>
  Password: <input type="password" name="password" >
  <br>
  <input id = "sbm" type="submit" name= "log" value="login">
<br> 
<div id = "nouser" ></div>
<br>
<div class= "link">
  <a href="index.php">Miss your mom? Go HOME!!</a>
</div>
</form>
<br>
</div>


<?php

if (isset($_POST["log"])) {
  
  $name = $_POST["username"];
  $passwd = $_POST["password"];
  

  $sql = "select * from customer where username = '$name' and passwd = '$passwd'";
  $resul = mysqli_query($conn,$sql)or die( mysqli_error($conn));
  
  $dbfetch =  mysqli_fetch_array($resul,MYSQLI_ASSOC);
  $row = mysqli_num_rows($resul);
  $count = 0;
  if ($row == 1) {
    echo "<script>window.location.href='pentesting.php'</script>";
    $_SESSION["name"] = $dbfetch["Name"];
    
  
  }else{
    echo "<script>document.getElementById('nouser').innerHTML='No valid user found, SUCKER. GO try again LOSERRRRR!!';</script>";
  }
  
}

?>
<?php
if (isset($_POST["logout"])) {
  if (session_destroy()) {
    echo "<script>window.location.href='login.php'</script>";
    exit();
  }
}
?>

</body>
</html>



