
<?php 
	session_start();
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST)){
				$_SESSION["cost"][]=$_POST["cost"];
				$_SESSION["prname"][]=$_POST["prname"];
				$_SESSION["total"]+=intval($_POST["cost"]);
			}
		}
	 ?>