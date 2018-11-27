<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cssminifiering</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <header>
            <h1>Minifiera css</h1>
        </header>
        <main>

            <form action="#" method="post" enctype="multipart/form-data">
                <h3>Input</h3>
                <textarea name="texten" id="ruta" cols="40" rows="30"></textarea>
                <h3>Output</h3>
                <textarea name="texten" id="ruta" cols="40" rows="30"></textarea><br>
                <input type="checkbox" name="spara"><label>Spara ned fil</label><br>
                <input type="text" name="filnamn"><label>Filnamn</label><br>
                <button type="submit" name="submit">Minifiera</button>
            </form>
        </main>
        <footer>
            Nelly Löfstedt 2018
        </footer>
    </div>
</body>

</html>