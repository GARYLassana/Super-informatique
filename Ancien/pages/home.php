<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Super Informatique SARL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="/" class="navbar-brand">
                    <!-- <h1 style="font-size: 1.5rem; margin:0" class="text-white">Super Informatique<span class="text-dark">.</span>SARL</h1> -->
                    <a href=""><img class="img-fluid logo" src="assets/img/logo.png" alt="">
                    </a>
                    <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="#index" class="nav-item nav-link active">Accueil</a>
                            <a href="#aProposDeNous" class="nav-item nav-link">A propos de nous</a>
                            <a href="#prestationServices" class="nav-item nav-link">Prestation de service</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                                <div class="dropdown-menu bg-light mt-2">
                                    <a href="#academy" class="dropdown-item">Academy</a>
                                    <a href="#gps" class="dropdown-item">GPS</a>
                                    <a href="#securiteInformatique" class="dropdown-item">Sécurité informatique</a>
                                    <a href="#developpement" class="dropdown-item">Développement des services informatique</a>
                                    <a href="#reseauxTelecom" class="dropdown-item">Réseau telecom et maintenance</a>
                                    <a href="#equipementInformatique" class="dropdown-item">Équipements informatiques</a>
                                </div>
                            </div>
                            <a href="#galerie" class="nav-item nav-link">Galerie</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5" id="index">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">AI.Tech</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Acteur majeur des services d'ingénierie informatique</h1>
                    <p class="text-white mb-4 animated slideInRight">Notre posture avant-gardiste et proactive nous donne une longueur d'avance pour anticiper vos besoins futurs et vous accompagner efficacement sur le long terme.</p>
                    <a href="contact" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contactez nous</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <a href=""><img class="img-fluid" src="assets/img/hero-img.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="aProposDeNous">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <a href=""><img class="img-fluid" src="assets/img/about-img.svg">
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Super Informatique SARL</div>
                    <h1 class="mb-4">La démarche vers des réseaux, des communications & solutions informatiques :</h1>
                    <p class="mb-4">Super Informatique SARL est un acteur majeur des services d'ingénierie informatique, de la transformation digitale et du conseil. Particulièrement attaché à l'innovation, Super Informatique aide ses clients à saisir l'ensemble des opportunités qu'offrent les Tics.
                    </p>
                    <p class="mb-4">Les services connexes flexibles et fiables pour répondre aux besoins des entreprises d'aujourd'hui... et de demain.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6><i class="fa fa-check text-primary me-2"></i>Super informatique academy</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Solutions applicatives</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Coaching et assistance à domicile</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Maintenance(Electronique et Informatique)</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Réparations & Maintenances Informatique</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Hébergement et Cloud</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Traceur GPS</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6><i class="fa fa-check text-primary me-2"></i>Securité informatique et reseautique</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Telecom réseaux et maintenance</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Équipement informatique</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Déploiement de Réseaux</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Solution de surveillance (caméra & vidéo)</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Installation des équipements biométriques</h6>
                            <h6><i class="fa fa-check text-primary me-2"></i>Contrôle d'Accès</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5 formation" id="prestationServices">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Nos formations</div>
                    <h1 class="mb-4">Super informatique academie</h1>
                    <p class="mb-4">Un savoir-faire et une expertise qui vous garantissent un service de qualité et créent en permanence de la valeur pour soutenir vos performances.
                        Notre démarche c'est attirer, développer, valoriser, sécurisé des personnes et des biens, et motiver les meilleurs talents et les inciter à donner le meilleur d'eux-mêmes.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Lire plus</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-code-slash fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Programation</h5>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="bi bi-pc-display fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Microsoft server</h5>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.9s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-motherboard-fill fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Maintenance informatique</h5>
                                    </div>

                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.13s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="bi bi-pci-card-network fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Photoshop</h5>
                                    </div>

                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.17s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="bi bi-hdd-network-fill fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Réseau de base</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-router-fill fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">CCNA et CCNP</h5>
                                    </div>

                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-wrench-adjustable-circle-fill fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Installation d'antennes</h5>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.11s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="bi bi-webcam-fill fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Caméra de surveillance</h5>
                                    </div>

                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.15s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-fingerprint fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Côntrôleur biometrique</h5>
                                    </div>

                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.19s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa bi-translate fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">English</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-7 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Notre mission</div>
                    <h1 class="text-white mb-4">La conception, l'expertise et l'anticipation</h1>
                    <p class="text-light mb-4">Super informatique se veut un levier de croissance pour vous donner les moyens technologiques de transformer votre organisation, d'améliorer vos performances et de devenir plus agile et plus compétitif.</p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <i class="bi bi-check-circle-fill fa-2x me-3"></i>
                        <span>Concevoir et mettre en œuvre les solutions technologiques qui correspondent de façon spécifique aux besoins des entreprises et organisations africaines (de nos clients) et les aider à atteindre leurs objectifs.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <i class="bi bi-check-circle-fill fa-2x me-3"></i>
                        <span>Un savoir-faire et une expertise qui vous garantissent un service de qualité et créent en permanence de la valeur pour soutenir vos performances.

                            Notre démarche c'est attirer, développer, valoriser , sécurisé le person et leur bien, et motiver les meilleurs talents et les inciter à donner le meilleur d'eux-mêmes.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <i class="bi bi-check-circle-fill fa-2x me-3"></i>
                        <span>Notre posture avant-gardiste et proactive nous donne une longueur d'avance pour anticiper vos besoins futurs et vous accompagner efficacement sur le long terme.</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">9999</h2>
                                    <p class="text-white mb-0">Clients satisfaits</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">12</h2>
                                    <p class="text-white mb-0">Projects en cours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a href=""><img class="img-fluid" src="assets/img/feature.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5 projets">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 1000px;">
                <div class="btn btn-sm border-primary rounded-pill text-primary px-3 mb-3">Nos projets</div>
                <h1 class="mb-4">Explorez nos récentes études de cas de nos futurs projets</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/network.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Réseaux inter connectés</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/programmation.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Programation</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/maintenance.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Maintenance & réseaux telecom</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/gps.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>GPS</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/academie.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Academy</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <a href=""><img class="img-fluid projetsImg" src="assets/img/equipement.svg" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Equipement informatique</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5" id="galerie">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Galerie d'image</div>
                <h1 class="mb-4">Explorez nos récentes travaux en image</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img1.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Robotic Automation</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img2.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img3.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.9s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img4.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.11s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img5.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.13s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img6.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.15s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img7.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.17s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img8.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.19s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img9.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.21s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img10.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.24s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img11.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.24s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img12.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.27s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img13.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.30s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img14.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.33s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img15.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.36s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img16.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.39s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img17.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.42s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img18.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.45s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img19.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.48s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img20.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.51s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="assets/img/galeries/img21.jpg" alt="">
                        <a class="d-flex justify-content-between align-items-center case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 1000px;">
                <div class="btn btn-sm border-primary rounded-pill text-primary px-3 mb-3">Nos partenaires</div>
                <h1 class="mb-4">Explorez nos récentes études de cas de nos futurs projets</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="assets/img/satisfied.svg" alt="">
                </div>
                <div class="col-lg-9 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="d-flex justify-content-between align-items-center testimonial-item ps-5">
                            <a class="d-flex align-items-center" href="https://uiemali.ac/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/uiemali.jpg" style="width: 100px; height: 100px;"></a>
                            <a class="d-flex align-items-center" href="https://www.teachmint.com/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/teachmint.svg" style="width: 100px; height: 100px;"></a>
                            <a class="d-flex align-items-center" href="https://www.hidubai.com/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/hidubai.svg" style="width: 100px; height: 100px;"></a>
                            <a class="d-flex align-items-center" href="https://proslabs.com/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/proslabs.jpg" style="width: 113px; height: 100px;"></a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center testimonial-item ps-5">
                            <a class="d-flex align-items-center" href="https://www.soyatt.com/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/soyatt.png" style="width: 113px; height: 100px;"></a>
                            <a class="d-flex align-items-center" href="https://caebmali.org/" target="_blank"><img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/partenaires/caeb.png" style="width: 113px; height: 100px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Testimonial End -->