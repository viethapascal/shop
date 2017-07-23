<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>Shopping time!</title>
	<link rel=stylesheet href="main.css">
	
</head>
<body>
	
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
		<form id="listproduct"  method="POST">
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Xe dap">
			    <input type="hidden" name="cost" value="1000" >
			    <button id="btn1"> Add to cart</button>		
			    <label>1000$</label>	
			</div>
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Xe may">
			    <input type="hidden" name="cost" value="4000" >
			    <button id="btn2" > Add to cart</button>		
			    <label>4000$</label>	
			</div>
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="O to">
			    <input type="hidden" name="cost" value="2000" >
			    <button id="btn3" > Add to cart</button>		
			    <label>2000$</label>	
			</div>
			<br>
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Laptop>
			    <input type="hidden" name="cost" value="1500" >
			    <button id="btn4" > Add to cart</button>		
			    <label>1500$</label>	
			</div>
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Iphone">
			    <input type="hidden" name="cost" value="7000" >
			    <button id="btn5" > Add to cart</button>		
			    <label>7000$</label>	
			</div>
			<div class="product">
				<label>Product name</label>
				<img src="" alt="product" style="width: 100%; height: 75%">
				<input type="hidden" name="prname" value="Nokia">
			    <input type="hidden" name="cost" value="2000" >
			    <button id="btn6" > Add to cart</button>		
			    <label>2000$</label>	
			</div>

		</form>	
		<p id="pr"></p>

	</div>

	 <script >
	 	$(document).ready(function(){
	 		$("button").click(function(){
	 			var form = this.parentNode;
				var hid = form.querySelectorAll("[type='hidden']");
				var product = hid[0];
				var cost = hid[1];
				console.log(hid[0]);
				$.ajax({
					type: "POST",
					url: "tocart.php",
					data: {"prname":hid[0].value, "cost":hid[1].value},
				});

	 		});
	 	});	
	 	function upload(){

	 	}
	 </script>


</body>
</html>