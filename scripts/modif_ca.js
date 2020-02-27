$(document).ready(function() {
    var edits_ca = document.querySelectorAll(".edit i");

    for (i = 0; i < edits_ca.length; i++) {
        edits_ca[i].addEventListener("click", function() {
            this.parentElement.previousElementSibling.setAttribute("contenteditable", "true");
        })
    }

    var valid_ca = document.querySelectorAll(".valid i");

    for (k = 0; k < valid_ca.length; k++) {
        valid_ca[k].addEventListener("click", function() {
            var cle = this.parentElement.previousElementSibling.previousElementSibling.classList;  
            var valeur = this.parentElement.previousElementSibling.previousElementSibling.textContent;  

            $.ajax({
                url: 'includes/controleur.php?action=modif_ca',
                type: 'GET',
                data: 'cle=' + cle + '&valeur=' + valeur
            });
        });
    }
})