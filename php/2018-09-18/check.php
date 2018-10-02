<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $email, $password);


if (!$conn) {
   echo 'khong ket noi';
}
echo 'ket noi thanh cong';

echo $_POST['email'];
echo br;
echo $_POST['password'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM myguests WHERE email = '". $email ."' AND password = '". $password ."'"
$result = mysqli_query($connect, $sql);
if (mysqli_num_row($result)>0){
    echo "login thanh cong";
}
else{
    echo "login that bai";
}


 

