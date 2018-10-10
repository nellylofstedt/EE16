<?php
/*
* Läsa in ala varor och skapa en lista på alla varor.
* PHP version 7
* @category   Webbshopp
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Läsa inlägg</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <header>Alla varor</header>
        <main>
            <?php

/* Öppna textfilen och läsa in hela innehållet */
$allaRader = file("beskrivning.txt");

/* Loopa igenom rad-för-rad */
foreach ($allaRader as $rad) {

    /* Plocka isär raden i dess bestånsdelar */
    $delar = explode('¤', $rad);
    $beskrivning = $delar[0];
    $pris = $delar[1];
    $bild = $delar[2];

    /* Skriv info om HTML */
    echo "<div class=\"vara\">\n";
    echo "<img src=\"./varor/$bild\" alt=\"$beskrivning\">\n";
    echo "<p>$beskrivning</p>\n";
    echo "<p>$pris kr</p>\n";
    echo "<hr>\n";
    echo "</div>\n";
}
?>
        </main>
        <footer>

        </footer>
    </div>


</body>

</html>