<?php
/*
* PHP version 7
* @category   Formulär
* @author     Nelly Löfstedt <lofstedtnelly@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

/* Kontrollera att data finns */
if (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"]) && isset($_POST["email"]) ) {
    
    /* Ta emot data */
    
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $postnr = $_POST["postnr"];
    $postort = $_POST["postort"];
    $email = $_POST["email"];
    $fel = 0;
    $postnr = str_replace($postnr, ' ', '');
    
    
    /* Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0) {
        echo "<p>Varning tomt: Vg fyll i namnet.</p>";
        $fel++;
    }
    if (strlen($adress) == 0) {
        echo "<p>Varning tomt: Vg fyll i adressen.</p>";
        $fel++;
    }
    if (strlen($postnr) == 0) {
        echo "<p>Varning tomt: Vg fyll i postnr.</p>";
        $fel++;
    }
    if (strlen($postort) == 0) {
        echo "<p>Varning tomt: Vg fyll i postort.</p>";
        $fel++;
    }
    if (strlen($email) == 0) {
        echo "<p>Varning tomt: Vg fyll i E-postadress.</p>";
        $fel++;
    }
    
    
    if (strlen($namn) < 3) {
        echo "<p>Varning för kort</p>";
        $fel++;
    }
    if (strlen($adress) < 3) {
        echo "<p>Varning för kort</p>";
        $fel++;
    }
    if (strlen($postnr) < 3) {
        echo "<p>Varning för kort</p>";
        $fel++;
    }
    if (strlen($postort) < 3) {
        echo "<p>Varning för kort</p>";
        $fel++;
    }
    if (strlen($email) < 6) {
        echo "<p>Varning för kort</p>";
        $fel++;
    }
    
    /* Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror */
    
    if (strlen($postnr) != 5) {
        echo "<p>Varning: Postnr måste vara 5 siffror långt</p>";
        $fel++;
    }
    if (!ctype_digit($postnr)) {
        echo "<p>Varning postnr får endast innehålla siffror</p>";
        $fel++;
    }
    
    /* Kontrollera att emailen innehåller en @ och en punkt */
    
    if (!strpos($email, '@')) {
        echo "<p>En email måste bestå av en @.</p>";
        $fel++;
    }
    if (!strpos($email, '.')) {
        echo "<p>En email måste bestå av en punkt.</p>";
        $fel++;
    }
    if ($fel == 0) {
        ?>
    <form action="#" method="post">
        <label>Namn</label><input type="text" name="namn"><br>
        <label>Gatuadress</label><input type="text" name="adress"><br>
        <label>Postnr</label><input type="text" name="postnr"><br>
        <label>Postort</label><input type="text" name="postort"><br>
        <label>Email</label><input type="text" name="email"><br>
        <button>Skicka in</button>
    </form>
    <?php
    } else {
        ?>
    <form action="#" method="post">
        <label>Namn</label><input type="text" name="namn" value="<?php echo $namn ?>"><br>
        <label>Gatuadress</label><input type="text" name="adress" value="<?php echo $adress ?>"><br>
        <label>Postnr</label><input type="text" name="postnr" value="<?php echo $postnr ?>"><br>
        <label>Postort</label><input type="text" name="postort" value="<?php echo $postort ?>"><br>
        <label>Email</label><input type="text" name="email" value="<?php echo $email ?>"><br>
        <button>Skicka in</button>
    </form>
    <?php
    }
    
}
?>
</body>

</html>