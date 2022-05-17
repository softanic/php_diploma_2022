<?php
$mobile_no=$_POST['mobile_no'];
$password=md5($_POST['password']);

$link=mysqli_connect("localhost","root","","php_diploma");
$q="select * from users where mobile_no='$mobile_no' and password='$password'";
$res=mysqli_query($link,$q);
$user_data=mysqli_fetch_array($res);

if(mysqli_num_rows($res)>0)
{
	session_start();
	$_SESSION['user_id']=$user_data['user_id'];
	header("location:home.php");
}else{
	
	echo "<script>alert('username/password is inccorect, please try again.');window.history.back();</script>";
}

?>