<?php

$conn = new mysqli('localhost', 'root', '', 'swati');
mysqli_query($conn,'SET CHARACTER SET utf8');
mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>