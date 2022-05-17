<?php
//print_r($_POST);
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$link=mysqli_connect("localhost","root","","php_diploma");
$q="update users set name='$name',mobile_no='$mobile_no',email='$email',gender='$gender' where user_id=$user_id";

$result=mysqli_query($link,$q);
//echo var_dump($result);
if(mysqli_affected_rows($link)>0)
{
	echo "<script>alert('Data updated ');window.location='select.php';</script>";
	//header("location:file.php?msg=data inserted");
}else
{
	echo mysqli_error($link);
	//echo "<script>alert('Data not updated ');window.history.back();</script>";
	
}


?>
