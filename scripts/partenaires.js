/************ Suppression d'une entreprise ***************/

var suppressions = document.querySelectorAll(".partenaires_entreprises i");

for (y = 0; y < suppressions.length; y++) {
    suppressions[y].addEventListener("click", function() {
        var previous = this.previousElementSibling;

        if (previous.tagName === 'A') {
            var src = $(previous).children('img').attr('src');
            
            $.ajax({
                url: 'includes/controleur.php?action=delete_entreprise',
                type: 'GET',
                data: 'src=' + src
            });
        }
        else {
            var src = $(previous).attr('src');
            
            $.ajax({
                url: 'includes/controleur.php?action=delete_entreprise',
                type: 'GET',
                data: 'src=' + src
            });
        }
    })
}

/************ Modification de l'URL d'une entreprise ***************/

$(document).ready(function() {  
    var form = $('.partenaires_entreprises_modif');

    form.on("submit", function() {
        event.preventDefault();

        $.ajax({
            url: 'includes/controleur.php?action=modif_entreprise',
            type: 'POST',
            data: form.serialize()
        });

        var message = document.createElement("p");
        message.textContent = 'Modification effectuée avec succès.';
        this.insertAdjacentElement("afterend", message);
    })
})