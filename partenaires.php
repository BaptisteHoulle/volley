<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley-Ball Club de Haguenau - Partenaires</title>
    <link rel="shortcut icon" href="img/logo_test.png" type="image/x-icon">

    <!-- ////////////////////////// BOOTSTRAP ////////////////////////// -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body class="partenaires">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
                    <li class="nav-item dropdown">
                        <a class="nav-link navolley" href="index.php">Volley-ball Club de Haguenau</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item dropdown menu">
                        <a class="nav-link dropdown-toggle pages aut" href="presentation.php" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Le club
                        </a>
                        <ul class="liste">
                            <li class="menuli"><a class="club" href="presentation.php">Présentation</a></li>
                            <li class="menuli"><a class="club" href="inscriptions.php">Inscriptions / Informations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="equipes.php">Les équipes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="actualites.php">Actualités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active aut" href="partenaires.php">Partenaires</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn my-2 my-sm-0 btn-active2"><a target="_blank" href="https://outlook.live.com/owa//calendar/6b1fb5ef-40dd-4b16-a34f-33bd21a4a3d3/f6f4cc0a-6dfb-4f30-8365-4aba7c26c66f/cid-132FE3D782996763/index.html">Calendrier</a></button>
                    <button class="btn my-2 my-sm-0 btn-active2"><a target="_blank" href="http://www.ffvbbeach.org/ffvbapp/resu/vbspo_home.php?codent=PTAL67">Résultats</a></button>
                </form>
                <?php

                if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
                    echo '<a class="disconnect" href="includes/controleur.php?action=logout"><i class="fas fa-sign-out-alt"></i></a><a class="actions" href="actions_actus.php"><i class="fas fa-newspaper"></i></a>';
                }

                ?>
            </div>
        </nav>
        <div class="partenaires_imgheader">
            <h1 class="partenaires_imgheader_titrepage">PARTENAIRES</h1>
        </div>
    </header>
    
    <main>
        <h2 class="partenaires_titre">NOS PARTENAIRES</h2>

        <?php

        include("includes/connexion.php");
        include("includes/sql.php");
        include("includes/affichage.php");

        $pdo = connexion();

        $tableau = partners($pdo);
        affichePartenaires($tableau);

        $pdo = null;

        ?>

        <section class="partenaires_dossier">
            <h2 class="partenaires_titre">DOSSIER DE PARTENARIAT</h2>

            <p class="partenaires_dossier_devenir">Vous souhaitez devenir partenaire ?</p>

            <div class="partenaires_dossier_images">
                <img src="img/partenaires/textiles.png" alt="Panneautique pour les partenaires du VBC Haguenau">
                <img src="img/partenaires/panneaux.png" alt="Visibilité textile pour les partenaires du VBC Haguenau">
            </div>

            <p class="partenaires_dossier_download"><a href="files/partenaires.pdf" target="_blank">Télécharger le dossier</a></p>
        </section>
    </main>

        <!-- //////////////////////////////////////////// Footer ////////////////////////////////////////////// -->
    <footer>
        <div class="footer">
            <div class="contain ow">
                <div class="col-md-2">
                    <div class="logocontaint">
                        <img src="img/logo.png" class="logofooter">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logocontaint">
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="#">Club</a></li>
                            <li><a href="#">Équipes</a></li>
                            <li><a href="#">Actualités</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logocontaint">
                        <ul>
                            <li><a href="#">Partenaires</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logocontaint">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><a href="https://goo.gl/maps/RsvR5mqEXqwxxx947"
                                    target="_blank">21, chemin des
                                    friches 67500 HAGUENAU</a></li>
                            <li><a href="tel:+33685574064" target="_blank">06 85 57 40 64</a></li>
                            <li><a href="mailto:vbchaguenau67@gmail.com" target="_blank">vbchaguenau67@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="logocontaint">
                        <ul>
                            <li><a href="https://www.facebook.com/volleyballclubhaguenau/" target="_blank"><i class="fab fa-facebook-f"></i>
                            </li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

           <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="scripts/menu.js"></script>

    <?php

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<script src="scripts/partenaires.js"></script>';
    }

    ?>
</body>
</html>