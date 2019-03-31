<?php
	require_once('../model/database.php');
    
    function user_exist($login)
	{
		$co = connect();
		$req = "SELECT * FROM users WHERE login = '$login'";
		$req = mysqli_query($co, $req);
		if (!$req)
			return null;
		mysqli_close($co);
		return mysqli_fetch_assoc($req);
	}

	function add_user($firstname, $lastname, $login, $passwd1, $mail) {
		$co = connect();
		$hash = hash('whirlpool', $passwd1);
		$req = "INSERT INTO users VALUES (id_user, '$firstname', '$lastname', '$login', '$hash', '$mail', 100)";
		$req = mysqli_query($co, $req);
		if (!$req)
			return null;
	}
	$co = connect();
	$login = mysqli_real_escape_string($co, $_POST['login']);
	$firstname = mysqli_real_escape_string($co, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($co, $_POST['lastname']);
	$mail = mysqli_real_escape_string($co, $_POST['mail']);
	$passwd1 = mysqli_real_escape_string($co, $_POST['passwd1']);
	$passwd2 = mysqli_real_escape_string($co, $_POST['passwd2']);
	mysqli_close($co);

	if (user_exist($login)) {
		header('Location: ../register.php');
	} else {
		add_user($firstname, $lastname, $login, $passwd1, $mail);
		header('Location: ../login.php');
	}
?>