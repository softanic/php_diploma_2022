 <html>
	<head>
	
	</head>
	<body>
		<?php
		$user_id=$_GET['user_id'];
		$link=mysqli_connect("localhost","root","","php_diploma");
		$q="select * from users where user_id=$user_id";
		$res=mysqli_query($link,$q);
		$user=mysqli_fetch_array($res);
		//print_r($user);
 
		?>
		<form action="update-save.php" method="POST">
			<table>
				
				
						<input  type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
				
				<tr>
					<td>
						<label>Name</label>
					</td>
					<td>
						<input type="text" name="name" value="<?php echo $user['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile</label>
					</td>
					<td>
						<input type="number" name="mobile_no"  value="<?php echo $user['mobile_no']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Email Id</label>
					</td>
					<td>
						<input type="email" name="email"  value="<?php echo $user['email']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Gender</label>
					</td>
					<td>
						<?php
							if($user['gender']=='male')
							{
						?>
						<input type="radio" name="gender" value="male" checked> Male
						<input type="radio" name="gender" value="female"> Female
						<?php
							}else{
						?>
						<input type="radio" name="gender" value="male" > Male
						<input type="radio" name="gender" value="female" checked> Female
						
						<?php
							}
						?>
					</td>
				</tr>
				
				<tr>
					<td>
						<label>Gender</label>
					</td>
					<td>
						<input type="radio" name="gender" value="male" <?php echo $user['gender']=="male"?'checked':"";  ?>> Male
						<input type="radio" name="gender" value="female" <?php echo $user['gender']=="female"?'checked':"";  ?>> Female
					
					</td>
				</tr>
				<tr>
					<td>
					
					</td>
					<td>
						<input type="submit" value="Save Data">
					</td>
				</tr>
			</table>
		
		</form>
	
	</body>
</html>