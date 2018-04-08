import header from './interface/header';
import carousel from './sections/carousel';
import instagram from './sections/instagram';

document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    header.init();
    carousel.init();
    instagram.init();
});
