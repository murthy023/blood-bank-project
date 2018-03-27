<?php

$nam=$_POST["name"];
$nu=$_POST["num"];
$add=$_POST["address"];
$gen=$_POST["gender"];
$yr=$_POST["year"];
$sec=$_POST["section"];
$eml=$_POST["email"];
$date=$_POST["dob"];
$mob=$_POST["mobile"];
$bgrp=$_POST["bgroup"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT into registeration values ('$nam','$nu','$add','$gen','$yr','$sec','$eml','$date','$mob','$bgrp')";
//$mysqlresult=mysqli_query($conn, $sql);
$mysqlresult=$conn->query($sql);
echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="register.php"';
    echo '</script>';
?>
