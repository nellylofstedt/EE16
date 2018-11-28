<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valutaomvandlare</title>
    <link rel="stylesheet" href="valuta.css">
</head>
<body>
    <div class="kontainer">
        <h1>Valutaomvandlare</h1>
        <form>
            <label for="belopp">Belopp ($)</label>
            <input id="belopp" type="text">
            <label for="valuta">Valuta</label>
            <select id="valuta">
                <option>Välj valuta</option>
                <option value="EUR">Europa Euro</option>
                <option value="GBP">Storbritannien Pounds</option>
                <option value="SEK">Sverige Kronor</option>
                <option value="BRL">Brasilien Reais</option>
                <option value="DKK">Danmark Kroner</option>
                <option value="ISK">Island Kronur</option>
                <option value="INR">Indien Rupees</option>
                <option value="JPY">Japan Yen</option>
                <option value="NOK">Norge Krone</option>
                <option value="RUB">Ryssland Rubles</option>
            </select>
            <label for="resultat">Resultat</label>
            <input id="resultat" type="text">
        </form>
    </div>
    <script src="./valuta.js"></script>
</body>
</html>