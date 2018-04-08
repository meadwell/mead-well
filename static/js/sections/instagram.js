export default {
    init() {
        var token = '5942023762.1677ed0.d8fb598e5e0b4cac8bded36040e633fa',
            num_photos = 4,
            container = document.getElementById( 'section_instagram' ),
            scrElement = document.createElement( 'script' );

        window.createFeed = function(response) {
            console.log(container);
            var photo = 0;
            while(photo <= num_photos){
                // container.innerHTML += '<li><img class="image--instagram" src="' + response.data[photo].images.low_resolution.url + '"></li>';
                container.innerHTML += '<li class="image--instagram" style="background-image: url(' + response.data[photo].images.low_resolution.url + ')"></li>';
                // <li class="image--instagram" style="background-image: url({{ image.images.standard_resolution.url }});"></li>
                photo++;
            }
        };

        scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=createFeed' );
        document.body.appendChild( scrElement );
    }
};
