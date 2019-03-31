<?php
	function connect() {
	$host = "localhost";
	$user = "root";
	$pass = "rushrush";
	$db = "rushdb";

	$co = mysqli_connect($host, $user, $pass, $db);
	if (mysqli_connect_errno($co))
	{
		echo "Echec de connexion à la base de données : " . mysqli_connect_error();
		return (NULL);
	}
	return $co;
	}
?>