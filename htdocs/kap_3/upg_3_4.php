<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
/* Kontrollera att POST-variablerna finns, dvs första gången. */

if(isset($_POST["tal1"])) {
    
    /* Ta emot data */
    $tal1 = $_POST["tal1"];
    
    for ($i=1; $i <= $tal1 $i++) { 
        if ($i*$i < 50){
            echo $ . " " . $i*$i;
        }
    }
}
?>

    <form action="#" method="post">
        <label>Tal ett </label><input type="text" name="tal1"><br>
        <label>Tal två </label><input type="text" name="tal2"><br>
        <button>Skriv ut!</button>
    </form>
</body>

</html>