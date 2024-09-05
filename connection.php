<?php

session_start();

$servername="localhost:3307";
$username="root";
$password="";
$db_name="ctf";
$conn= new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error)
{
    die("connection failed".$conN->connect_error);
}
echo"";
?>
