<?php
	global $con;
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = "localhost";
	$user   = "root";
	$pass   = "";
	$db     = "tedxsnist";

	/*$conn = new mysqli($server, $username, $password, $db);*/

	$con=mysqli_connect("$server", "$user", "$pass", "$db") or die("Connection was not established");



?>