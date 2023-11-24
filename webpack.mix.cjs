const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/leaflet.sprite.js', 'public/js')
   .js('resources/js/map.js', 'public/js')
   .js('resources/js/L.Control.Locate.min.js', 'public/js')
   .js('resources/js/geojsonautocomplete.min.js', 'public/js')
   .sass('resources/sass/geojsonautocomplete.min.scss', 'public/css')
   .sass('resources/sass/L.Control.Locate.min.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css')