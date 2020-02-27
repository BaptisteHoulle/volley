var select = document.querySelector(".suppr_actu");
var suppr_button = document.querySelector(".suppr_button");

suppr_button.addEventListener("click", function() {
    var id_post = select.value;

    $.ajax({
        url: 'includes/controleur.php?action=delete_actu',
        type: 'GET',
        data: "num_actu=" + id_post,
        success: function() {
            var message = document.createElement("p");
            message.textContent = "Suppression effectuée avec succès.";
            suppr_button.insertAdjacentElement("afterend", message);
        }
    });
})