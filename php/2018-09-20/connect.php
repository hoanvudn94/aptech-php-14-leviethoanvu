<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CONNECT DATABASE ---
 *
 * Using MySQLi
 *
 */
echo "<h1>1. CONNECT DATABASE</h1>";
/*
 * EXERCISE 1 : Do the connect to your database. Remember close the connect before quit.
 *
 */
/*
 * SUGGESTION :
$serverName = "localhost";
$userName = "root";
$password = "123456";
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
echo "Connected successfully";
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



?>