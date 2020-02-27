/* Ajout d'image pour une nouvelle actualité */

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
    input.setAttribute("id", "img_actu");
    input.setAttribute("type", "file");
    input.setAttribute("name", randomName());
    p.appendChild(input);
    ajout_img.parentElement.parentElement.insertAdjacentElement("afterend", p);
})

/* Nouvelle actualité */

var form_actu = $('.actu_form');

form_actu.on("submit", function() {
    event.preventDefault();

    var texte = $("#editor").html();
    var allDatas = new FormData($(this)[0]);
    allDatas.append("texte", texte);

    $.ajax({
        url: 'includes/controleur.php?action=ajout_actu',
        type: 'POST',
        data: allDatas,
        cache: false,
        contentType: false,
        processData: false,
        success: function (renvoi) {
            form_actu.append(renvoi);
        }
    });
})