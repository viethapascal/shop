<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register to start!</title>
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
		$nameErr=$emailErr=$genderErr=$numberErr=$ageErr=$passErr="";
		$name=$email=$gender=$comment=$number=$age=$pass="";
		
		if ($_SERVER["REQUEST_METHOD"]=="POST"){

			$Passed=true;
			$name=$_POST["name"];
			if (empty($name)){
				$nameErr= "Name is required";
				$Passed=false;
			} else{	
				$name = test_input($name);
				if (!preg_match("/^[a-zA-Z ]{4,100}$/",$name)){ //regular expression
					$nameErr="Invalid name";
					$Passed=false;
				}
			}
			$email = $_POST["email"];
			if (empty($email)){
				$emailErr="Email is required";
				$Passed=false;
			} else{ 
				$email= test_input($email);
				if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$emailErr="Invalid email";
					$Passed=false;
				}

			}
			$pass=$_POST["password"];
			if (empty($pass)){
				$passErr = "Please enter your password!";
				$Passed = false;
			}
			else {
				$pass= test_input($pass);
				if (!preg_match("/^[a-zA-Z]{4,50}$/",$pass)){
					$passErr = "Invalid password";
					$Passed = false;
				}
			}
			$number = $_POST["number"];
			if (empty($number)){
				$numberErr="Phone number required";
				$Passed=false;
			} else {
				$number = test_input($number);
				if (!preg_match("/^[0-9]{10,12}$/",$number)){
					$numberErr="Invalid phone number";
					$Passed=false;
				}
			}
			$age=$_POST["age"];
			if (empty($age)){
				$ageErr="";
			} else {

				$age = test_input($age);

				if (!preg_match("/^[0-9]{1,3}$/",$age)|| intval($age)<5 ){
					$ageErr="Invalid age";
					$Passed=false;
				}
			}
			if ($Passed) {
				echo $name;
				$_SESSION["name"]=$name;
				$_SESSION["email"]=$email;
				$_SESSION["password"]= $pass;
				$_SESSION["number"]=$number;
				$_SESSION["age"]=$age;
				header('Location:success.php');
			}
		}
		function test_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
	?>
	<div id="container">
		
		<form  id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2> Register </h2>
			<label for="name">Name:</label>
			<span class="error">* <?php echo $nameErr ?></span>	
			<input type="text" id="name" name="name">
			

			<label for="email">Email:</label>
			<span class="error"> *<?php echo $emailErr ?></span>
			<input type="email" id="email" name="email">
			
			<label for="password">Password:</label>
			<span class="error"> *<?php echo $passErr ?></span>
			<input type="password" id="password" name="password">

			<label for="number">Phone Number:</label>
			<span class="error"> <?php echo $numberErr ?></span>
			<input type="text" id="number" name="number">				

			<label for="age">Age:</label>
			<span class="error"> <?php echo $ageErr ?></span>
			<input type="text" id="age" name="age">
			<br>
			<input type="submit" >
		</form>
	</div>
	
	
</body>
</html>