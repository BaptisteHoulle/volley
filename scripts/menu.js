var click = document.getElementById('navbarDropdown');
var liste = document.querySelector('.liste');
liste.classList.add('none');

click.addEventListener('click', function () {
    if (liste.classList.contains('none')) {
        liste.classList.remove('none');
        liste.classList.add('block');
    }
    else if (liste.classList.contains('block')) {
        liste.classList.remove('block');
        liste.classList.add('none');
    }
})

window.addEventListener("scroll", function() {
    var menu = document.querySelector(".navbar");
    var point = menu.getBoundingClientRect().top;

    if (this.scrollY > point) {
        menu.style.position = 'fixed';
    }
    else {
        menu.style.position = 'static';
    }
})