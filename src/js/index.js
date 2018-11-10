import '../scss/index.scss';
import anime from 'animejs';

let Xpost = 0;
let GoogleMapsLoader = require('google-maps');
const doll = document.querySelector('.Map-contentImage'),
    MapContentImageH2 = document.querySelector('.Map-contentH2'),
    ContactForm = document.querySelector('#ContactForm');

if (doll) {
    const interval = setInterval(frame, 1000);
    doll.addEventListener('click, touchstart', function () {
        clearInterval(interval);
        ContactForm.classList.remove('hide');
        MapContentImageH2.classList.remove('show');
        doll.querySelector('img').setAttribute('src', this.dataset.image)
    });
}

function frame() {
    let x = Math.floor(Math.random() * 100);
    let scaleDoll = (Xpost > x) ? -1 : 1;
    Xpost = x;
    let y = Math.floor(Math.random() * 75) + "vh";

    anime({
        targets: doll,
        translateX: x + "vw",
        translateY: y,
        scaleX: {
            value: scaleDoll,
            duration: 0
        },
        elasticity: 0
    });

}

const Header = document.querySelector('body'),
    ButtonMenu = document.querySelector('.mobile-menu'),
    MapEl = document.getElementById('map')
;

if (ButtonMenu) {
    ButtonMenu.addEventListener('click', function () {
        Header.classList.toggle('open');
    })
}
if (MapEl) {
    GoogleMapsLoader.KEY = 'AIzaSyDZdUWy3NxDz_nB8cs3GjpGaWqKYdWlny4';

    GoogleMapsLoader.load(function (google) {
        new google.maps.Map(MapEl, {
            center: {lat: 4.6669512, lng: -74.0671569},
            zoom: 16,
            disableDefaultUI: true
        });

    });
}

const selectCategory = document.querySelector('#selectCategory');
if (selectCategory) {
    selectCategory.addEventListener('change', function () {
        if (this.value) {
            window.location.href = this.value;
        }
    })
}
const searchForm = document.querySelector('.Header-searchClose');
const searchButton = document.querySelector('.Header-searchButton');
searchButton.addEventListener('click', function () {
    document.querySelector('.Header-search').classList.add('open')
});
searchForm.addEventListener('click', function () {
    document.querySelector('.Header-search').classList.remove('open')
});


