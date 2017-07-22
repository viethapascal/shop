<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
	.error{
		color:red;
		margin-left: 15px;
	}
	input,select{
		margin: 20px;
		width: 100%;
		height: 25px;
		border-radius: 4px;
	}
	input[type=submit]{
		height:30px;

	}
	#myform{
		width: 50%;
		margin:auto;
	}
	#container{
		width:50%;
		margin: auto;
	}
	</style>
</head>
<body>
	<?php 
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			if ($_POST["email"]==$_SESSION["email"] && $_POST["password"]==$_SESSION["password"]) {
				if (!isset($_SESSION["prname"])) {
					$_SESSION["prname"]=array();
				}
				if (!isset($_SESSION["cost"])) {
					$_SESSION["cost"]=array();
				}
				if (!isset($_SESSION["total"])) {
					$_SESSION["total"]=0;
				}
				header('Location:products.php');
			}
		}
	 ?>
	
	<div id="container">
		
		<form  id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2> Login </h2>			

			<label for="email">Email:</label>
			<span class="error"> *</span>
			<input type="email" id="email" name="email">
			
			<label for="password">Password:</label>
			<span class="error"> *</span>
			<input type="password" id="password" name="password">

			<br>
			<input type="submit" value="Login" >
		</form>
	</div>
	
	
</body>
</html>