var form = $(".contact_message");

form.on('submit', function(event) {
    event.preventDefault();

    var nom = $("input[name=\"contact_nom\"]");
    var adresse = $("input[name=\"contact_adresse\"]");
    var email = $("input[name=\"contact_email\"]");
    var tel = $("input[name=\"contact_tel\"]");
    var message = $("textarea");
    
    if (!nom.val() || !adresse.val() || !email.val() || !tel.val() || !message.val()) {
        var signalement = document.createElement("p");
        signalement.textContent = "Un ou plusieurs champs n'ont pas été renseignés.";
        form.append(signalement);
    }
    else {
        $.ajax({
            type: 'POST',
            url: 'include/controleur.php?action=contact',
            data: form.serialize(),
            success: function (data) {
                var succes = document.createElement("p");
                succes.textContent = "Votre message a bien été envoyé !";
                form.append(succes);
            }
        });
    }
});