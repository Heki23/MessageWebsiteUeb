<?php
session_start();
$Benutzer = $_POST['hBenutzer'];
$Passwort = $_POST['hPasswort'];
include("zugriff.inc");
$connection=mysqli_connect($host, $user, $password, $database)
or die ("Keine Verbindung zum Server möglich");

$query="insert into logindaten (Name, Passwort) values ('$Benutzer', '$Passwort')";


 $result = mysqli_query($connection, $query)
or die("Abfrage fehlgeschlagen");
	header("Location: ./index.html");

mysqli_close($connection);

?>