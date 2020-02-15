<title>Mead Well | VISIT</title>

<?php include_once("templates/header.php");?>
<main>

    <section class="section--hero section--visit-us-header">
        <div class="hero">
            <div class="hero--content">

                <div class="wrapper">
                    <h2><br>Visit Us</h2>
                    <p>We offer tastings, tours, and more at our storehouse in Philadelphia. Come hang out and try something new!</p>
                    <a href="https://square.site/book/W83CDG2400C0S/philadelphia-mead-well-philadelphia-pa" class="button center-button">Book a Tour or Tasting</a>
                </div>
            </div>
            <div id="visit" class="hero--image">

                <img src="/img/building.png">
            </div>

        </div>
        <div class="hero">
            <div class="hero--content">

                <div class="wrapper">
                    <h3>Buy our Mead!</h3>
                    <p>Not in the area but still want some mead? Pick up a bottle (or three) at one of our conveniently located retailers!</p>
                    <ul>
                    <li>
                        <a href="https://www.bvbeerphilly.com" target="_blank">Bella Vita</a></li>
                        <li><a href="https://www.yelp.com/biz/the-foto-club-philadelphia" target="_blank">The Photo Club</a></li>
                        <li><a href="https://www.bottlebareast.com" target="_blank">Bottle Bar East</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <div id="map"></div>
    </section>
    <script>
        function initMap() {
            // Styles a map in night mode.
            var pmw = {
                lat: 40.0017,
                lng: -75.1098
            };
            var photoClub = {
                lat: 39.966100,
                lng: -75.134420
            };
            var bellaVista = {
                lat: 39.940490,
                lng: -75.160420
            };
            var bottleBar = {
                lat: 39.970470,
                lng: -75.134727
            };
            var satelite = {
                url: 'img/map-pin-push-color.png',
                scaledSize: new google.maps.Size(40, 40)
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                center: pmw,
                zoom: 12,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#EFEFEA"
                        }]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#EFEFEA"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#bdbdbd"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#dadada"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#c9c9c9"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    }

                ]
            });
            var marker = new google.maps.Marker({
                position: pmw,
                map: map,
                title: "Philadelphia Mead Well",
                icon: {
                    url: 'img/map-pin-rig-color-2.png',
                    scaledSize: new google.maps.Size(100, 100)
                }
            });
            var marker = new google.maps.Marker({
                position: photoClub,
                map: map,
                title: "The Photo Club",
                icon: satelite
            });
            var marker = new google.maps.Marker({
                position: bellaVista,
                map: map,
                title: "Bella Vista",
                icon: satelite
            });
            var marker = new google.maps.Marker({
                position: bottleBar,
                map: map,
                title: "Bottle Bar East",
                icon: satelite
            });


        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnHvcvGmsCLoQKMz4krsuS3Q2ieDg8vqE&callback=initMap" async defer></script>

</main>

<?php include_once("templates/footer.php");?>

<style>
    #visit img {
        max-width: 600px;
        justify-content: center;
    }

    .section--hero .hero .hero--image {
        flex-direction: row-reverse;
        justify-content: center;
    }

    .hero--content {
        flex-direction: column;
    }

    div.map {
        display: none;
    }

    #map {
        height: 500px;
    }

    .hero {
        justify-content: center;
    }
    ul {
        text-align: left;
    }
</style>
