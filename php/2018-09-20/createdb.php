<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- CREATE DATABASE ---
 *
 * Using MySQLi
 *
 */
echo "<h1>2. CREATE DATABASE</h1>";
/*
 * EXERCISE 1 : Create database name is yourname_project.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "CREATE DATABASE namnh_news";
if ($conn->query($sql) === true) {
echo "Database created successfully";
} else {
echo "Error creating database : " . $conn->error;
}
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
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