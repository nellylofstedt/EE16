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

        /* SKriv ner i en textfil */
        $handtag = fopen('register.txt', 'a');
                fwrite($handtag, "$fnamn $enamn $epost" . PHP_EOL);
                fclose($handtag);
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