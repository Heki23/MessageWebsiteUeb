<!DOCTYPE html>
<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta http-equiv="refresh" content="5; URL=http://localhost/login15_01/">
    <title>Nachrichten abschicken</title>
    <script src="mycode.js" type="text/javascript"></script>
</head>
<body>
<div class="box box1">
            <h1>Nachricht abschicken</h1>
        </div>
    <div class="container">
        
      
        <div class="box box3">
            <?php
            session_start();
            $Absender = $_SESSION['sBenutzer'];
            $Empfaenger = $_POST['nEmpfanger'];
            $Nachricht = $_POST['nNachricht'];

            include("zugriff.inc");
            $connection = mysqli_connect($host, $user, $password, $database) or die("Verbindung fehlgeschlagen");
            try {
                $empfaengerprufen = "select name from logindaten where name='$Empfaenger'";
                $resultpr = mysqli_query($connection, $empfaengerprufen) or die("Abfrage fehlgeschlagen");
                $DBNutzer = "";
                while ($ds = mysqli_fetch_object($resultpr)) {
                    $DBNutzer = $ds->name;
                }

                if ($DBNutzer != "") {
                    $query = "INSERT INTO benutzerdaten (Absender, Empfaeger, Nachricht) VALUES ('" . $Absender . "', '" . $Empfaenger . "', '" . $Nachricht . "')";
                    $result = mysqli_query($connection, $query) or die("Eintragen fehlgeschlagen");
                    echo "<h2>Absender: $Absender,<br> Empf&auml;nger: $Empfaenger,<br> Nachricht: $Nachricht</h2>";
                } else {
                    echo "  Empfaeger nicht gefunden!<br><br>";
                }
                echo "Sie werden in 5 Sekunden weitergeleitet";
                mysqli_close($connection);
            } catch (Exception $e) {
            }
            ?>
        </div>
		
    </div>
</body>
</html>
