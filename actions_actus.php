<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo_test.png" type="image/x-icon">
    <title>Actions sur les actualités</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <div class="actions_actus">
        <?php

        include("includes/connexion.php");
        include("includes/affichage.php");
        include("includes/sql.php");

        $pdo = connexion();

        echo '<div>';
        echo '<h1>Supprimer une actualité</h1>';

        $tableau = selectActus($pdo);
        echo '<select size="1" class="suppr_actu">';
        foreach ($tableau as $actu) {
            echo '<option value="'.$actu['id_post'].'">'.$actu['titre'].'</option>';
        }
        echo '</select>';
        echo '<p class="suppr_button">Supprimer</p>';
        echo '</div>';

        echo '<div>';
        echo '<h1>Modifier une actualité</h1>';

        echo '<form action="modif_actu.php" method="post">';
        echo '<select size="1" name="modif_actu">';
        foreach ($tableau as $actu) {
            echo '<option value="'.$actu['id_post'].'">'.$actu['titre'].'</option>';
        }
        echo '</select>';
        echo '<p><input type="submit" value="Modifier" name="edit_actu"></p>';
        echo '</form>';
        echo '</div>';

        echo '<p class="retour"><a href="actualites.php">Retour aux actualités</a></p>';

        $pdo = null;

        ?>
    </div>

    <script src="scripts/suppr_actu.js"></script>
</body>
</html>