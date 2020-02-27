<?php

session_start();

?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley-Ball Club de Haguenau - Inscriptions/informations</title>
    <link rel="shortcut icon" href="img/logo_test.png" type="image/x-icon">

    <!-- ////////////////////////// BOOTSTRAP ////////////////////////// -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- ////////////////////////// FONTAWESOME //////////////////////// -->
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body class="inscriptions">
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
                    <li class="nav-item dropdown active menu">
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
                        <a class="nav-link aut" href="partenaires.php">Partenaires</a>
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
        <div class="inscriptions__imgheader">
            <h1 class="inscriptions__imgheader__titrepage">INSCRIPTIONS ET INFORMATIONS</h1>
        </div>
    </header>

    <main>
        <section>
            <article class="bulletin">
                <h2 class="bulletin__titrepartie">BULLETIN D'ADHÉSION</h2>
                <p class="bulletin__texteprincipal">Ces bulletins doivent être remis au plus vite à un responsable du club
                    accompagnés :</p>
                <div class="bulletin__liste">
                    <ul>
                        <li>1 - De la demande FFVB remplie et signée</li>
                        <li>2 - Du règlement de la cotisation annuelle (chèque ou espèces) </li>
                        <li>3 - Du certificat médical complété et signé par votre médecin </li>
                        <li>4 - D'une photocopie de la carte d'identité</li>
                    </ul>
                    <ul>
                        <li>5 - De trois photos d'identité</li>
                        <li>6 - De la fiche individuelle de renseignements</li>
                        <li>7 - De la charte du joueur</li>
                        <li>8 - Du formulaire de don</li>
                    </ul>
                </div>
            </article>

            <div class="inscription">
                <p class="inscription__texteprincipal">Formulaires à télécharger et à compléter :</p>
                <?php

                include("includes/connexion.php");
                include("includes/affichage.php");
                include("includes/sql.php");

                $pdo = connexion();

                $tableau = selectPDFs($pdo);
                bulletins($tableau);

                ?>
            </div>
        </section>

        <section>
            <div class="informations">
                <h2 class="informations__titrepartie">INFORMATIONS</h2>
                <?php

                informations($tableau);

                $pdo = null;

                ?>
            </div>
        </section>

        <section class="charte">
            <h2 class="charte__titrepartie">CHARTE DU JOUEUR</h2>

            <article class="charte__partie1">
                <div class="charte__partie1__texte">
                    <p class="charte__partie1__texte__violet">Une charte c’est : des droits, des devoirs, des règles de
                        vie à respecter !</p>
                    <p>Cette charte rappelle les valeurs et les principes fondamentaux de notre club en matière de
                        pratique sportive en général, et en particulier, dans la pratique du Volley.</p>
                    <p>Le respect des règles présentées ci-dessous a vocation :</p>
                    <ul>
                        <li>- À instaurer une discipline pédagogique qui doit permettre de construire
                            l’esprit du club tout en garantissant le respect des membres du club</li>
                        <li>- À assurer la qualité de l’esprit de l’équipe et de l’environnement sportif</li>
                        <li>- À respecter et promouvoir l’image sportive du club.</li>
                    </ul>
                </div>
                <div class="charte__partie1__img">
                    <img src="img/inscriptions/joueurs_volley.jpg" alt="Joueurs du volley-ball club de Haguenau sur un terrain de volley-ball">
                </div>
            </article>

            <article>
                <p class="charte__titrepartie2">À ce titre, le joueur s'engage ...</p>

                <div class="charte__flex">
                    <div class="charte__flex__gauche">
                        <h3>1) Vis-à-vis du Club à :</h3>
                        <ul>
                            <li>- Respecter les règles et fondamentaux du Volley Ball</li>
                            <li>- Respecter et privilégier l’intérêt du Club</li>
                            <li>- Être à jour de ses cotisations et de ses démarches administratives (rendre un dossier
                                complet)</li>
                            <li>- Être assidu, sérieux et ponctuel aux entraînements et matchs en s’inscrivant sur le site
                                de
                                participation « YAENTRAINEMENT.COM »</li>
                            <li>- Répondre rapidement aux messages par internet et via le téléphone portable (SMS)</li>
                            <li>- Être solidaire : ce qui signifie de parrainer les nouveaux joueurs !</li>
                            <li>- Faire preuve de retenue et de respect vis-à-vis de l’adversaire</li>
                            <li>- Participer aux après-matchs à l’issue d’une rencontre à domicile</li>
                            <li>- Participer à la vie du Club (installation des terrains, transport et rangement du
                                matériel)</li>
                            <li>- Les vestiaires et le gymnase doivent être constamment gardés propres. Vos éventuels
                                déchets se jettent dans les poubelles notamment les bouteilles d’eau vides ou pas.</li>
                        </ul>
                    </div>

                    <div class="charte__flex__droite">
                        <h3>2) Vis-à-vis de l’Entraîneur ou des dirigeants à :</h3>
                        <ul>
                            <li>- Porter une tenue propre et correcte</li>
                            <li>- Participer aux entraînements et aux tournois</li>
                            <li>- Être assidu et ponctuel, pour ne pas nuire à son équipe</li>
                            <li>- Prévenir en cas d’absence surtout pour l’organisation des matchs</li>
                            <li>- Respecter l’Entraîneur et les dirigeants</li>
                            <li>- Respecter les choix de l’Entraîneur pour la constitution des équipes</li>
                            <li>- Être aimable et poli : n’oubliez pas de saluer et de remercier l’équipe adverse, l’arbitre
                                et
                                l’entraîneur lors des matchs !</li>
                            <li>- Privilégier l’intérêt du groupe à son intérêt personnel</li>
                            <li>- Adhérer à l’esprit et aux valeurs du Volley-Ball Club de Haguenau.</li>
                        </ul>
                        <h3>3) Vis à vis de l’Arbitre à :</h3>
                        <ul>
                            <li>- Respecter toutes ses décisions</li>
                            <li>- Ne pas les discuter, sachant que seul le Capitaine d’équipe peut le faire</li>
                            <li>- Serrer la main des Arbitres à l’issue du match</li>
                            <li>- Respecter les conditions générales.</li>
                        </ul>
                    </div>
                </div>

                <div class="charte__partie3">
                    <div class="charte__partie3__img">
                        <img src="img/inscriptions/joueuses_volley.jpg" alt="Joueuses de volley-ball en action lors d'un match de volley-ball">
                    </div>

                    <div class="charte__partie3__texte">
                        <p>D’une manière générale, aucune insulte, ni agression verbale ou physique ne sera tolérée, ni
                            vis-à-vis des joueurs, des entraîneurs, des dirigeants, des joueurs des équipes adverses, du
                            corps arbitral et des supporters.</p>
                        <p class="charte__partie3__texte__violet">L’attitude exemplaire est de se comporter de manière responsable avec « fair play »</p>
                        <p><strong>SOYEZ PONCTUEL :</strong> les entraînements et les déplacements pour les matchs ou tournois doivent
                            commencer à l’heure. Il est important de prévenir ton entraîneur pour tout retard et/ou absence.
                        </p>
                        <p><strong>RESPECT DU MATÉRIEL ET DES LOCAUX :</strong> le matériel et les locaux sont mis à
                            disposition de tous les adhérents, ils doivent être respectés et rangés par tous après chaque
                            utilisation (rangement des poteaux, des filets et des ballons). Le vol et les dégradations
                            seront poursuivis.</p>
                        <p><strong>AYEZ L'ESPRIT D'ÉQUIPE :</strong> il est toujours plus agréable de jouer avec un joueur humble et sympa
                            plutôt qu’un joueur agressif et excité qui crie sur tout le monde.</p>
                    </div>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="scripts/menu.js"></script>
</body>
</html>