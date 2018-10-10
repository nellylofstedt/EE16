<?php
/*
* Ladda upp filer (bilder) i en katalog
* PHP version 7
* @category   Filuppladdning
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filuppladdning</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
/* Kolla att man har klickat på knappen submit */
if (isset($_POST["submit"])) {
    /* Ta emot data */
    $filen = $_FILES['filen'];
    $beskrivning = $_POST['beskrivning'];
    $pris = $_POST['pris'];
    
    /* Ladda upp bilden */
    /* Plocka ut filnamnet */
    $fileName = $filen['name'];
    
    /* Plocka ut filtypen */
    $fileType = $filen['type'];
    
    /* Plocka ut filtypen */
    $fileTempName = $filen['tmp_name'];
    
    /* Plocka ut filstorleken */
    $fileSize = $filen['size'];
    
    /* Plocka ut filstorleken */
    $fileError = $filen['error'];
    
    
    /* Plocka ut filändelse */
    $fileExt = explode('image/', $fileType);
    
    
    /* Tillåtna filtyper att ladda upp */
    $allowedType = ['jpeg', 'png', 'pdf', 'gif'];
    
    /* Felmeddelanden */
    $errors = array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );
    
    /* Är filen tillåten att ladda upp */
    if (in_array($fileExt[1], $allowedType)) {
        
        
        /* Nästa steg steg - blev något fel */
        if ($fileError == 0) {
            
            /* Skapa nytt unikt filnamn för att ej skriva över filer med samma namn */
            $fileNewName = uniqid('', true) . "." . $fileExt[1];
            
            /* Hela sökvägen till den nya filen */
            $fileDestination = "./varor/$fileNewName";
            
            
            /* Flytta filen rätt */
            move_uploaded_file($fileTempName, $fileDestination);
            echo "<p>Uppladdnings lyckades!</p>";
            
        } else {
            echo "<P>Något gick fel: $errors[$fileError]</p>"; 
        }
        
    } else {
        echo "<p>Icke tillåten filtyp</p>";
    }
    /* Uppladdning slutförd */

    /* Spara texten: beskrivning, pris och bildens nya namn */
    $handtag = fopen('beskrivning.txt', 'a');
    fwrite($handtag, $beskrivning . '¤' . $pris . '¤' . $fileNewName . PHP_EOL);
    fclose($handtag);
}
?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label>Beskrivnig</label><input type="text" name="beskrivning"><br>
        <label>Pris</label><input type="text" name="pris"><br>
        <input type="file" name="filen"><br>
        <button type="submit" name="submit">Ladda upp vara!</button>
    </form>
</body>

</html>