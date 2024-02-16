<?php
session_start();
$Benutzer = $_POST['benutzer'];
$Passwort = $_POST['passwort'];

IF ($Passwort ==""){
	ECHO("Geben Sie ein Passwort ein!");
}

ELSE{
include("zugriff.inc");
$connection=mysqli_connect($host, $user, $password, $database)
or die ("Keine Verbindung zum Server möglich");

$query="SELECT Passwort from logindaten where Name ='$Benutzer'";

 $result = mysqli_query($connection, $query)
or die("Abfrage fehlgeschlagen");

 WHILE($ds = mysqli_fetch_object($result)){
	$cPasswort = $ds-> Passwort;
}

IF($Passwort==$cPasswort){
	$_SESSION["sBenutzer"]=$Benutzer;
	header("Location: ./nachricht.html");
}
ELSE{
	ECHO("Login fehlgeschlagen");
}

mysqli_close($connection);
}
?>