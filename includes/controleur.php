<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <?php

    include("connexion.php");
    include("sql.php");

    $pdo = connexion();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        switch ($action) {
        case 'connect' :
            if (isset($_POST['connexion'])) {
                $email = $_POST['email'];
                $mdp = $_POST['mdp'];
            
                if (!empty($email) && !empty($mdp)) {
                    $tableau = selectIds($pdo);
            
                    htmlentities(strip_tags($email));
                    htmlentities(strip_tags($mdp));
            
                    if ($tableau['email'] == sha1($email)) {
                        if (password_verify($mdp, $tableau['password']) == true) {
                            $_SESSION['connected'] = true;
                            header('Location: ../index.php');
                            break;
                        }
                        else {
                            echo '<p>Mot de passe invalide.</p>';
                            echo '<p><a href="../login.html">Retour</a></p>';
                            break;
                            exit;
                        }
                    }
                    else {
                        echo '<p>Adresse mail invalide.</p>';
                        echo '<p><a href="../login.html">Retour</a></p>';
                        break;
                        exit;
                    }
                }
                else {
                    echo '<p>Une ou plusieurs valeurs non renseigné(e)(s).</p>';
                    echo '<p><a href="../login.html">Retour</a></p>';
                    break;
                    exit;
                }
            }
        case 'logout' :
            unset($_SESSION['connected']);
            session_destroy();
            header('Location: ../index.php');
            break;  
        case 'want_to_update_profil' :
            if (isset($_POST['change_ids'])) {
                $email_modif = $_POST['email_modif'];
                $mdp_modif = $_POST['mdp_modif'];

                if (!empty($email_modif) && !empty($mdp_modif)) {
                    htmlentities(strip_tags($email_modif));
                    htmlentities(strip_tags($mdp_modif));
    
                    $sujet = 'Demande de modification des identifiants';
                    $message = 'Une modification de votre mot de passe ou de votre mail a été initiée. Si elle ne provient pas de vous, ignorez-là. Sinon, suivez le lien suivant afin de la confirmer : '.'http://localhost/VBC Haguenau/includes/controleur.php?action=token&email='.$email_modif.'&mdp='.$mdp_modif.'';
                    /* À compléter plus tard
                    mail('', $sujet, $message); */
                }
                else {
                    echo '<p>Aucune valeur renseignée.</p>';
                    echo '<p><a href="../login.html">Retour</a></p>';
                    exit;
                }
            }
            break;
        // À voir plus tard
    // case 'token' :
    //     $email = $_GET['email'];
    //     $mdp = $_GET['mdp'];

    //     $email = sha1(htmlentities(strip_tags($email)));
    //     updateEmail($pdo, $email_modif);
    //     header('Location: ../index.php');
    
    //     $mdp = password_hash(htmlentities(strip_tags($mdp)), PASSWORD_BCRYPT);
    //     updateMdp($pdo, $mdp_modif);
    //     header('Location: ../index.php');
    //     break;
        case 'modif_cotisations' :
            if (isset($_GET['cle']) && isset($_GET['valeur'])) {
                $cle = $_GET['cle'];
                $valeur = $_GET['valeur'];

                htmlentities(strip_tags($cle));
                htmlentities(strip_tags($valeur));

                if ($cle == 'annee') {
                    modif_annee($pdo, $valeur); 
                }
                elseif ($cle == 'prix1') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix1($pdo, $valeur); 
                }
                elseif ($cle == 'prix2') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix2($pdo, $valeur); 
                }
                elseif ($cle == 'prix3') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix3($pdo, $valeur); 
                }
                elseif ($cle == 'prix4') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix4($pdo, $valeur); 
                }
                elseif ($cle == 'prix5') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix5($pdo, $valeur); 
                }
                elseif ($cle == 'prix6') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix6($pdo, $valeur); 
                }
                elseif ($cle == 'prix7') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix7($pdo, $valeur); 
                }
                elseif ($cle == 'prix8') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix8($pdo, $valeur); 
                }
                elseif ($cle == 'prix9') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix9($pdo, $valeur); 
                }
                elseif ($cle == 'prix10') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix10($pdo, $valeur); 
                }
                elseif ($cle == 'prix11') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix11($pdo, $valeur); 
                }
                elseif ($cle == 'prix12') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix12($pdo, $valeur); 
                }
                elseif ($cle == 'prix13') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix13($pdo, $valeur); 
                }
                elseif ($cle == 'prix14') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix14($pdo, $valeur); 
                }
                elseif ($cle == 'prix15') {
                    $valeur = str_replace(',', '.', $valeur);
                    modif_prix15($pdo, $valeur); 
                }
            }
            break;
        case 'modif_ca' :
            if (isset($_GET['cle']) && isset($_GET['valeur'])) {
                $cle = $_GET['cle'];
                $valeur = $_GET['valeur'];

                htmlentities(strip_tags($cle));
                htmlentities(strip_tags($valeur));

                if ($cle == 'president') {
                    modif_president($pdo, $valeur); 
                }
                elseif ($cle == 'vice_president') {
                    modif_vice_president($pdo, $valeur); 
                }
                elseif ($cle == 'tresorier') {
                    modif_tresorier($pdo, $valeur); 
                }
                elseif ($cle == 'secretaire') {
                    modif_secretaire($pdo, $valeur); 
                }
                elseif ($cle == 'tre_adj') {
                    modif_tre_adj($pdo, $valeur); 
                }
                elseif ($cle == 'assess1') {
                    modif_assess1($pdo, $valeur); 
                }
                elseif ($cle == 'assess2') {
                    modif_assess2($pdo, $valeur); 
                }
                elseif ($cle == 'assess3') {
                    modif_assess3($pdo, $valeur); 
                }
                elseif ($cle == 'assess4') {
                    modif_assess4($pdo, $valeur); 
                }
                elseif ($cle == 'assess5') {
                    modif_assess5($pdo, $valeur); 
                }
                elseif ($cle == 'assess6') {
                    modif_assess6($pdo, $valeur); 
                }
                elseif ($cle == 'assess7') {
                    modif_assess7($pdo, $valeur); 
                }
                elseif ($cle == 'comite_dev') {
                    modif_comite_dev($pdo, $valeur); 
                }
                elseif ($cle == 'comite_web') {
                    modif_comite_web($pdo, $valeur); 
                }
                elseif ($cle == 'comite_jeunes') {
                    modif_comite_jeunes($pdo, $valeur); 
                }
                elseif ($cle == 'comite_formation') {
                    modif_comite_formation($pdo, $valeur); 
                }
                elseif ($cle == 'comite_sport') {
                    modif_comite_sport($pdo, $valeur); 
                }
                elseif ($cle == 'comite_licences') {
                    modif_comite_licences($pdo, $valeur); 
                }
            }
            break;
        case 'modif_entreprise' :
            $nom = $_POST['nom_entreprise'];
            $url = $_POST['lien'];
        
            htmlentities(strip_tags($nom));
            htmlentities(strip_tags($url));

            insertURL($pdo, $nom, $url);
            break;
        case 'delete_entreprise' :
            if (isset($_GET['src'])) {
                $src = $_GET['src'];

                delete_entreprise($pdo, $src);
                unlink('../'.$src);
            }
            break;
        case 'new_entreprise' :
            if (isset($_POST['valid_ajout_entreprise'])) {
                $nom = $_POST['nom_entreprise_ajout'];
                $url = $_POST['lien_ajout'];
    
                if (empty($nom)) {
                    echo '<p>Nom de l\'entreprise vide.</p>';
                    echo '<p><a href="../partenaires.php">Retour</a></p>';
                    exit;
                }
                elseif (empty($_FILES['image']['name'])) {
                    echo '<p>Aucune image renseignée.</p>';
                    echo '<p><a href="../partenaires.php">Retour</a></p>';
                    exit;
                }
                else {
                    $name = $_FILES['image']['name'];

                    htmlentities(strip_tags($nom));
                    htmlentities(strip_tags($url));
        
                    $size = $_FILES['image']['size'];
                    $temp = $_FILES['image']['tmp_name'];
            
                    $image_ext = pathinfo($name, PATHINFO_EXTENSION);
                    $check = getimagesize($temp);
        
                    $dossier = "img/partenaires/";
                    $target_file = $dossier.$name;
                    $dossier2 = "../img/partenaires/";
                    $target_file2 = $dossier2.$name;
        
                    if ($size>2000000) {
                        echo '<p>Ce fichier a une taille trop importante.</p>';
                        echo '<p><a href="../partenaires.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($image_ext != "jpg" && $image_ext != "png" && $image_ext != "jpeg" && $image_ext != "JPG" && $image_ext != "PNG" && $image_ext != "JPEG") {
                        echo '<p>Seuls les fichiers jpg, jpeg ou png sont autorisés.</p>';
                        echo '<p><a href="../partenaires.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($check == FALSE) {
                        echo '<p>Ce fichier n\'est pas une image.</p>';
                        echo '<p><a href="../partenaires.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($target_file2)) {
                        echo '<p>Ce fichier existe déjà.</p>';
                        echo '<p><a href="../partenaires.php">Retour</a></p>';
                        exit;
                    }
            
                    if (move_uploaded_file($temp, $target_file2)) { 
                        insert_partenaire($pdo, $nom, $url, $target_file); 
                        header('Location: ../partenaires.php');                
                    } 
                    else {
                        echo "<p>Erreur de téléchargement.</p>";
                        echo '<p><a href="../partenaires.php">Retour</a></p>';
                        exit;
                    }
                }
            }
            break;
        case 'update_bulletins' :
            if (isset($_POST['valid_bulletins'])) {
                $dossier = "files/";
                $dossier2 = "../files/";

                if (!empty($_FILES['mineurs']['name'])) {
                    $name = $_FILES['mineurs']['name'];
                    $size = $_FILES['mineurs']['size'];
                    $temp = $_FILES['mineurs']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_mineurs'];

                    if ($size>2000000) {
                        echo '<p>Le bulletin des mineurs a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier pour les mineurs existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_bulletins_mineurs($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
                if (!empty($_FILES['majeurs']['name'])) {
                    $name = $_FILES['majeurs']['name'];
                    $size = $_FILES['majeurs']['size'];
                    $temp = $_FILES['majeurs']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_majeurs'];

                    if ($size>2000000) {
                        echo '<p>Le bulletin des majeurs a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier des majeurs existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_bulletins_majeurs($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
                if (!empty($_FILES['infos_joueur']['name'])) {
                    $name = $_FILES['infos_joueur']['name'];
                    $size = $_FILES['infos_joueur']['size'];
                    $temp = $_FILES['infos_joueur']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_infos_joueurs'];

                    if ($size>2000000) {
                        echo '<p>Le fichier informations a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier informations existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_bulletins_infos_joueur($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }                  
                }
            }
            break;
        case 'update_infos' :
            if (isset($_POST['valid_infos'])) {
                $dossier = "files/";
                $dossier2 = "../files/";

                if (!empty($_FILES['ages']['name'])) {
                    $name = $_FILES['ages']['name'];
                    $size = $_FILES['ages']['size'];
                    $temp = $_FILES['ages']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_ages'];

                    if ($size>2000000) {
                        echo '<p>Le fichier sur les catégories d\'âges a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier sur les catégories d\'âges existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_infos_ages($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
                if (!empty($_FILES['charte_joueur']['name'])) {
                    $name = $_FILES['charte_joueur']['name'];
                    $size = $_FILES['charte_joueur']['size'];
                    $temp = $_FILES['charte_joueur']['tmp_name'];

                    var_dump($_FILES);

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_charte'];

                    if ($size>2000000) {
                        echo '<p>La charte du joueur a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier de la charte du joueur existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_infos_charte($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
                if (!empty($_FILES['salles']['name'])) {
                    $name = $_FILES['salles']['name'];
                    $size = $_FILES['salles']['size'];
                    $temp = $_FILES['salles']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_salles'];

                    if ($size>2000000) {
                        echo '<p>Le fichier sur les salles du Bas-Rhin a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier sur les salles du Bas-Rhin existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_infos_salles($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
                if (!empty($_FILES['salle_vbc']['name'])) {
                    $name = $_FILES['salle_vbc']['name'];
                    $size = $_FILES['salle_vbc']['size'];
                    $temp = $_FILES['salle_vbc']['tmp_name'];

                    $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $fichier_cible = $dossier2.$name;

                    $origin = $_POST['file_salle'];

                    if ($size>2000000) {
                        echo '<p>Le fichier sur la salle du club a une taille trop importante.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif ($extension != "pdf") {
                        echo '<p>Seuls les fichiers pdf sont autorisés.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                    elseif (file_exists($fichier_cible)) {
                        echo '<p>Le fichier sur la salle du club existe déjà.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        unlink("../".$origin);
                        update_infos_salle($pdo, $dossier.$name);
                        header('Location: ../inscriptions.php');
                    }
                    else {
                        echo '<p>Erreur de téléchargement.</p>';
                        echo '<p><a href="../inscriptions.php">Retour</a></p>';
                        exit;
                    }
                }
            }
            break;
        case 'ajout_actu' :
            $titre = $_POST['titre'];
            $texte = $_POST['texte'];
            
            if (empty($titre) || empty($texte) || ($texte == '<br>')) {
                echo json_encode("Titre ou texte vide.");
                exit;
            }
            else {
                htmlentities(strip_tags($titre));

                if (empty($_FILES)) {
                    insertPost($pdo, $titre, $texte);
                    echo json_encode("Insertion réussie.", JSON_UNESCAPED_UNICODE);
                }
                else {
                    $number_img = count($_FILES);
                    $compteur = 0;

                    foreach ($_FILES as $img) {
                        $name = $img['name'];
                        $size = $img['size'];
                        $temp = $img['tmp_name'];

                        $check = getimagesize($temp);

                        $dossier = "../img/actualites/";

                        $extension = pathinfo($name, PATHINFO_EXTENSION);
                        $fichier_cible = $dossier.$name;

                        if ($size>2000000) {
                            echo json_encode("Le fichier ".$name." a une taille trop importante.");
                            exit;
                        }
                        elseif (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "JPG") && ($extension != "JPEG") && ($extension != "PNG")) {
                            echo json_encode("Seuls les fichiers jpg, jpeg ou png sont autorisés.", JSON_UNESCAPED_UNICODE);
                            exit;
                        }
                        elseif ($check == FALSE) {
                            echo json_encode("Ce fichier ".$name." n\'est pas une image.", JSON_UNESCAPED_UNICODE);
                            exit;
                        }
                        elseif (file_exists($fichier_cible)) {
                            echo json_encode("Le fichier ".$name." existe déjà.", JSON_UNESCAPED_UNICODE);
                            exit;
                        }
                        else {
                            $compteur++;
                        }
                    }

                    if ($compteur == $number_img) {
                        $last_id = insertPost($pdo, $titre, $texte);
                        echo json_encode("Insertion réussie.", JSON_UNESCAPED_UNICODE);

                        foreach ($_FILES as $img) {
                            $name = $img['name'];
                            $temp = $img['tmp_name'];

                            $dossier = "../img/actualites/";

                            $fichier_cible = $dossier.$name;

                            if (move_uploaded_file($temp, $fichier_cible)) {
                                insertImg($pdo, "img/actualites/".$name, $last_id);
                            }
                            else {
                                echo json_encode("Erreur de téléchargement pour l'image ".$name.".", JSON_UNESCAPED_UNICODE);
                                exit;
                            }                          
                        }
                    }
                }
            }
            break;
        case 'delete_actu' :
            $id_actu = $_GET['num_actu'];
            $tableau = selectImgsToDelete($pdo, $id_actu);

            if (!empty($tableau)) {
                foreach ($tableau as $img) {
                    unlink("../".$img['lien_source']);
                }
            }

            deletePost($pdo, $id_actu);
            break;
        case 'modif_actu' :
            $id_actu = $_POST['identifiant_actu'];
            $titre = $_POST['titre'];
            $texte = $_POST['texte'];
            
            if (empty($titre) || empty($texte) || ($texte == '<br>')) {
                echo json_encode("Titre ou texte vide.");
                exit;
            }
            else {
                htmlentities(strip_tags($titre));
                updatePost($pdo, $id_actu, $titre, $texte);
                echo json_encode("Modification(s) du titre et/ou du texte réussie(s).", JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }
            break;
        case 'delete_img' :
            $id_img = $_GET['id_img'];
            $path = $_GET['path'];

            deleteImg($pdo, $id_img);
            unlink("../".$path);
            break;
        case 'images_actu_existante' :      
            $id_post = $_POST['id_post'];

            $number_img = count($_FILES);
            $compteur = 0;

            foreach ($_FILES as $img) {
                $name = $img['name'];
                $size = $img['size'];
                $temp = $img['tmp_name'];

                $check = getimagesize($temp);

                $dossier = "../img/actualites/";

                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $fichier_cible = $dossier.$name;

                if ($size>2000000) {
                    echo json_encode("Le fichier ".$name." a une taille trop importante.");
                    exit;
                }
                elseif (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "JPG") && ($extension != "JPEG") && ($extension != "PNG")) {
                    echo json_encode("Seuls les fichiers jpg, jpeg ou png sont autorisés.", JSON_UNESCAPED_UNICODE);
                    exit;
                }
                elseif ($check == FALSE) {
                    echo json_encode("Ce fichier ".$name." n\'est pas une image.", JSON_UNESCAPED_UNICODE);
                    exit;
                }
                elseif (file_exists($fichier_cible)) {
                    echo json_encode("Le fichier ".$name." existe déjà.", JSON_UNESCAPED_UNICODE);
                    exit;
                }
                else {
                    $compteur++;
                }
            }

            if ($compteur == $number_img) {
                echo json_encode("Insertion réussie.", JSON_UNESCAPED_UNICODE);

                foreach ($_FILES as $img) {
                    $name = $img['name'];
                    $temp = $img['tmp_name'];

                    $dossier = "../img/actualites/";

                    $fichier_cible = $dossier.$name;

                    if (move_uploaded_file($temp, $fichier_cible)) {
                        insertImg($pdo, "img/actualites/".$name, $id_post);
                    }
                    else {
                        echo json_encode("Erreur de téléchargement pour l'image ".$name.".", JSON_UNESCAPED_UNICODE);
                        exit;
                    }                          
                }
            }
            break;
        // A voir plus tard
        // case 'contact' : 
        //     $nom = $_POST['contact_nom'];
        //     $adresse = $_POST['contact_adresse'];
        //     $email = $_POST['contact_email'];
        //     $tel = $_POST['contact_tel'];
        //     $message = $_POST['contact_message'];

        //     if (!empty($nom) && !empty($adresse) && !empty($email) && !empty($tel) && !empty($message)) {
        //         htmlentities($nom);
        //         strip_tags($nom);
        //         htmlentities($adresse);
        //         strip_tags($adresse);
        //         htmlentities($email);
        //         strip_tags($email);
        //         htmlentities($tel);
        //         strip_tags($tel);
        //         htmlentities($message);
        //         strip_tags($message);

        //         $headers = "MIME-Version: 1.0 \n";
        //         $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
        //         $headers .= "From: $nom ($email) \n";
        //         $headers .= "X-Priority: 1 \n";
        //         $headers .= "X-MSMail-Priority: High \n";

        //         mail('', 'Contact', $message, $headers);  
        //     }
        //     break;
        }
    }
    else {
        echo 'Valeur vide';
        echo '<p><a href="../index.php">Retour</a></p>';
        exit;
    }

    $pdo = null;

    ?>
</body>
</html>