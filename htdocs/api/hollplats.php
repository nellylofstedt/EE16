<?php
/*
* PHP version 7
* @category   Json
* @author     Nelly Löfstedt
* @license    PHP CC
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="post">
        <label>Ange latitud</label><input type="text" name="lat"><br>
        <label>Ange longitud</label><input type="text" name="lon"><br>
        <button>Sök</button>
    </form>

    <?php


if (isset($_POST['lon']) && isset($_POST['lat'])) {
    $lat = filter_input(INPUT_POST, 'lat', FILTER_SANITIZE_STRING);
    $lon = filter_input(INPUT_POST, 'lon', FILTER_SANITIZE_STRING);
    
    $api = "5a04359da47042b7837f88a5c61908c9";
    
    $radius = 500;
    
    $max = 99;
    
    $url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";
    
    $json = file_get_contents($url);

    $jsonData = json_decode($json);

    $stopLocation = $jsonData->LocationList->StopLocation;
    
    foreach ($stopLocation as $stop) {
    $name = $stop->name;
    $lat = $stop->lat;
    $lon = $stop->lon;
    echo "<p>$name: $lat, $lon</p>";

    }

} else {
    echo "<p>bu</p>";
}
    
    
    
    ?>
</body>

</html>