<?php
 
 
 $name = $email = $cmt = '';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST["name"];
     $email = $_POST["email"];
     $cmt = $_POST["comment"];
 
 }
 echo "<h2>output here</h2><br>";
 echo $name . "<br>";
 echo $cmt . "<br>";

 
?>