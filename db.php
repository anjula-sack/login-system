<?php
$host = "localhost";
$username = "root";
$password = "root123";
$dbname = "face";
$un = $_POST['username'];
$pw = $_POST['password'];



$con = new mysqli($host, $username, $password, $dbname);

if($con->connect_error){
    echo $con->connect_error;
    die("connection failed:");
}

$con->query("INSERT INTO user(username,password) VALUES('$un', '$pw')");
