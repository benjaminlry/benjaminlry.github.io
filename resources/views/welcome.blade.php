<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>Benjamin Leroy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->
    <div class="nav-menu fixed-top animated fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="#accueil"><span>Benjamin</span> <span id="nomDeFamille">LEROY</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#accueil">ACCUEIL<span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#programmation">PROGRAMMATION</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#graphisme">GRAPHISME</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="#" onclick="window.open('pdf/BenjaminLeroyCV.pdf');" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3" data-toggle="modal" data-target="#exampleModalCenter">CV</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<!-- ACCUEIL -->
    <header class="bg-gradient" id="accueil">
        <div class="container mt-5 animated fadeInDown">
            <h1>Benjamin LEROY</h1>
            <hr class="lineSeparation"> 
            <p class="tagline">Développeur Web</p>
            <div class="img-holder mt-3"><img src="images/imgBenjaminLeroy.png" alt="avatar" class="img-fluid" id="avatar"></div>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <div class="section-title">
                <h2>À propos</h2>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-hummer gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Appliqué</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-ruler-pencil gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Organisé</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Soigneux</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aProposDescription col-12 col-lg-12">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="card-text">Je m'appelle Benjamin Leroy, j'ai 19 ans et je suis actuellement en étude pour devenir Développeur Web et Mobile.
                                    Je suis en cours d'obtention d'un BTS Services Informatiques aux Organisations à Annecy (Bac+2) ou je découvre des langages comme C#, Php ou encore Java avec des concepts de programmation. Auparavant, j'ai obtenu un baccalauréat STI2D au Lycée Louis Armand de Chambéry.
                                    </br>
                                    </br>
                                    Avide de connaissances, j'aime approfondir ma passion pour la programmation mais également pour le graphisme avec l'utilisation de logiciel tel que Photoshop ou Illustrator. Grâce à un stage et à mes connaissances personnelles j'ai découvert le langage Javascript avec un des meilleurs frameworks de temps réel qui est Meteor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->

<!-- PROGRAMMATION -->
    <div class="section light-bg" id="programmation">
        <div class="container">
            <div class="section-title">
                <h2>Programmation</h2>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <div>
                        <h3>Application de récolte d'avis</h3>
                        <span>Javascript / Meteor</span>
                    </div>
                    <img src="images/programmation/imgAppAvis1.jpg" alt="Screen application recolte de avis 1" class="programmation-img">
                    <img src="images/programmation/imgAppAvis2.jpg" alt="Screen application recolte de avis 2" class="programmation-img">
                    <blockquote class="blockquote">Ce projet a été réalisé durant un stage de 6 semaines en entreprise, ça m'a permis de découvrir Javascript à l'aide du framework Meteor qui est très performant pour le temps réel. L'intégralité de la partie front-end et back-office est en constante intéraction.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Application de rapidité</h3>
                        <span>Javascript / Meteor</span>
                    </div>
                    <img src="images/programmation/imgAppReact1.jpg" alt="Screen application reactivité 1" class="programmation-img">
                    <img src="images/programmation/imgAppReact2.jpg" alt="Screen application reactivité 2" class="programmation-img">
                    <blockquote class="blockquote">Cette application est un projet personnel qui m'a permis de fixer mes connaissances en Javascript mais également de garder un rythme de programmation constant en dehors des études.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Application de visite virtuelle</h3>
                        <span>WondaVR / Samsung Gear VR</span>
                    </div>
                    <img src="images/programmation/imgVR1.png" alt="Screen application de visite virtuelle 1" class="programmation-img">
                    <img src="images/programmation/imgVR2.jpg" alt="Screen application de visite virtuelle 2" class="programmation-img">
                    <blockquote class="blockquote">Cette visite virtuelle était un projet de stage qui consistait à se déplacer de façon simple et ludique à l'aide d'un casque VR.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Application de réalité augmentée</h3>
                        <span>Aurasma</span>
                    </div>
                    <img src="images/programmation/imgRA1.jpg" alt="Screen application de réalité augmentée 1" class="programmation-img-RA">
                    <img src="images/programmation/imgRA2.jpg" alt="Screen application de réalité augmentée 2" class="programmation-img-RA">
                    <blockquote class="blockquote">Cette application était destinée à des élèves de primaire dans le but de découvrir l'histoire de la ville d'Aix-les-Bains en se rendant sur les lieux emblématiques.</blockquote>
                </div>
            </div>
            <div class="client-logos my-5">
                <div class="container text-center all-logos-programmation">
                    <img src="images/programmation/greyCSS.png" alt="CSS" class="img-fluid logo-programmation" id="greyCSS" data-toggle="tooltip" data-placement="bottom" title="Css">
                    <img src="images/programmation/greyHTML.png" alt="HTML" class="img-fluid logo-programmation" id="greyHTML" data-toggle="tooltip" data-placement="bottom" title="Html">
                    <img src="images/programmation/greyJS.png" alt="JS" class="img-fluid logo-programmation" id="greyJS" data-toggle="tooltip" data-placement="bottom" title="JavaScript">
                    <img src="images/programmation/greyPhp.png" alt="PHP" class="img-fluid logo-programmation" id="greyPhp" data-toggle="tooltip" data-placement="bottom" title="Php">
                    <img src="images/programmation/greyCsharp.png" alt="CSharp" class="img-fluid logo-programmation" id="greyCsharp" data-toggle="tooltip" data-placement="bottom" title="C#">
                    <img src="images/programmation/greySql.png" alt="SQL" class="img-fluid logo-programmation" id="greySql" data-toggle="tooltip" data-placement="bottom" title="Sql">
                    <img src="images/programmation/greyAndroid.png" alt="Android" class="img-fluid logo-programmation" id="greyAndroid" data-toggle="tooltip" data-placement="bottom" title="Android (Java)">
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->


