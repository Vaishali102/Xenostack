<?php
session_start();
$dbHost= 'localhost';
$dbName= 'mydb';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
?>