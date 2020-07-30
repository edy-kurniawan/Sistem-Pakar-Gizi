<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Users Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="cek_login.php" method="POST">
					<label for="login">Username:</label>
					<input id="username" name="username" class="text" required/>
					<label for="pass">Password:</label>
					<input id="password" name="password" type="password" class="text" required/>
					<div class="sep"></div>
					<button type="submit" class="ok">Login</button> <a class="button" href="../index.php">Kembali</a>
				</form>
			</div>
			<div class="footer">Users Login</div>
		</div>
	</div>
</div>

</body>
</html>
