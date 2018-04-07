export default {
    init() {
        document.querySelectorAll('[data-carousel]').forEach(carousel => {
            let carouselSlidesListItems = carousel.querySelectorAll('[data-carousel-slides] li');
            let carouselNavListItems = carousel.querySelectorAll('[data-carousel-nav] li');

            carouselNavListItems.forEach(carouselNavListItem => {
                carouselNavListItem.addEventListener('click', e => {
                    e.preventDefault();

                    let index = Array.prototype.slice.call(carouselNavListItems).indexOf(carouselNavListItem);

                    /* Nav */
                    carouselNavListItems.forEach(function(element) {
                        element.classList.remove('active');
                    });

                    carouselNavListItem.classList.add('active');

                    /* Slides */
                    carouselSlidesListItems.forEach(function(element) {
                        element.classList.remove('active');
                    });

                    carouselSlidesListItems.item(index).classList.add('active');
                });
            });
        });
    }
};
