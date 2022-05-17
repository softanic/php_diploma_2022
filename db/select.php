 <?php
 $link=mysqli_connect("localhost","root","","php_diploma");
 $q="select * from users";
 $res=mysqli_query($link,$q);
 //echo mysqli_num_rows($res);
 
 //$row=mysqli_fetch_array($res)
 
 //echo var_dump($res);
echo "<a href='user-signup.php'>Click here to add new record</a>"; 
echo "<table border=1>";
echo "<tr><th>Photo</th><th>User Id</th><th>Name</th><th>Mobile No</th><th>Email Id</th><th>Gender</th><th>Update</th><th>Delete</th></tr>";
 while($row=mysqli_fetch_array($res))
 {
	if($row['photo']=="")
	{
		$photo="fan.png";
	}else{
		$photo=$row['photo'];
	}
	//print_r($row);
	echo "<tr>
	<td><img src='$photo' height=50 width=50></td>
	<td>".$row['user_id']."</td><td>".$row['name']."</td><td>".$row['mobile_no']."</td><td>".$row['email']."</td><td>".$row['gender']."</td>
	<td><a  href='update-form.php?user_id=".$row['user_id']."'>Update</a></td>
	
	<td><a onclick='return confirm(` Are u sure? `)' href='delete.php?user_id=".$row['user_id']."'>Delete</a></td>
	</tr>";
	
 }
 echo "</table>";
 /*
 $row=mysqli_fetch_row($res);
 echo "<pre>";
 print_r($row);
 
 $row=mysqli_fetch_row($res);
 echo "<pre>";
 var_dump($row);
 */
 ?>
 <script>
	function delete()
	{
		alert('function called');
	}
</script>