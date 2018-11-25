document.addEventListener('scroll', function(e) {
    if (e.path[1].scrollY > 40) {
        document.querySelector('[data-header]').classList.add('white');
    } else {
        document.querySelector('[data-header]').classList.remove('white');
    }
});
