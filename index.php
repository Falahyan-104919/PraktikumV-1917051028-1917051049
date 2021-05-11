<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <style>
        #mapid{
            height: 100%;
        }
    </style>
    <title>Praktikum V SIG</title>
</head>
<body>
    <div id = "mapid" ></div>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<script>
var mymap = L.map('mapid').setView([-5.364364,105.2429651], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: "mapbox/streets-v11",
tileSize: 512,
zoomOffset: -1,
accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

var marker = L.marker([-5.364278, 105.243015]).addTo(mymap);

var circle = L.circle([-5.362548, 105.239764], {
    color:'green',
    fillColor:'#a2f6d7',
    fillOpacity:0.5,
    radius: 50
}).addTo(mymap);

var polygon = L.polygon([
    [-5.367232, 105.243165],
    [-5.366313, 105.243906],
    [-5.36689, 105.244839],
    [-5.367873, 105.244067]
]).addTo(mymap);

marker.bindPopup("<b>Universitas Lampung</b>").openPopup();
circle.bindPopup("Wilayah Gedung Serba Guna");
polygon.bindPopup("Fakultas Matematika dan Ilmu Pengetahuan Alam")

var popup = L.popup();

function onMapClick(e){
    popup
        .setLatLng(e.latlng)
        .setContent("Koordinat : " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);
</script>
</html>