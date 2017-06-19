<?php

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$user   = $url["user"];
	$pass   = $url["pass"];
	$db     = substr($url["path"], 1);

	/*$con = new mysqli($server, $user, $pass, $db);*/

	$con=mysqli_connect("$server", "$user", "$pass", "$db") or die("Connection was not established");

/*	$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT name FROM test_table');
  $st->execute();

  $names = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $app['monolog']->addDebug('Row ' . $row['name']);
    $names[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'names' => $names
  ));
});*/

?>