<?php
session_start();
?>
<html>
	<head>
	
	</head>
	<body>
		<?php
		//echo md5('demo');
		if(isset($_SESSION['msg']))
		{
			echo "<h5 style='color:red; '>".$_SESSION['msg']."</h5>";
			unset($_SESSION['msg']);
		}
			
		?>
		<form action="login-validate.php" method="POST" >
			<table>
				
				<tr>
					<td>
						<label>Mobile</label>
					</td>
					<td>
						<input type="text" name="mobile_no">
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
					</td>
					<td>
						<input type="text" name="password">
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="submit" value="login">
						<a href="user-signup.php">Don't have account? signup here</a>
					</td>
				</tr>
				
			</table>
		
		</form>
	
	</body>
</html>