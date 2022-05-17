<?php
session_start();
print_r($_SESSION);
include 'db.php';
$user_id=$_SESSION['user_id'];
$q="select * from users where user_id=$user_id";
$res=mysqli_query($link,$q);
//var_dump($res);
$user_data=mysqli_fetch_array($res);
echo "<pre>";
print_r($user_data);
?>