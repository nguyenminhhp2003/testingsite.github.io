<?php
session_start();
if ($_SESSION["name"] != "FAVORITE") {
  echo "<script>window.location.href='login.php'</script>";
  exit();

}
$servername = "localhost";
$username = "phong";
$password = "ubuntu";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"favosite");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My favorite site</title>

</head>
<body>
<a href="index.php">HOME</a>
<form  action="login.php" method="post">
  <input type="submit" name= "logout" value="logout" style="margin-bottom: -60px;" >
</form>
    <div>
    -----------------Add to favorite sites ---------------------------
    
    <form action="" method='post'>
        Name of the site: <input type="text" name="name" id=""> <br> <br>
        Url of the site:  <input type="text" name="addsite" id=""><br>
        <input type="submit" name = "subm" value="add">
    </form>
    -----------------My favorite sites ---------------------------
    </div> <br> <br>

<?php

    if (isset($_POST["subm"])) {
        $site = $_POST['addsite'];
        $name = $_POST['name'];
        $sqlin = "insert into site (name,site) values ('$name','$site') ";
        $sqlout = "select name, site from site";
        $conn->query($sqlin);
        $resulout=$conn->query($sqlout);
        $sitearr = $resulout->fetch_assoc();
        
    }
            
  
    
?>
<div> 
    
</div>
</body>
</html>