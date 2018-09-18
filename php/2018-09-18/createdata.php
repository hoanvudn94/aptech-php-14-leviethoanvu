<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
   echo 'khong ket noi';
}
echo 'ket noi thanh cong';

$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>