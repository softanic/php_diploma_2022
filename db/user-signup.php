<html>
	<head>
	
	</head>
	<body>
		<form action="save.php" method="POST">
			<table>
				
				<tr>
					<td>
						<label>Name</label>
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile</label>
					</td>
					<td>
						<input type="number" name="mobile_no">
					</td>
				</tr>
				<tr>
					<td>
						<label>Email Id</label>
					</td>
					<td>
						<input type="email" name="email">
					</td>
				</tr>
				<tr>
					<td>
						<label>Gender</label>
					</td>
					<td>
						<input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
					</td>
					<td>
						<input type="password" name="password">
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