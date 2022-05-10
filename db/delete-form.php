<html>
	<body>
		<form action="delete.php" method="get">
			<!-- <input type="text" name="user_id" placeholder="enter user id"> -->

			<?php
			$link=mysqli_connect("localhost","root","","php_diploma");
			$q="select * from users";
			$res=mysqli_query($link,$q);
			?>
			
			<select name="user_id">
			<?php
				while($row=mysqli_fetch_array($res))
				{
					echo "<option value='".$row['user_id'] ."'>".$row['name']." (".$row['mobile_no'].")</option>";
				}

			?>
				
			</select>
			
			<input type="submit">
		</form>
	
	</body>

</html>