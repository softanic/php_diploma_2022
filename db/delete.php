<?php
$link=mysqli_connect("localhost","root","","php_diploma");
$user_id=$_GET['user_id'];
 $q="delete from users where user_id=$user_id";
 $res=mysqli_query($link,$q);
 if(mysqli_affected_rows($link)>0)
 {
	 echo "<script>window.location='select.php';</script>";
	 //echo "record deleted";
 }else{
	 
	 //echo "<script>alert('record not deleted');window.location='delete-form.php';</script>";
 }
 
 ?>