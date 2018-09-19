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

if (isset($_POST["belopp"]) && isset($_POST["ranta"]) && isset($_POST["lanetid"])) {
    
    /* Ta emot data */
    $belopp = $_POST["belopp"];
    $ranta = $_POST["ranta"];
    $lanetid = $_POST["lanetid"];
    $ranta2 = ($ranta / 100 + 1);

    
    /* Om år 1 */
    if ($lanetid == "1") {
        $lanekostnad = $belopp * ($ranta2) - $belopp;
        echo "Din lånekostnad blir $lanekostnad";
        
    }
    
    
    /* Om år 3 */
    
    if ($lanetid == "3") {
        $lanekostnad = $belopp * ($ranta2) * ($ranta2) * ($ranta2) - $belopp;
        echo "Din lånekostnad blir $lanekostnad";
        
    }
    
    
    /* Om år 5 */
    
    if ($lanetid == "5") {
        $lanekostnad = $belopp * ($ranta2) * ($ranta2) * ($ranta2) * ($ranta2) * ($ranta2) - $belopp;
        echo "Din lånekostnad blir $lanekostnad";
        
    }
    
    
    
}
?>

    <form action="#" method="post">
        <label>Lånebeloppen </label>
        <input type="text" name="belopp"><br>
        <label>Räntan </label>
        <input type="text" name="ranta"><br>
        <input type="radio" name="lanetid" value="1"> 1 år<br>
        <input type="radio" name="lanetid" value="3"> 3 år<br>
        <input type="radio" name="lanetid" value="5"> 5 år<br>
        <button>Räkna ut räntan</button>
    </form>
</body>

</html>