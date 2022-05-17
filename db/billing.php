<?php
session_start();

?>
<html>
	<head>
	
	</head>
	<body>
		<form action="billing-save.php" method="post">
			<input type="text" autofocus name="item_name" placeholder="enter item name">
			<input type="submit" value="Add to cart">
			
		</form>
		<table border=1>
			<tr>
				<th>Sr. No</th>
				<th>Item Name</th>
			</tr>
			<?php
			if(isset($_SESSION['bill']))
			{
				$bill=$_SESSION['bill'];
				//print_r($bill);
				$count=1;
				foreach($bill as $item)
				{
					echo "<tr><td>". $count++ ."</td><td>$item</td></tr>";	
				}
			}
			
			?>
			
		</table>
	</body>
</html>