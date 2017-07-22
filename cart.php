<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping time!</title>
	<link rel=stylesheet href="main.css">
	<style>
	th{
		text-align: left;
	}
	table,th,td {
    	border: 1px solid black;
    	border-collapse: collapse;
	}
	table{
		width:50%;
	}
	</style>

</head>
<body>
	<div class="container" >
		<ul>
		    <li><a href="products.php">HOME</a></li>
		    <li><a href="cart.php">YOUR CART</a></li>
		    <li><a href="logout.php">LOG OUT</a></li>
		    <li><a href=""><?php echo $_SESSION["name"] ?></a></li>
		</ul>
	</div>
	<div class="container" style="margin-top: 30px">		
	<table >
	<tr>
		<th colspan="2">
			User information:<br>
			Name: <?php echo $_SESSION["name"]."<br>" ?>
			Email: <?php echo $_SESSION["email"]."<br>" ?>
			Số điện thoại: <?php echo $_SESSION["number"]."<br>" ?>
		</th>
	</tr>
	<tr>
		<th>Product</th>
		<th>Cost</th>
	</tr>
	<tr>
		<td><?php foreach ($_SESSION["prname"] as $i) {
			echo $i."<br>";
		} ?></td>
		<td><?php foreach ($_SESSION["cost"] as $i) {
			echo $i."<br>";
		} ?></td>
	</tr>
	<tr><td><b>Total cost:<?php echo $_SESSION["total"]."$";
		?></b></td></tr>
		
	</table>	
		
	</div>


</body>
</html>