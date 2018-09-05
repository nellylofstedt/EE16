
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "header.inc" ?>
    <main>
        <?php
        /* Ta emot text från formuläret 
        och spara ned i en textfil. */

        $texten = $_POST["inlagg"];
        $tidpunkt = date('l j F Y h:i:s');

        $handtag = fopen("inlaggen.txt", 'a');
        fwrite($handtag, "<p>" . $tidpunkt . "<br>" . $texten . "</p>\n");

        echo "<p>Inlägget har sparats!</p>";

        fclose($handtag);
        ?>
    </main>
    <footer>
    
    </footer>
</div>


</body>
</html>
