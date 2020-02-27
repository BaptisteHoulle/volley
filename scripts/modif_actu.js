/* Suppression d'image pour une actualité déjà existante */

var cross = document.querySelectorAll(".suppr_img i");

for (g = 0; g < cross.length; g++) {
    cross[g].addEventListener("click", function() {
        var id_img = this.parentElement.getAttribute("num");
        var path = this.parentElement.getAttribute("path");
        
        $.ajax({
            url: 'includes/controleur.php?action=delete_img',
            type: 'GET',
            data: "id_img=" + id_img + "&path=" + path
        });
    })
}

/* Ajout d'image(s) pour une actualité déjà existante */

/* Ajout des inputs de type file */

var ajout_img = document.querySelector(".ajout_img i");

function randomName() {
    var text = "";
    var charset = "abcdefghijklmnopqrstuvwxyz";

    for (var i = 0; i < 6; i++) {
        text += charset.charAt(Math.floor(Math.random() * charset.length));
    }
    return text;
}

ajout_img.addEventListener("click", function() {
    var p = document.createElement("p");
    var input = document.createElement('input');
    input.setAttribute("type", "file");
    input.setAttribute("name", randomName());
    p.appendChild(input);

    ajout_img.parentElement.insertAdjacentElement("afterend", p);
})

/* Validation */

var envoi_images = $('.envoi_images');

envoi_images.on("submit", function() {
    event.preventDefault();

    var allImgs = new FormData($(this)[0]);
    var id_post = $('input[name="identifiant_actu"]').val();
    allImgs.append("id_post", id_post);

    $.ajax({
        url: 'includes/controleur.php?action=images_actu_existante',
        type: 'POST',
        data: allImgs,
        cache: false,
        contentType: false,
        processData: false,
        success: function (renvoi) {
            envoi_images.append(renvoi);
        }
    });
})

/* Modification d'une actualité déjà existante */

var form_modif_actu = $('.modif_actu_form');

form_modif_actu.on("submit", function() {
    event.preventDefault();

    var texte = $("#editor").html();
    var titre = $("#titre_actu").val();
    var id_post = $('input[name="identifiant_actu"]').val();

    $.ajax({
        url: 'includes/controleur.php?action=modif_actu',
        type: 'POST',
        data: "titre=" + titre + "&texte=" + texte + "&identifiant_actu=" + id_post,
        success: function (renvoi) {
            form_modif_actu.append(renvoi);
        }
    });
})