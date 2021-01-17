<?php 


$serverName =   "localhost";
$dbName     =   "tevas";
$username   =   "root";
$pass       =   "";


$conn = mysqli_connect($serverName,$username,$pass,$dbName);

if(!$conn){

    die("Connection Failed : ".mysqli_connect_error());
}
echo "Connection Successfull <br>";




/*$serverName =   "localhost";
$dbName     =   "inegi";
$username   =   "root";
$pass       =   "";


$conn = mysqli_connect($serverName,$username,$pass,$dbName);

if(!$conn){

    die("Connection Failed : ".mysqli_connect_error());
}
echo "Connection Successfull <br>";*/


?>