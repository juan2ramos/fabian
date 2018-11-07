import '../scss/index.scss';
let GoogleMapsLoader = require('google-maps')



const Header = document.querySelector('body'),
    ButtonMenu = document.querySelector('.mobile-menu'),
    MapEl = document.getElementById('map')
;

if (ButtonMenu) {
    ButtonMenu.addEventListener('click', function () {
        Header.classList.toggle('open');
    })
}


GoogleMapsLoader.KEY = 'AIzaSyBSJ_DCjm88TKz9edSeh1KxTPuAh4JKsYU';
GoogleMapsLoader.onLoad(function(google) {
    console.log('I just loaded google maps api');
});
GoogleMapsLoader.load(function(google) {
    new google.maps.Map(MapEl, {
        center: {lat: 4.6669512, lng: -74.0671569},
        zoom: 16.48
    });
});
