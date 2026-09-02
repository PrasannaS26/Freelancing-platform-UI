<?php
session_start();

$conn = mysqli_connect("localhost","root","","freelancing_platform");

if(!$conn){
    die("DB Connection Failed");
}
?>