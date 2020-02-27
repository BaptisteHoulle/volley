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
    <title>Modification d'actualité</title>

    <!-- Ressources pour le WYSIWYG -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/jquery.hotkeys.js"></script>
    <script src="scripts/bootstrap-wysiwyg.js"></script>
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<?php

include("includes/connexion.php");
include("includes/affichage.php");
include("includes/sql.php");

$pdo = connexion();

if (isset($_POST['edit_actu'])) {
    $id_post = $_POST['modif_actu'];

    $post = selectPost($pdo, $id_post);
    modifActuForm($post);

    $imgs = selectImgsFromPost($pdo, $id_post);

    if (!empty($imgs)) {
        echo '<div class="actions_imgs">';
        echo '<h2>Image(s) pour cette actualité</h2>';
        echo '<div class="actions_imgs_actions">';
        echo '<div>';
        foreach ($imgs as $img) {
            $nom = substr($img['lien_source'], 15);
            echo '<span num="'.$img['id_img'].'" path="'.$img['lien_source'].'" class="suppr_img"><i class="fas fa-times"></i>'.$nom.'</span><br>';
        }
        echo '</div>';
        echo '<div><form enctype="multipart/form-data" class="envoi_images">';
        echo '<span class="ajout_img"><i class="fas fa-plus"></i></span>';
        echo '<p class="envoi_imgs"><input type="submit" value="Valider"><input type="reset" value="Effacer"></p>';
        echo '</form></div>';
        echo '</div>';
        echo '</div>';
    }
    else {
        echo '<div class="actions_imgs">';
        echo '<h2>Image(s) pour cette actualité</h2>';
        echo '<div class="actions_imgs_actions">';
        echo '<div><form enctype="multipart/form-data" class="envoi_images">';
        echo '<span class="ajout_img"><i class="fas fa-plus"></i></span>';
        echo '<p class="envoi_imgs"><input type="submit" value="Valider"><input type="reset" value="Effacer"></p>';
        echo '</form></div>';
        echo '</div>';
        echo '</div>';
    }

    echo '<p class="retour"><a href="actions_actus.php">Retour aux actions sur les actualités</a></p>';
}

$pdo = null;

?>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="scripts/modif_actu.js"></script>
    <script>
        $(function () {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande',
                        'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                $.each(fonts, function (idx, fontName) {
                    fontTarget.append($('<li><a data-edit="fontName ' + fontName +
                        '" style="font-family:\'' + fontName + '\'">' + fontName +
                        '</a></li>'));
                });
                $('a[title]').tooltip({
                    container: 'body'
                });
                $('.dropdown-menu input').click(function () {
                        return false;
                    })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown(
                        'toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

                $('[data-role=magic-overlay]').each(function () {
                    var overlay = $(this),
                        target = $(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset())
                        .width(target.outerWidth()).height(target.outerHeight());
                });
                if ("onwebkitspeechchange" in document.createElement("input")) {
                    var editorOffset = $('#editor').offset();
                    $('#voiceBtn').css('position', 'absolute').offset({
                        top: editorOffset.top,
                        left: editorOffset.left + $('#editor').innerWidth() - 35
                    });
                } else {
                    $('#voiceBtn').hide();
                }
            };

            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') {
                    msg = "Unsupported format " + detail;
                } else {
                    console.log("error uploading file", reason, detail);
                }
                $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            };
            initToolbarBootstrapBindings();
            $('#editor').wysiwyg({
                fileUploadError: showErrorAlert
            });
            window.prettyPrint && prettyPrint();
        });
    </script>
</body>
</html>