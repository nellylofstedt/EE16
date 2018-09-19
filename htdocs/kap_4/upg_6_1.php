<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

/* Kontrollera att data finns */
if (isset($_POST["namn"]) && (isset($_POST["adress"]) && (isset($_POST["postnr"]) && (isset($_POST["postort"])) {

/* Ta emot data */

$namn = $_POST["namn"];
$adress = $_POST["adress"];
$postnr = $_POST["postnr"];
$postort = $_POST["postort"];


/* Kontrollera att alla fälten är ifyllda */
if (strlen($namn) == 0) {
    echo "<p>Varning tomt: Vg fyll i namnet.</p>"
}
if (strlen($adress) == 0) {
    echo "<p>Varning tomt: Vg fyll i adressen.</p>"
}
if (strlen($postnr) == 0) {
    echo "<p>Varning tomt: Vg fyll i postnr.</p>"
}
if (strlen($postort) == 0) {
    echo "<p>Varning tomt: Vg fyll i postort.</p>"
}



/* Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror */

}
/* Formuläret för att mata in namn, adress, postnr och postort */

?>
    <form action="#" method="post">
        <label>Namn</label><input type="text">
        <label>Gatuadress</label><input type="text">
        <label>Postnr</label><input type="text">
        <label>Postort</label><input type="text">
        <button>Skicka in</button>
    </form>

</body>

</html>