/********* Affichage du formulaire de modification des identifiants ************/

var modif = document.querySelector(".modif_ids");
modif_form = document.querySelector(".modif_ids + form");
modif_form.classList.add("none");

modif.addEventListener('click', function () {
    if (modif_form.classList.contains('none')) {
        modif_form.classList.remove('none');
        modif_form.classList.add('block');
    }
    else if (modif_form.classList.contains('block')) {
        modif_form.classList.remove('block');
        modif_form.classList.add('none');
    }
})

/********* Affichage en clair, pour les 2 formulaires, du mot de passe ************/

var champ_mdp = document.querySelector('input[name="mdp"]');
var see = document.querySelector('input[name="mdp"] ~ i');

see.addEventListener("click", function() {
    if (champ_mdp.type == 'password') {
        champ_mdp.setAttribute("type", "text");
    }
    else {
        champ_mdp.setAttribute("type", "password");
    }       
})

var champ_mdp2 = document.querySelector('input[name="mdp_modif"]');
var see2 = document.querySelector('input[name="mdp_modif"] ~ i');

see2.addEventListener("click", function() {
    if (champ_mdp2.type == 'password') {
        champ_mdp2.setAttribute("type", "text");
    }
    else {
        champ_mdp2.setAttribute("type", "password");
    }       
})