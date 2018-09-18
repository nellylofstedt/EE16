<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inoggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php   
if(isset($_POST["anamn"]) && isset($_POST["losen"])) { 
    /* Ta emot data */
    $anamn = $_POST["anamn"];
    $losen = $_POST["losen"];
    
    /* Kontrollera användarnamn och lösenord */
    if ($anamn == 'NellyLofstedt' && $losen == 'xdzufg123') {
        
        echo "<p>$anamn, du är inloggad.</p>";
    } else {
        echo "<p>Fel användarnamn eller lösenord</p>";
    }   
}  
?>
    <p>Var vänligen logga in</p>
    <form action="upg_3_2b.php" method="post">
        <label for="">Användarnamn</label>
        <input type="text" name="anamn"><br>
        <label for="">Lösenord</label>
        <input type="password" name="losen"><br>
        <button>Logga in</button>
    </form>
</body>

</html>