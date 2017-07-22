<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping time!</title>
	<link rel=stylesheet href="main.css">
</head>
<body>
	<?php 
		 
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			if (!empty($_POST)){
				$_SESSION["prname"][]=$_POST["prname"];
				$_SESSION["cost"][]=$_POST["cost"];
				$_SESSION["total"]+=$_POST["cost"];
			}
		}
	 ?>

	<div class="container">
		<ul>
		    <li><a href="products.php">HOME</a></li>
		    <li><a href="cart.php">YOUR CART</a></li>
		    <li><a href="logout.php">LOG OUT</a></li>
		    <li><a href=""><?php echo $_SESSION["name"] ?></a></li>
		</ul>
	</div>
	<div class="container" >
		<h1>List products</h1>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Xe dap">
			    <input type="hidden" name="cost" value="1000" >
			    <button type="submit"> Add to cart</button>		
			    <label>1000$</label>	
			</div>
		</form>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Xe may">
			    <input type="hidden" name="cost" value="300" >
			    <button type="submit"> Add to cart</button>		
			    <label>300$</label>	
			</div>
		</form>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Ti vi">
			    <input type="hidden" name="cost" value="700" >
			    <button type="submit"> Add to cart</button>		
			    <label>700$</label>	
			</div>
		</form>
		<br>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Tu lanh">
			    <input type="hidden" name="cost" value="1710" >
			    <button type="submit"> Add to cart</button>		
			    <label>1710$</label>	
			</div>
		</form>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Laptop">
			    <input type="hidden" name="cost" value="4000" >
			    <button type="submit"> Add to cart</button>		
			    <label>4000$</label>	
			</div>
		</form>
		<form class ="listproduct" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Sach vo">
			    <input type="hidden" name="cost" value="20" >
			    <button type="submit"> Add to cart</button>		
			    <label>20$</label>	
			</div>
		</form>


		
	</div>


</body>
</html>