<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQLITE3</title>
</head>
<body>
<?php
// 1) Pasa de poner esto si te atreves KAMIKAZE. 
error_reporting(E_ALL);
ini_set("display_errors", "On");

try {
	//open the database
	$db = new PDO('sqlite:baseDatos.sqlite');

	//Creamos la tabla: tipo_usuarios
	$db->exec("PRAGMA foreign_keys = ON");
	$db->exec("DROP TABLE tipo_usuarios");
	$db->exec("CREATE TABLE IF NOT EXISTS beers (
		id INTEGER PRIMARY KEY NOT NULL ,
		nombre varchar(128) NOT NULL,
		fabricante varchar(200) NOT NULL,
		origen varchar(100) NOT NULL,
		cantidad INTEGER NOT NULL
		)");	   


	//Insertamos algunos tipo_usuarios
	$db->exec("INSERT INTO beers (nombre,fabricante,origen,cantidad) VALUES (
		'Paulaner','Brau Holding International AG','Múnich, Alemania','10000')");	


	//now output the data to a simple html table...
	print "<h3> TABLA beers </h3>";
	print "<pre>";
	$result = $db->query('SELECT * FROM beers');

	foreach($result as $row) {
		print $row['id']." ".$row['nombre']." ".$row['fabricante']." ".$row['origen']." ".$row['cantidad']."\n";
	}
	print "</pre>";

	// close the database connection
	$db = NULL;
} catch(PDOException $e) {
	print 'Exception : '.$e->getMessage();
}
?>

</body>
</html>