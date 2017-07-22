<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ccảm ơn!</title>
</head>
<body>
	<h1>cảm ơn <?php echo $_SESSION["name"]; ?> đã sử dụng dịch vụ!</h1>
	<?php session_unset();?>
</body> 
</html>