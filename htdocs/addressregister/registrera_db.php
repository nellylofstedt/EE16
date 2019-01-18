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
<?php
    /* kontrollera att data finna innan vi läser av data */
    if (isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["epost"])) {
        /* läs av data */
        $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
        $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
        $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

        /* Logga in på databasen och skapa en anslutning */
        $conn = new mysqli($hostname, $user, $password, $database);

        /* Fungerade anslutningen */
        if ($conn->connect_error) 
            die("Kunde ej ansluta till databsen" . $conn->connect_error);
        else {
            echo "<p>Anslutningen lyckades</p>";
        }

        /* Lagra data i tabellen */
        $sql = "INSERT INTO personer (fnamn, enamn, epost) VALUES ('$fnamn', '$enamn', '$epost');";
        $result = $conn->query($sql);

        /* körde sql satsen */
        if (!$result) {
            die("Det blev fel med sql-satsen.");
        } else {
            echo "<p>Personen är registrerad</p>";
        }
        

        /* Stänger ned anslutningen */
        $conn->close();
    }     

?>
    <div class="kontainer">
        <h3>Registrera adress</h3>
            <form action="#" method="post">
            <label>Förnamn</label>
            <input type="text" name="fnamn" id="fnamn"><br>
            <label>Efternamn</label>
            <input type="text" name="enamn" id="enamn"><br>
            <label>Epost</label>
            <input type="epost" name="epost" id="epost"><br>
            <button>Registrera</button>
        </form>
    </div>
</body>
</html>