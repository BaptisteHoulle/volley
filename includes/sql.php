<?php

/* Équipes */

function selectEquipes($pdo) {
    $sql = 'SELECT * FROM equipes;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectContacts($pdo) {
    $sql = 'SELECT * FROM contacts;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectJoueurs($pdo) {
    $sql = 'SELECT * FROM compositions;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

/* Actualités */

function selectActus($pdo) {
    $sql = 'SELECT * FROM posts ORDER BY id_post DESC;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectImages($pdo) {
    $sql = 'SELECT * FROM images_posts;';
     
    $query = $pdo->prepare($sql);  

    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function insertPost($pdo, $titre, $texte) {
    $sql = 'INSERT INTO posts (titre, texte) VALUES (:titre, :texte);';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':titre',$titre, PDO::PARAM_STR);
    $query->bindValue(':texte',$texte, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }

    $cle = $pdo->lastInsertId();

    return $cle;
}

function insertImg($pdo, $img, $id_post) {
    $sql = 'INSERT INTO images_posts (lien_source, id_post) VALUES (:link, :id_post);';

    $query = $pdo->prepare($sql);   

    $query->bindValue(':link',$img, PDO::PARAM_STR);
    $query->bindValue(':id_post',$id_post, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function selectImgsToDelete($pdo, $id_actu) {
    $sql = 'SELECT lien_source FROM images_posts WHERE id_post = :id_actu;';
     
    $query = $pdo->prepare($sql);   

    $query->bindValue(':id_actu',$id_actu, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectPost($pdo, $id_post) {
    $sql = 'SELECT * FROM posts WHERE id_post = :id_post;';
     
    $query = $pdo->prepare($sql);   

    $query->bindValue(':id_post',$id_post, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetch(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectImgsFromPost($pdo, $id_post) {
    $sql = 'SELECT * FROM images_posts WHERE id_post = :id_post;';
     
    $query = $pdo->prepare($sql);   

    $query->bindValue(':id_post',$id_post, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function deletePost($pdo, $id_post) {
    $sql = 'DELETE FROM posts WHERE id_post = :id_post;';
    $sql2 = 'DELETE FROM images_posts WHERE post_ref = :id_post;';

    $query2 = $pdo->prepare($sql2);   
    
    $query2->bindValue(':id_post',$id_post, PDO::PARAM_INT);

    $query2->execute();
    
    if ($query2->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query2->errorInfo()[2].'</p>';
    }
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':id_post',$id_post, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function updatePost($pdo, $id_post, $titre, $texte) {
    $sql = 'UPDATE posts SET titre = :titre, texte = :texte WHERE id_post = :id_post;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':id_post',$id_post, PDO::PARAM_INT);
    $query->bindValue(':titre',$titre, PDO::PARAM_STR);
    $query->bindValue(':texte',$texte, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function deleteImg($pdo, $id_img) {
    $sql = 'DELETE FROM images_posts WHERE id_img = :id_img;';

    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':id_img',$id_img, PDO::PARAM_INT);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

/* Identifiants pour l'interface d'administration */

function selectIds($pdo) {
    $sql = 'SELECT * FROM admin;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetch(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

// À voir plus tard
// function updateEmail($pdo, $email) {
//     $sql = 'UPDATE admin SET email = :email;';
     
//     $query = $pdo->prepare($sql);   

//     $query->bindValue(':email',$email, PDO::PARAM_STR);

//     $query->execute();
 
//     if ($query->errorCode() != '00000') {        
//         echo "<p>Erreur dans la requête</p>"; 
//         echo '<p>'.$query->errorInfo()[2].'</p>';
//     }
// }

// function updateMdp($pdo, $mdp) {
//     $sql = 'UPDATE admin SET password = :mdp;';
     
//     $query = $pdo->prepare($sql);   

//     $query->bindValue(':mdp',$mdp, PDO::PARAM_STR);

//     $query->execute();
 
//     if ($query->errorCode() != '00000') {        
//         echo "<p>Erreur dans la requête</p>"; 
//         echo '<p>'.$query->errorInfo()[2].'</p>';
//     }
// }

/* Cotisations */

function selectCotisations($pdo) {
    $sql = 'SELECT * FROM cotisations;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetch(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function modif_annee($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET annee = :valeur;';
     
    $query = $pdo->prepare($sql);   

    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix1($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix1 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix2($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix2 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix3($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix3 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix4($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix4 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix5($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix5 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix6($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix6 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix7($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix7 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix8($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix8 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix9($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix9 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix10($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix10 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix11($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix11 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix12($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix12 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix13($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix13 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix14($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix14 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_prix15($pdo, $valeur) {
    $sql = 'UPDATE cotisations SET prix15 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

/* Présentation du club */

function selectCAMembers($pdo) {
    $sql = 'SELECT * FROM conseil_administration;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetch(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function selectPDFs($pdo) {
    $sql = 'SELECT * FROM inscriptions_infos;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetch(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function update_bulletins_mineurs($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET mineurs = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_bulletins_majeurs($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET majeurs = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_bulletins_infos_joueur($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET infos_joueur = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_infos_ages($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET ages = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_infos_charte($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET charte_joueur = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_infos_salles($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET salles_bas_rhin = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function update_infos_salle($pdo, $file) {
    $sql = 'UPDATE inscriptions_infos SET salle_vbc_haguenau = :file;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':file',$file, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_president($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET president = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_vice_president($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET vice_president = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_tresorier($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET tresorier = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_secretaire($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET secretaire = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_tre_adj($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET tre_adj = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess1($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess1 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess2($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess2 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess3($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess3 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess4($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess4 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess5($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess5 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess6($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess6 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_assess7($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET assess7 = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_dev($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_dev = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_web($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_web = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_jeunes($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_jeunes = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_formation($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_formation = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_sport($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_sport = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function modif_comite_licences($pdo, $valeur) {
    $sql = 'UPDATE conseil_administration SET comite_licences = :valeur;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':valeur',$valeur, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

/* Partenaires */

function partners($pdo) {
    $sql = 'SELECT * FROM partenaires ORDER BY id_part DESC;';
     
    $query = $pdo->prepare($sql);   
    $query->execute();
    
    if ($query->errorCode() == '00000') {        
        $tableau = $query->fetchAll(PDO::FETCH_ASSOC);  
    }
    else {
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
        $tableau = null;
    }
    
    return $tableau;
}

function insertURL($pdo, $nom, $url) {
    $sql = 'UPDATE partenaires SET lien_entreprise = :lien WHERE alias = :alias;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':lien',$url, PDO::PARAM_STR);
    $query->bindValue(':alias',$nom, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function delete_entreprise($pdo, $src) {
    $sql = 'DELETE FROM partenaires WHERE lien_img = :lien;';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':lien',$src, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}

function insert_partenaire($pdo, $nom, $url, $img) {
    $sql = 'INSERT INTO partenaires (lien_img, lien_entreprise, alias) VALUES (:lien_img, :lien_entreprise, :alias);';
     
    $query = $pdo->prepare($sql);   
    
    $query->bindValue(':lien_img',$img, PDO::PARAM_STR);
    $query->bindValue(':lien_entreprise',$url, PDO::PARAM_STR);
    $query->bindValue(':alias',$nom, PDO::PARAM_STR);

    $query->execute();
    
    if ($query->errorCode() != '00000') {        
        echo "<p>Erreur dans la requête</p>"; 
        echo '<p>'.$query->errorInfo()[2].'</p>';
    }
}