<!-- GRAPHISME -->
    <div class="section" id="graphisme">
        <div class="container">
            <div class="section-title">
                <h2>Graphisme</h2>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <div>
                        <h3>Carte de visite</h3>
                        <span>InDesign</span>
                    </div>
                    <img src="images/graphisme/imgCarteVisite1.png" alt="Carte de visite 1" class="graphisme-img">
                    <img src="images/graphisme/imgCarteVisite2.png" alt="Carte de visite 2" class="graphisme-img">
                    <blockquote class="blockquote">Conception et création de carte de visite pour une passe temps qui est la photographie.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Logos</h3>
                        <span>Illustrator</span>
                    </div>
                    <img src="images/graphisme/imgLogo3.png" alt="Logo 3" id="img-logo-3">
                    <img src="images/graphisme/imgLogo1.png" alt="Logo 1" id="img-logo-1">
                    <img src="images/graphisme/imgLogo2.png" alt="Logo 2" id="img-logo-2">
                    <blockquote class="blockquote">En parallèle de mes études je crée des logos selon les demandes, cela me permet d'alimenter mes connaissances en graphisme.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Illustration vectorielle</h3>
                        <span>Illustrator</span>
                    </div>
                    <img src="images/graphisme/img206.png" alt="Image vectorielle" id="img-vectorielle" class="graphisme-img">
                    <blockquote class="blockquote">Le rallye étant ma plus grande passion, je passe beaucoup de temps à effectuer des montages, des dossiers de sponsorings ... Par exemple cette illustration permet de placer les différents sponsors afin de leur montrer un aperçu de la publicité.</blockquote>
                </div>
                <div class="testimonials-single">
                    <div>
                        <h3>Création de calendrier</h3>
                        <span>Photoshop / InDesign</span>
                    </div>
                    <img src="images/graphisme/imgCalendrier.jpg" alt="Image vectorielle" class="graphisme-img" id="imgCalendrier">
                    <blockquote class="blockquote">Ce calendrier en chevalet a été conçus et mis en page par mes soins avant de le faire imprimer par un professionnel.</blockquote>
                </div>
            </div>
            <div class="client-logos my-5">
                <div class="container text-center all-logos-graphique">
                    <img src="images/graphisme/greyAI.png" alt="AI" class="img-fluid img-logos logo-graphique" id="greyAI" data-toggle="tooltip" data-placement="bottom" title="Illustrator">
                    <img src="images/graphisme/greyPS.png" alt="PS" class="img-fluid img-logos logo-graphique" id="greyPS" data-toggle="tooltip" data-placement="bottom" title="Photoshop">
                    <img src="images/graphisme/greyID.png" alt="ID" class="img-fluid img-logos logo-graphique" id="greyID" data-toggle="tooltip" data-placement="bottom" title="InDesign">
                    <img src="images/graphisme/greyLR.png" alt="LR" class="img-fluid img-logos logo-graphique" id="greyLR" data-toggle="tooltip" data-placement="bottom" title="Lightroom">
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->

<!-- CONTACT -->
    <div class="light-bg section" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <blockquote class="blockquote">Vous pouvez me contacter facilement grâce à ce formulaire.</blockquote>
                    <form id="contact-form" action="https://formspree.io/contact.benjaminleroy@gmail.com" method="POST">
                        <div class="row">
                            <div class="form-group center-block input-field col s12">
                                <label for="inputName">Prénom et nom</label>
                                <input id="inputName" type="text" name="name" class="form-control" placeholder="Saisir votre prénom et nom" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group center-block input-field col s12">
                                <label for="inputEmail">Email</label>
                                <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Saisir votre adresse email" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group center-block input-field col s12">
                                <label for="inputMessage">Message</label>
                                <textarea class="form-control" id="inputMessage" name="message" rows="10" placeholder="Saisir votre message" required="required"></textarea>
                            </div>
                        </div>
                        <div class="text-center btnContact">
                            <button href="" id="email-submit-btn" type="submit" value="Send" class="btn btn-primary">Envoyer</button>
                        </div>
                        <span></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // end .section -->

    <!-- FormatContact -->
    <footer class="my-5 text-center">
        <div class="contactInformations">
                <div class="col-lg-12">
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:contact.benjaminleroy@gmail.com">contact.benjaminleroy@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-mobile mr-2"></span> <a class="mr-4" href="tel:0601043447">06.01.04.34.47</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-pin mr-2"></span> <a class="mr-4" href="#" onclick="window.open('https://www.google.fr/maps/search/Aix-les-Bains/@45.6942366,5.8684471,13z');">Aix-les-Bains</a>
                        </p>
                    </div>
                </div>
        </div>
        <!-- Copyright -->
        <p class="mb-2 copyright"><small>Copyright © 2018 par Benjamin LEROY</small></p>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>

</html>
