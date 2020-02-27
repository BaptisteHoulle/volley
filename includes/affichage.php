<?php

/* Cotisations */

function cotisations($tableau) {
    echo '<div class="table">';

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<table class="blueTable"><thead><tr><th contenteditable="false">Catégories <span class="annee">'.$tableau['annee'].'</span> <i class="far fa-edit"></i><i class="fas fa-check"></i></th></tr></thead>';
    }
    else {
        echo '<table class="blueTable"><thead><tr><th>Catégories '.$tableau['annee'].'</th></tr></thead>';
    }
    echo '<tbody>';
    echo '<tr><td>Dirigeant non joueur</td></tr>';
    echo '<tr><td>Seniors 1999 et avant</td></tr>';
    echo '<tr><td>M20 2000/2002</td></tr>';
    echo '<tr><td>M17 2003/2004</td></tr>';
    echo '<tr><td>M15 2005/2006</td></tr>';
    echo '<tr><td>M13 2007/2008</td></tr>';
    echo '<tr><td>M11 2009/2010</td></tr>';
    echo '<tr><td>M9 2011/2012</td></tr>';
    echo '<tr><td>École de Volley & M7 2013 et après</td></tr>';
    echo '<tr><td>Loisir</td></tr>';
    echo '<tr><td>Soft-Volley & Volley pour tous ou occasionnel</td></tr>';
    echo '<tr><td>Caution maillot sauf loisir et école de volley</td></tr>';
    echo '<tr><td>Mutations</td></tr>';
    echo '<thead><tr><th>Réductions</th></tr></thead>';
    echo '<tr><td>Famille ou étudiants ou inscrits avant le 15 juillet</td></tr>';
    echo '<tr><td>Retraité</td></tr>';
    echo '</tbody>';
    echo '</table>';

    $tableau['prix1'] = str_replace('.', ',', $tableau['prix1']);
    $tableau['prix2'] = str_replace('.', ',', $tableau['prix2']);
    $tableau['prix3'] = str_replace('.', ',', $tableau['prix3']);
    $tableau['prix4'] = str_replace('.', ',', $tableau['prix4']);
    $tableau['prix5'] = str_replace('.', ',', $tableau['prix5']);
    $tableau['prix6'] = str_replace('.', ',', $tableau['prix6']);
    $tableau['prix7'] = str_replace('.', ',', $tableau['prix7']);
    $tableau['prix8'] = str_replace('.', ',', $tableau['prix8']);
    $tableau['prix9'] = str_replace('.', ',', $tableau['prix9']);
    $tableau['prix10'] = str_replace('.', ',', $tableau['prix10']);
    $tableau['prix11'] = str_replace('.', ',', $tableau['prix11']);
    $tableau['prix12'] = str_replace('.', ',', $tableau['prix12']);
    $tableau['prix13'] = str_replace('.', ',', $tableau['prix13']);
    $tableau['prix14'] = str_replace('.', ',', $tableau['prix14']);
    $tableau['prix15'] = str_replace('.', ',', $tableau['prix15']);

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<table class="blueTable"><thead><tr><th>Prix</th</tr></thead>';
        echo '<tbody>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix1">'.$tableau['prix1'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix2">'.$tableau['prix2'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix3">'.$tableau['prix3'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix4">'.$tableau['prix4'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix5">'.$tableau['prix5'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix6">'.$tableau['prix6'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix7">'.$tableau['prix7'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix8">'.$tableau['prix8'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix9">'.$tableau['prix9'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix10">'.$tableau['prix10'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix11">'.$tableau['prix11'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix12">'.$tableau['prix12'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix13">'.$tableau['prix13'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<thead><tr><th>Prix</th></tr></thead>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix14">'.$tableau['prix14'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '<tr><td class="celbold" contenteditable="false"><span class="prix15">'.$tableau['prix15'].'</span> € <i class="far fa-edit"></i><i class="fas fa-check"></i></td></tr>';
        echo '</tbody>';
        echo '</table>';        
    }
    else {
        echo '<table class="blueTable"><thead><tr><th>Prix</th</tr></thead>';
        echo '<tbody>';
        echo '<tr><td class="celbold">'.$tableau['prix1'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix2'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix3'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix4'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix5'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix6'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix7'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix8'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix9'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix10'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix11'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix12'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix13'].' €</td></tr>';
        echo '<thead><tr><th>Prix</th></tr></thead>';
        echo '<tr><td class="celbold">'.$tableau['prix14'].' €</td></tr>';
        echo '<tr><td class="celbold">'.$tableau['prix15'].' €</td></tr>';
        echo '</tbody>';
        echo '</table>';
    }

    echo '</div>';
}

/* Présentation du club */

function conseil_administration($tableau) {
    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-user"></i></span>';
        echo '<div class="fonctions_collaborateurs_main">';
        echo '<div><p class="fonctions_collaborateurs_titre">PRÉSIDENT</p><p><span contenteditable="false" class="president">'.$tableau['president'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">VICE-PRÉSIDENT</p><p><span contenteditable="false" class="vice_president">'.$tableau['vice_president'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">TRÉSORIER</p><p><span contenteditable="false" class="tresorier">'.$tableau['tresorier'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">SECRÉTAIRE</p><p><span contenteditable="false" class="secretaire">'.$tableau['secretaire'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '</div>';
        echo '</div>';
    
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-user-friends"></i></span>';
        echo '<div class="fonctions_collaborateurs"><p><span class="fonctions_collaborateurs_titre">TRÉSORIERE ADJOINTE : </span><span contenteditable="false" class="tre_adj">'.$tableau['tre_adj'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p>';
        echo '<p><span class="fonctions_collaborateurs_titre">ASSESSEURS : </span><span contenteditable="false" class="assess1">'.$tableau['assess1'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess2">'.$tableau['assess2'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess3">'.$tableau['assess3'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess4">'.$tableau['assess4'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess5">'.$tableau['assess5'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess6">'.$tableau['assess6'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span>, <span contenteditable="false" class="assess7">'.$tableau['assess7'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '</div>';
    
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-users"></i></span>';
        echo '<div class="fonctions_collaborateurs"><p class="fonctions_collaborateurs_titre">RESPONSABLES DES COMITÉS</p>';
        echo '<div class="fonctions_collaborateurs_comites"><div>';
        echo '<p class="fonctions_sous_fonction">Le comité communication : </p>';
        echo '<p>Secteur développement : <span contenteditable="false" class="comite_dev">'.$tableau['comite_dev'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p>';
        echo '<p>Secteur Internet et webmaster : <span contenteditable="false" class="comite_web">'.$tableau['comite_web'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité jeunes : </span><span contenteditable="false" class="comite_jeunes">'.$tableau['comite_jeunes'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '<div><p><span class="fonctions_sous_fonction">Le comité formation : </span><span contenteditable="false" class="comite_formation">'.$tableau['comite_formation'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité développement sportif : </span><span contenteditable="false" class="comite_sport">'.$tableau['comite_sport'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité recrutements et licences : </span><span contenteditable="false" class="comite_licences">'.$tableau['comite_licences'].'</span><span class="edit"><i class="far fa-edit"></i></span><span class="valid"><i class="fas fa-check"></i></span></p></div>';
        echo '</div>';
        echo '</div>';
    }
    else {
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-user"></i></span>';
        echo '<div class="fonctions_collaborateurs_main">';
        echo '<div><p class="fonctions_collaborateurs_titre">PRÉSIDENT</p><p>'.$tableau['president'].'</p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">VICE-PRÉSIDENT</p><p>'.$tableau['vice_president'].'</p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">TRÉSORIER</p><p>'.$tableau['tresorier'].'</p></div>';
        echo '<div><p class="fonctions_collaborateurs_titre">SECRÉTAIRE</p><p>'.$tableau['secretaire'].'</p></div>';
        echo '</div>';
        echo '</div>';
    
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-user-friends"></i></span>';
        echo '<div class="fonctions_collaborateurs"><p><span class="fonctions_collaborateurs_titre">TRÉSORIERE ADJOINTE : </span>'.$tableau['tre_adj'].'</p>';
        echo '<p><span class="fonctions_collaborateurs_titre">ASSESSEURS : </span>'.$tableau['assess1'].', '.$tableau['assess2'].', '.$tableau['assess3'].', '.$tableau['assess4'].', '.$tableau['assess5'].', '.$tableau['assess6'].', '.$tableau['assess7'].'</p></div>';
        echo '</div>';
    
        echo '<div class="fonctions">';
        echo '<span class="user"><i class="fas fa-users"></i></span>';
        echo '<div class="fonctions_collaborateurs"><p class="fonctions_collaborateurs_titre">RESPONSABLES DES COMITÉS</p>';
        echo '<div class="fonctions_collaborateurs_comites">';
        echo '<div><p class="fonctions_sous_fonction">Le comité communication : </p>';
        echo '<p>Secteur développement : '.$tableau['comite_dev'].'</p>';
        echo '<p>Secteur Internet et webmaster : '.$tableau['comite_web'].'</p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité jeunes : </span>'.$tableau['comite_jeunes'].'</p></div>';
        echo '<div><p><span class="fonctions_sous_fonction">Le comité formation : </span>'.$tableau['comite_formation'].'</p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité développement sportif : </span>'.$tableau['comite_sport'].'</p>';
        echo '<p><span class="fonctions_sous_fonction">Le comité recrutements et licences : </span>'.$tableau['comite_licences'].'</p></div>';
        echo '</div>';
        echo '</div>';
    }
}

/* Partenaires */

function affichePartenaires($tableau) {
    echo '<section class="partenaires_entreprises">';

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        foreach ($tableau as $one) {
            if ($one['lien_entreprise'] != '') {
                echo '<a href="'.$one['lien_entreprise'].'" target="_blank"><img src="'.$one['lien_img'].'"></a><i class="far fa-trash-alt"></i>';
            }
            else {
                echo '<img src="'.$one['lien_img'].'"><i class="far fa-trash-alt"></i>';
            }
        }

        echo '<h2>Modifier un partenaire</h2>';
        echo '<form class="partenaires_entreprises_modif">';
        echo '<p><label for="nom_entreprise">Nom de l\'entreprise : </label> <select name="nom_entreprise" id="nom_entreprise" size="1">';
        foreach ($tableau as $one) {
            echo '<option value="'.$one['alias'].'">'.$one['alias'].'</option>';      
        }
        echo '</select></p>';
        echo '<p><label for="lien">URL du site : </label> <input type="text" name="lien" id="lien"></p>';
        echo '<input type="submit"><input type="reset">';
        echo '</form>';

        echo '<h2>Ajouter un partenaire</h2>';
        echo '<form action="includes/controleur.php?action=new_entreprise" method="post" class="partenaires_entreprises_ajout" enctype="multipart/form-data">';
        echo '<p><label for="nom_entreprise_ajout">Nom de l\'entreprise : </label> <input type="text" id="nom_entreprise_ajout" name="nom_entreprise_ajout">';
        echo '<p><label for="lien_ajout">URL du site : </label> <input type="text" name="lien_ajout" id="lien_ajout"></p>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="image">';
        echo '<input type="submit" name="valid_ajout_entreprise"><input type="reset">';
        echo '</form>';
    }
    else {
        foreach ($tableau as $one) {
            if ($one['lien_entreprise'] != '') {
                echo '<a href="'.$one['lien_entreprise'].'" target="_blank"><img src="'.$one['lien_img'].'"></a>';
            }
            else {
                echo '<img src="'.$one['lien_img'].'">';
            }
        }
    }

    echo '</section>';
}

/* Inscriptions */

function bulletins($tableau) {
    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<div class="inscription__boutons">';
        echo '<form action="includes/controleur.php?action=update_bulletins" method="post" enctype="multipart/form-data">';
        echo '<button><a href="'.$tableau['mineurs'].'" target="_blank">Bulletin pour mineur</a></button>';
        echo '<input type="hidden" name="file_mineurs" value="'.$tableau['mineurs'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="mineurs">';
        echo '<span class="inscription__boutons__ou">OU</span>';
        echo '<button><a href="'.$tableau['majeurs'].'" target="_blank">Bulletin pour majeur</a></button>';
        echo '<input type="hidden" name="file_majeurs" value="'.$tableau['majeurs'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="majeurs">';
        echo '</div>';
        echo '<button class="inscription__bouton"><a href="'.$tableau['infos_joueur'].'" target="_blank">Fiche individuelle</a></button>';
        echo '<input type="hidden" name="file_infos_joueurs" value="'.$tableau['infos_joueur'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<p class="inscription_infos_joueur"><input type="file" name="infos_joueur"></p>';
        echo '<p class="inscription_valider_bulletins"><input type="submit" value="Valider les modifications" name="valid_bulletins"></p></form>';
    }
    else {
        echo '<div class="inscription__boutons">';
        echo '<button><a href="'.$tableau['mineurs'].'" target="_blank">Bulletin pour mineur</a></button>';
        echo '<span class="inscription__boutons__ou">OU</span>';
        echo '<button><a href="'.$tableau['majeurs'].'" target="_blank">Bulletin pour majeur</a></button>';
        echo '</div>';
        echo '<button class="inscription__bouton"><a href="'.$tableau['infos_joueur'].'" target="_blank">Fiche individuelle</a></button>';
    }
}

function informations($tableau) {
    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<form action="includes/controleur.php?action=update_infos" method="post" enctype="multipart/form-data">';
        echo '<div class="informations__download">';
        echo '<div class="informations__download__partie">';
        echo '<p>Fiche d\'information</p>';
        echo '<a href="'.$tableau['ages'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '<input type="hidden" name="file_ages" value="'.$tableau['ages'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="ages">';
        echo '</div>';
        echo '<div class="informations__download__partie">';
        echo '<p>Charte du joueur</p>';
        echo '<a href="'.$tableau['charte_joueur'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '<input type="hidden" name="file_charte" value="'.$tableau['charte_joueur'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="charte_joueur">';
        echo '</div>';
        echo '</div>';
        echo '<div class="informations__download">';
        echo '<div class="informations__download__partie">';
        echo '<p>Gymnases du Bas-Rhin</p>';
        echo '<a href="'.$tableau['salles_bas_rhin'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '<input type="hidden" name="file_salles" value="'.$tableau['salles_bas_rhin'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="salles">';
        echo '</div>';
        echo '<div class="informations__download__partie">';
        echo '<p>Salle du VBC Haguenau</p>';
        echo '<a href="'.$tableau['salle_vbc_haguenau'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '<input type="hidden" name="file_salle" value="'.$tableau['salle_vbc_haguenau'].'"/>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>';
        echo '<input type="file" name="salle_vbc">';
        echo '</div>';
        echo '</div><p class="inscription_valider_infos"><input type="submit" value="Valider les modifications" name="valid_infos"></p></form>';
    }
    else {
        echo '<div class="informations__download">';
        echo '<div class="informations__download__partie">';
        echo '<p>Fiche d\'information</p>';
        echo '<a href="'.$tableau['ages'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '</div>';
        echo '<div class="informations__download__partie">';
        echo '<p>Charte du joueur</p>';
        echo '<a href="'.$tableau['charte_joueur'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="informations__download">';
        echo '<div class="informations__download__partie">';
        echo '<p>Gymnases du Bas-Rhin</p>';
        echo '<a href="'.$tableau['salles_bas_rhin'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '</div>';
        echo '<div class="informations__download__partie">';
        echo '<p>Salle du VBC Haguenau</p>';
        echo '<a href="'.$tableau['salle_vbc_haguenau'].'" target="_blank"><img src="img/inscriptions/download.png"></a>';
        echo '</div>';
        echo '</div>';
    }
}

/* Actualités */

function actuForm() {
    echo '<div class="actus_wysiwyg"><div class="container">
            <h2 class="container_titre">Ajouter une actualité</h2>

            <form enctype="multipart/form-data" class="actu_form">
                <label for="titre_actu">Titre</label>
                <p><input type="text" name="titre" id="titre_actu"></p>

                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Gras (Ctrl + B)"><i class="fas fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italique (Ctrl + I)"><i class="fas fa-italic"></i></a>
                        <a class="btn" data-edit="underline" title="Soulignement (Ctrl + U)"><i
                                class="fas fa-underline"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Liste à puces"><i class="fas fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Liste numérotée"><i class="fas fa-list-ol"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Aligner à gauche (Ctrl + L)"><i
                                class="fas fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Centrer (Ctrl + E)"><i
                                class="fas fa-align-center"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Lien"><i class="fas fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                            <button class="btn" type="button">Ajouter</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Rompre le lien"><i class="fas fa-unlink"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Retour arrière (Ctrl + Z)"><i class="fas fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Retour avant (Ctrl + Y)"><i class="fas fa-redo"></i></a>
                    </div>
                </div>

                <div id="editor"></div>

                <label for="img_actu">Image(s) <span class="ajout_img"><i class="fas fa-plus"></i></span></label>

                <p class="envoi_actu"><input type="submit" value="Valider"><input type="reset" value="Effacer"></p>
            </form>
         </div></div>';
}

function modifActuForm($actu) {
    echo '<div class="actus_wysiwyg"><div class="container">
            <h2 class="container_titre">Modifier cette actualité</h2>

            <form class="modif_actu_form">
                <label for="titre_actu">Titre</label>
                <p><input type="text" value="'.$actu['titre'].'" id="titre_actu" name="titre"></p>

                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Gras (Ctrl + B)"><i class="fas fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italique (Ctrl + I)"><i class="fas fa-italic"></i></a>
                        <a class="btn" data-edit="underline" title="Soulignement (Ctrl + U)"><i
                                class="fas fa-underline"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Liste à puces"><i class="fas fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Liste numérotée"><i class="fas fa-list-ol"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Aligner à gauche (Ctrl + L)"><i
                                class="fas fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Centrer (Ctrl + E)"><i
                                class="fas fa-align-center"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Lien"><i class="fas fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                            <button class="btn" type="button">Ajouter</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Rompre le lien"><i class="fas fa-unlink"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Retour arrière (Ctrl + Z)"><i class="fas fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Retour avant (Ctrl + Y)"><i class="fas fa-redo"></i></a>
                    </div>
                </div>

                <div id="editor">'.$actu['texte'].'</div>';

                echo '<p class="envoi_actu"><input type="submit" value="Valider"><input type="reset" value="Effacer"></p>';
                echo '<input type="hidden" value="'.$actu['id_post'].'" name="identifiant_actu">';
            echo '</form>';
         echo '</div></div>';
}

function affichePost($actu, $liste_images) {
    echo '<div class="actus_post">';
    echo "<h2>".$actu['titre']."</h2>";
    echo $actu['texte']; 

    $compteur = 0;
    foreach ($liste_images as $img) {
        if ($img['id_post'] == $actu['id_post']) {
            $compteur++;
        }
    }
    if ($compteur != 0) {
        echo '<div class="actus_post_images">';
        foreach ($liste_images as $img) {
            if ($img['id_post'] == $actu['id_post']) {
                echo '<img src="'.$img['lien_source'].'">';
            }
        }
        echo '</div>';
    }

    echo '</div>';
}

function afficheEquipe($equipe, $contacts, $joueurs) {
    echo '<div class="equipe">';
    echo '<h2>'.$equipe['saison'].'</h2>';
    echo '<p class="equipe_caracteristique">Niveau</p>';
    echo '<p>'.$equipe['niveau'].'</p>';
    echo '<p class="equipe_caracteristique">Entraînements</p>';
    echo '<p>'.$equipe['lieu'].'<br>'.$equipe['horaires'].'<p>'.$equipe['terrain'].'</p>';
    echo '<p class="equipe_caracteristique">Contact(s)</p>';
    foreach ($contacts as $contact) {
        if ($contact['id_eq'] == $equipe['id']) {
            echo '<p>'.$contact['infos'].'</p>';
        }
    }
    echo '<p class="equipe_caracteristique">Composition de l\'équipe</p>';
    foreach ($joueurs as $joueur) {
        if ($joueur['id_eq'] == $equipe['id']) {
            echo '<p>'.$joueur['infos_joueur'].'</p>';
        }
    }
    echo '</div>';
}