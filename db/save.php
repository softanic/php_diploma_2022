<?php
//print_r($_POST);
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=md5($_POST['password']);

$link=mysqli_connect("localhost","root","","php_diploma");
$q="insert into users (name,mobile_no,email,gender,password) values('$name','$mobile_no','$email','$gender','$password')";
$result=mysqli_query($link,$q);
//echo var_dump($result);
if($result)
{
	$user_id=mysqli_insert_id($link);
	echo "<script>alert('Data inserted @ id no: ". $user_id ."');window.location='select.php';</script>";
	//header("location:file.php?msg=data inserted");
}else
{
	echo mysqli_error($link);
	echo "Fail to insert data";
}


?>
