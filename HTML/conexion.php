<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "deporte";

//crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//chekar la conexion
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>