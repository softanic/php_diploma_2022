<?php
session_start();
//print_r($_SESSION);

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
$user_id=$_SESSION['user_id'];
echo $user_id;
include 'db.php';
$q="select * from users where user_id=$user_id";
$res=mysqli_query($link,$q);
//var_dump($res);
$user_data=mysqli_fetch_array($res);
echo "<pre>";
//print_r($user_data);
?>
<h1>welcome <u><?php echo $user_data['name']; ?></u> to home page</h1>
<a href="profile.php">My Profile</a>
<a href="logout.php">Logout</a>

<?php

?>