<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley-Ball Club de Haguenau - Accueil</title>
    <link rel="shortcut icon" href="img/logo_test.png" type="image/x-icon">

    <!-- ////////////////////////// BOOTSTRAP ////////////////////////// -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- ////////////////////////// FONTAWESOME //////////////////////// -->
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" width="30px" height="30px" class="d-inline-block align-top logoresp" alt="">
                    </a>
                    <li class="nav-item dropdown">
                        <a class="nav-link navolley" href="index.php">Volley-ball Club de Haguenau</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active aut" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item dropdown menu">
                        <a class="nav-link dropdown-toggle pages aut" href="presentation.php" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Le club
                        </a>
                        <ul class="liste">
                            <li class="menuli"><a class="club" href="presentation.php">Présentation</a></li>
                            <li class="menuli"><a class="club" href="inscriptions.php">Inscriptions / Informations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="equipes.php">Les équipes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="actualites.php">Actualités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="partenaires.php">Partenaires</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link aut" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn my-2 my-sm-0 btn-active2"><a target="_blank"
                            href="https://outlook.live.com/owa//calendar/6b1fb5ef-40dd-4b16-a34f-33bd21a4a3d3/f6f4cc0a-6dfb-4f30-8365-4aba7c26c66f/cid-132FE3D782996763/index.html">Calendrier</a></button>
                    <button class="btn my-2 my-sm-0 btn-active2"><a target="_blank"
                            href="http://www.ffvbbeach.org/ffvbapp/resu/vbspo_home.php?codent=PTAL67">Résultats</a></button>
                </form>
                <?php

                if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
                    echo '<a class="disconnect" href="includes/controleur.php?action=logout"><i class="fas fa-sign-out-alt"></i></a><a class="actions" href="actions_actus.php"><i class="fas fa-newspaper"></i></a>';
                }

                ?>
            </div>
        </nav>
        <div class="bg">
            <video autoplay muted loop>
                <source src="video/video_accueil.mov">
            </video>
            <div class="bg__logo">
                <img src="img/accueil/logo_blanc.png" class="bg__logo__logoheader"
                    alt="Logo avec le texte blanc du Volley-Ball de Haguenau">
                <h1 class="bg__logo__volley">Volley Club <span class="bg__logo__volley__de">de</span> Haguenau</h1>
                <h2 class="bg__logo__dynamisme">Dynamisme et Fair play</h2>
            </div>
        </div>
    </header>
    <section>
        <article>
            <div class="wrapper">
                <div class="video">
                <iframe src="https://www.youtube-nocookie.com/embed/80JXkPQWfXY?autoplay=1&modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&theme=light&color=white
&disablekb=1" width="949" height="534" frameborder="0"></iframe>

                </div>
                <div class="container">
                    <div class="contact">
                        <h3 class="contact__titre">CONTACT</h3>
                        <div class="contact__informations">
                            <div class="contact__informations__conteneur">
                                <i class="fas fa-phone"></i>
                                <div class="contact__informations__conteneur__texte">
                                    <a href="tel:+33685574064" target="_blank">06 85 57 40 64 (président)</a>
                                </div>
                            </div>
                            <div class="contact__informations__conteneur">
                                <i class="fas fa-envelope"></i>
                                <div class="contact__informations__conteneur__texte">
                                    <a href="mailto:vbchaguenau67@gmail.com" target="_blank">vbchaguenau67@gmail.com</a>
                                </div>
                            </div>

                            <div class="contact__informations__conteneur">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="contact__informations__conteneur__texte">
                                    <a href="https://goo.gl/maps/RsvR5mqEXqwxxx947" target="_blank">21, chemin des
                                        friches 67500 HAGUENAU</a>
                                </div>
                            </div>
                            <div class="contact__informations__conteneur">
                                <div class="button">
                                    <a href="inscriptions.php" class="buttona">S'INSCRIRE
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <div class="button">
                                    <a href="contact.php" class="buttona con">NOUS CONTACTER
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cotisations">
                        <h3 class="cotisations__titre">COTISATIONS</h3>

                        <?php

                        include("includes/connexion.php");
                        include("includes/affichage.php");
                        include("includes/sql.php");

                        $pdo = connexion();

                        $tableau = selectCotisations($pdo);
                        cotisations($tableau);

                        $pdo = null;

                        ?>
                    </div>
                </div>

                <div class="entrainements">
                    <h2 class="entrainements__titre">Nos entraînements</h2>

                    <p class="entrainements__lieu"><i class="fas fa-map-marker-alt"></i>Gymnase du collège
                        Kléber, rue du Préfêt Lezay Marnesia à Haguenau</p>

                    <div class="entrainements__horaires">
                        <p class="entrainements__horaires__texte">M7 à M13 de 17h00 à 18h30</p>
                        <p class="entrainements__horaires__texte">M15 et M17 de 18h30 à 20h00</p>
                        <p class="entrainements__horaires__texte">Séniors féminin, masculins et loisir de 20h00 à 22h30
                        </p>
                    </div>

                    <p class="entrainements__texte">Tous les lundis et les jeudis</p>
                </div>
        </article>
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
    <!-- END OF FOOTER -->

    <script src="scripts/menu.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <?php

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<script src="scripts/modif_cotisations.js"></script>';
    }

    ?>
</body>

</html>