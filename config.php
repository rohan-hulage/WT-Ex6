<?php
$servername="127.0.0.1";
$username="omkar";
$password="1234";
$dbname="bookshop";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("DB not connected");
}

//echo "Connected";

?>