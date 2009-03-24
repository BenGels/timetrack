<?php
	session_start();
	if (isset($_SESSION['userhash'])) {
		unset($_SESSION['userhash']);
	}
	
	if ($_GET['e']==1) {
		$error='Login fehlgeschlagen!';
	}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>TimeTrack</title>
	<meta name="author" content="Stefan Lange-Hegermann">
</head>
<body>
	<?php if (isset($error)): ?>
	<div id="error_box">
		<strong><?php echo $error ?></strong>
	</div>
	<?php endif; ?>
	Benutzername und Passwort angeben um die Logs einzusehen:
	<form action="show.php" method="post">
	<p>
	<label for="name">Username:</label><br>
		<input type="text" name="u" id="name" />
	</p><p>
	<label for="password">Passwort:</label><br>
		<input type="password" name="p" id="password" />
	</p>
	<p>
		<input type="submit" value="login" />
	</p>
	</form>
</body>
</html>

