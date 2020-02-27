<?php

session_start();

?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley-Ball Club de Haguenau - Présentation du club</title>
    <link rel="shortcut icon" href="img/logo_test.png" type="image/x-icon">

    <!-- ////////////////////////// BOOTSTRAP ////////////////////////// -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- ////////////////////////// FONTAWESOME //////////////////////// -->
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body class="presentation">
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
        <div class="presentation__imgheader">
            <h1 class="presentation__imgheader__titrepage">PRÉSENTATION DU CLUB</h1>
        </div>
    </header>

    <main>
        <div class="bouton">
            <button class="bouton__btn1 bouton__btn">LE VOLLEY BALL</button>
            <button class="bouton__btn2 bouton__btn">LE CLUB</button>
        </div>
        <!--PAGE UNE, LE VOLLEY BALL-->
        <section class="histoireduvolley">
            <div class="bases_volley">
                <iframe src="https://www.youtube.com/embed/zFKWtUubEYU?autoplay=1&modestbranding=1&showinfo=0&rel=0&cc_load_policy=1&iv_load_policy=3&theme=light&color=white
                &disablekb=1" width="949" height="534" frameborder="0"></iframe>
            </div>

            <p class="plus"><a href="https://www.youtube.com/watch?v=LDe7Oj9fwRE&feature=" target="_blank">En savoir plus sur le service</a></p>
            
            <article class="partieune">
                <div>
                    <h2 class="partieune__titrepartie">HISTOIRE DU VOLLEY</h2>
                </div>

                <div class="partieune__flex1">
                    <img class="partieune__flex1__img" src="img/presentation/ballon.png" alt="Joueuse tenant sous le bras une balle lors d'un match de volley-ball">
                    <div>
                        <p class="partieune__flex1__texte">Le volley-ball est inventé le 9 février 1895 aux États-Unis
                            par
                            un professeur d’éducation physique et
                            pasteur des Unions Chrétiennes de Jeunes Gens (Young Men’s Christian Association : (YMCA)),
                            à
                            Holyoke
                            dans
                            le Massachusetts : William G. Morgan (1870-1942), afin d'occuper les athlètes pendant
                            l'hiver.
                        </p>

                        <p class="partieune__flex1__texte">C'est en s'inspirant à la fois du basket-ball (inventé quatre
                            années auparavant à seize kilomètres
                            plus
                            loin dans la ville de Springfield) et également du tennis qu'est née la « mintonette », qui
                            se devait
                            d'être
                            un
                            sport de salle moins violent que le basket-ball, pour les membres les plus âgés de la Young
                            Men's
                            Christian
                            Association, tout en exigeant toujours un minimum d'effort physique. Les premières règles,
                            écrites
                            par
                            William G.
                            Morgan, instauraient un filet de 1,98 m de hauteur, un terrain de 7,6 par 15,2 m, et un
                            nombre
                            de
                            joueurs illimité.</p>

                        <p class="partieune__flex1__texte">Un match était composé de neuf tours avec trois services pour
                            chaque équipe dans chaque tour, avec
                            un
                            nombre de contacts avec la balle illimité pour chaque équipe avant son renvoi à
                            l'adversaire. En
                            cas
                            d'une erreur de service, un deuxième essai était permis. </p>
                    </div>
                </div>
                <div class="partieune__flex2">
                    <div class="partieune__flex2__textes">
                        <p class="partieune__flex2__texte">Le fait de frapper la balle dans le filet était considéré
                            comme
                            une faute (avec la perte du point
                            ou d'un temps-mort) sauf si cela se passait à la première tentative de service. Après avoir
                            observé ce sport, Alfred Halstead remarqua la nature de « volée » dans le jeu à son premier
                            match d'exhibition en 1896. Joué à l'International YMCA Training School (aujourd'hui appelée
                            Springfield College), le jeu fut rapidement connu sous le nom de volley-ball (il a été à
                            l'origine orthographié en deux mots : « volley ball »).</p>
                        <p class="partieune__flex2__texte">La Fédération Française de Volley-Ball compte aujourd’hui
                            environ 100.000 licenciés répartis en
                            1 577 clubs affiliés ainsi que 351 clubs de beach volley. La ligue d’Alsace comprend les
                            licenciés des Comités Départementaux du Bas-Rhin (26 clubs) et du Haut-Rhin (environ 25
                            clubs)
                            avec près de 3.800 licenciés.</p>
                    </div>
                    <img class="partieune__flex2__img" src="img/presentation/joueuse.png" alt="Joueuse de volley-ball sur un terrain lors d'un match">
                </div>
            </article>
            <article class="partiedeux">
                <div class="partiedeux__gauche">
                    <h2 class="partiedeux__gauche__titrepartie">LES GRANDES DATES</h2>
                    <div class="partiedeux__gauche__texte">
                        <ul class="partiedeux__gauche__texte__liste">
                            <li><span class="bold">07 Juillet 1896</span> 1er match de volley-ball au Collège de
                                Springfield
                            </li>
                            <li><span class="bold">1900</span> Une balle spéciale est créée pour ce sport</li>
                            <li><span class="bold">1920</span> Les « 3 touches » par côté sont instaurées</li>
                            <li><span class="bold">1940</span> Apparition de la « Manchette », auparavant le jeu
                                consistait en «
                                Passe Haute »</li>
                            <li><span class="bold">1947</span> Création de la FIVB (Fédération Internationale de
                                Volley-Ball) à
                                Paris</li>
                            <li><span class="bold">1949</span> 1er Championnat du Monde à Prague</li>
                            <li><span class="bold">1957</span> Le C.I.O. désigne le volley « sport olympique »</li>
                            <li><span class="bold">1960</span> Apparitions du Block et de la Défense</li>
                            <li><span class="bold">1964</span> Jeux Olympiques de Tokyo, apparition du volley</li>
                            <li><span class="bold">1983</span> Création de l'A.V.P. (Association of Volley-ball
                                Professionals)
                            </li>
                            <li><span class="bold">1990</span> Création de la Ligue Mondiale</li>
                            <li><span class="bold">1995</span> Centenaire du Volley-ball</li>
                            <li><span class="bold">1996</span> Apparition du Beach-Volley aux Jeux Olympiques d'Atlanta
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="partiedeux__droite">
                    <img class="partiedeux__droite__img" src="img/presentation/match.jpg" alt="Joueuses de volley-ball adverses au filet lors d'un match">
                </div>
            </article>
        </section>

        <!-- PARTIE DEUX - LE CLUB -->
        <section class="leclubnone">
            <article class="partietrois">
                <div class="partietrois__blanc">
                    <div class="partietrois__blanc__texte">
                        <h2 class="partietrois__blanc__texte__titrepartie">LE VOLLEY-BALL CLUB DE HAGUENAU</h2>
                        <p>Tout a commencé en plein hiver 2010 lorsqu’avec une bande de copains nous avons décidé de
                            créer une association pour solliciter une salle de sport à la mairie d’Haguenau. C’est ainsi
                            qu’est née l’association « Activité Réseau W Carpe Diem » (ARwCD). Dès lors, nous nous
                            sommes réunis chaque lundi soir de 20h00 à 22h00 dans une salle ayant l’inconvénient d’un
                            plafond un peu bas pour pratiquer quelques échanges. Au début de l’année 2012, grâce au «
                            bouche à oreille », un des partenaires professionnel du Président d’ARwCD lui a proposé de
                            venir s’entraîner dans une autre salle. C’est ainsi que se sont développées
                            d’autres rencontres d’un autre niveau ! Un groupe spécifique s’est alors formé et a
                            également commencé à participer à des tournois loisirs locaux.</p>
                        <p>Au mois de mai 2014, l’association ARwCD organise son premier tournoi loisir
                            réunissant une dizaine d’équipes dans une salle louée à Soufflenheim. Devant la satisfaction
                            des participants, les administrateurs d’ARwCD ont décidé de reconduire chaque année ce «
                            tournoi des Potiers ». La nouvelle équipe de joueurs constituée commence en même temps à
                            trépigner des pieds, car les entraînements loisirs ne permettent pas de valoriser les
                            capacités de chacun et les intéressés n’hésitent pas à s’inscrire en compétition dans les
                            clubs voisins sans y trouver l’essor ou la satisfaction souhaités. Entre temps, la ville d’Haguenau construit un nouveau gymnase, ce qui par la gestion
                            d’espaces supplémentaires engendre une nouvelle répartition de l’utilisation des salles. Il
                            était indispensable de « sauter sur cette occasion » pour, cette fois–ci, officiellement
                            solliciter une place dans une salle adaptée à une pratique satisfaisante du volley-ball.</p>
                        <p>Soutenu à partir de décembre 2014 dans sa démarche par de nombreux élus et par les instances
                            locales officielles de volley-ball (la Ligue d’Alsace et le Comité Départemental de Volley-Ball),
                            le Président d’ARwCD requiert alors un entretien avec l’adjointe chargée aux sports qui lui
                            annonce quelques semaines plus tard (fin février 2015) qu’un créneau peut être accordé à
                            ce nouveau club qui n’existait pas encore à Haguenau. Une fois les différentes démarches
                            administratives effectuées pour la constitution du club, en mars 2015, les nouveaux
                            administrateurs se mettent à l’œuvre pour former les équipes afin d’inscrire ces dernières
                            (et notamment les tout jeunes) en compétition à partir de septembre 2015.</p>
                    </div>
                </div>
            </article>

            <article class="partiequatre">
                <h2 class="partiequatre__titrepartie">LE CONSEIL D'ADMINISTRATION</h2>

                <?php

                include("includes/connexion.php");
                include("includes/sql.php");
                include("includes/affichage.php");

                $pdo = connexion();

                $tableau = selectCAMembers($pdo);
                conseil_administration($tableau);

                $pdo = null;

                ?>
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
    <script src="scripts/club.js"></script>

    <?php

    if (isset($_SESSION['connected']) && ($_SESSION['connected'] == true)) {
        echo '<script src="scripts/modif_ca.js"></script>';
    }

    ?>
</body>
</html>