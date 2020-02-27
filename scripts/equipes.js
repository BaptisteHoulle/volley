
filterSelection("all") // execute fonction voir toute les catégories
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    // enlève la classe non séléctionner
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove('show')
        if (x[i].className.indexOf(c) > -1) {
            x[i].classList.add('show')
        };
    }
}

// ajoute une classe au boutton de la catégorie sélectionné
var btnContainer = document.getElementById("myBtnContainer");

btnContainer.addEventListener('click', function (event) {
    removeAllClass()

    if (event.target.tagName === 'BUTTON') {
        // Add the class on the element
        event.target.classList.add('active')
    }
})

function removeAllClass () {
    // Clear all active classes
    var active = document.getElementsByClassName('butn');
    for (btn of active) {
        btn.classList.remove('active')
    }
}