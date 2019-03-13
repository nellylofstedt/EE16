mapboxgl.accessToken =
            'pk.eyJ1IjoibmVsbHlsb2ZzdGVkdCIsImEiOiJjanBheTFzcHUyZGQyM2tweG9yeHI5Y21qIn0.QaDv8olZzwlTZxD1itq7Pg';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
            center: [18.066271, 59.332458], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });

        let marker = new mapboxgl.Marker()
        .setLngLat([18.066271, 59.332458])
        .addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        alert("Du har en gammal webbläsare. Kan inte hitta din position")
    }

    function showLocation(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        alert("Din position är: " + lat + ", " + lon);
    }
        