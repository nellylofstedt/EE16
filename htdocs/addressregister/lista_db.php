<?php
include_once("../../admin/konfig_db.php");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        
        /* Logga in på databasen och skapa en anslutning */
        $conn = new mysqli($hostname, $user, $password, $database);

        /* Fungerade anslutningen */
        if ($conn->connect_error) 
            die("Kunde ej ansluta till databsen" . $conn->connect_error);
        else {
            echo "<p>Anslutningen lyckades</p>";
        }
        
        /* Skapa sql-frågan */

        $sql = "SELECT * FROM personer";
        $result = $conn->query($sql);

        /* körde sql satsen */
        if (!$result) {
            die("Det blev fel med sql-satsen.");
        } else {
            echo "<p>Personernas data kunde hämtas!</p>";
        }
        echo "<table>";
        echo 
        "<tr>
            <th>Förnamn</th>
            <th>Efternamn</th>
            <th>Epostadress</th>
        </tr>";

        /* Skriv ut resultatet rad för rad */
        while ($rad = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$rad['fnamn']}</td>";
            echo "<td>{$rad['enamn']}</td>";
            echo "<td>{$rad['epost']}</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        $conn->close();
        ?> 
    </div>   
</body>
</html> 