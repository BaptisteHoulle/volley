$(document).ready(function() {
    var edits = document.querySelectorAll(".table span + i");

    for (i = 0; i < edits.length; i++) {
        edits[i].addEventListener("click", function() {
            this.previousElementSibling.setAttribute("contenteditable", "true");
        })
    }

    var validations = document.querySelectorAll(".table span + i + i");

    for (k = 0; k < validations.length; k++) {
        validations[k].addEventListener("click", function() {
            var cle = this.previousElementSibling.previousElementSibling.classList;  
            var valeur = this.previousElementSibling.previousElementSibling.textContent;   

            $.ajax({
                url: 'includes/controleur.php?action=modif_cotisations',
                type: 'GET',
                data: 'cle=' + cle + '&valeur=' + valeur
            });
        });
    }
})