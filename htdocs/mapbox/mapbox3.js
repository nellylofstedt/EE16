window.onload = start;

function start() {
    const eBox = document.querySelector('.coordinates');
    
    mapboxgl.accessToken =
    'pk.eyJ1IjoibmVsbHlsb2ZzdGVkdCIsImEiOiJjanBheTFzcHUyZGQyM2tweG9yeHI5Y21qIn0.QaDv8olZzwlTZxD1itq7Pg';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/nellylofstedt/cjpb2wfww09r52st61mji6orx', // stylesheet location
        center: [18.053135, 59.332848], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });
    
    map.on("click", addMarker);
    
    function addMarker(e) {
        let marker = new mapboxgl.Marker()
            .setLngLat(e.lngLat)
            .addTo(map);
        
        console.log(e.lngLat);

        eBox.innerHTML += e.lngLat.lng + "," + e.lngLat.lat + ",\n";
    }
}