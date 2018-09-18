<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
   echo 'khong ket noi';
}
echo 'ket noi thanh cong';

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 

    email VARCHAR(50),
    password VARCHAR(50)
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>