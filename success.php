<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chúc mừng bạn đã đăng kí thành công!</title>
</head>
<body>
	<h1>Chúc mừng <?php echo $_SESSION["name"]; ?> đã đăng kí thành công!!</h1>
	<h1>Click vào <a href="login.php">đây</a> để tiếp tục</h1>
</body>
</html>