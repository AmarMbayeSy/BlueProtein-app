<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Agriculture et Revente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style-header.css">
 

<link rel="stylesheet" href="css/style2.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .header-service {
            background: url('./immmmage/pexels.jpg') no-repeat center center/cover;
            color: white;
            padding: 190px;
            text-align: center;
            position: relative;
        }
        .header-service h1 {
            color: #ff9900;
            font-size: 50px;
            margin: 0;
        }
        .header-service p {
            font-size: 20px;
            margin: 10px 0 0;
        }
        .header-service .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .container-service {
            background-color: white;
            margin: 40px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            padding: 20px;
        }
        .section-service {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .carousel {
            flex: 1;
            max-width: 50%;
        }
        .carousel img {
            width: 100%;
            border-radius: 10px;
        }
        .sub-sections {
            flex: 1;
            max-width: 50%;
        }
        .sub-section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative;
            cursor: pointer;
        }
        .sub-section h3 {
            font-size: 20px;
            margin: 0;
            padding-right: 40px;
        }
        .sub-section .toggle {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
            font-size: 20px;
        }
        .description {
            display: none;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .header-service {
                padding: 60px;
            }
            .header-service h1 {
                font-size: 30px;
            }
            .header-service p {
                font-size: 16px;
            }
            .container-service {
                margin: 20px;
                padding: 10px;
            }
            .section-service {
                flex-direction: column;
            }
            .carousel, .sub-sections {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .header-service {
                padding: 20px;
            }
            .header-service h1 {
                font-size: 24px;
            }
            .header-service p {
                font-size: 14px;
            }
            .container-service {
                margin: 10px;
                padding: 5px;
            }
            .section-service {
                gap: 10px;
            }
            .sub-section {
                padding: 10px;
            }
            .sub-section h3 {
                font-size: 18px;
            }
            .sub-section .toggle {
                font-size: 18px;
            }
            .description {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"> <img src="./immmmage/6fef3dd9faf34f158d1563fcd8052d6c.jpeg" alt="logo" class="logo"></a>
             
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " aria-current="page" href="./apropos">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="./try">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Produits
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./produits">Germination</a></li>
                              <li><a class="dropdown-item" href="./produits">Semis</a></li>
                              <li><a class="dropdown-item" href="./produits">Végétative</a></li>
                              <li><a class="dropdown-item" href="./produits">Floraison</a></li>
                            </ul>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2  active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./Services">Agriculteur</a></li>
                              <li><a class="dropdown-item" href="./Services">Revendeur</a></li>
  
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="./partenaires">Nos produits sur vos sols</a>
                        </li>
  
                    </ul>
  
                </div>
            </div>
            <a href="#" class="login-button">Nous Rejoindre </a>
            <a href="#" class="login-button">Contact</a>
  
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <!-- End Navbar -->
  


    <div class="header-service">
        <div class="overlay"></div>
        <h1 data-aos="fade-down">Nos Services</h1>
        <p data-aos="fade-up">Découvrez nos services dédiés aux agriculteurs et aux revendeurs</p>
    </div>
    <div class="container-service">
        <h2 data-aos="fade-left">Pour les Agriculteurs</h2>
        <div class="section-service" data-aos="fade-right">
            <div class="carousel">
                <div><img src="./immmmage/sos1.jpeg" alt="Image 1" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-goumbik-298696.jpg" alt="Image 2" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-nc-farm-bureau-mark-2252584.jpg" alt="Image 3" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-markusspiske-1268101.jpg" alt="Image 4" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-cenali-2733918.jpg" alt="Image 5" data-aos="zoom-in"></div>

            </div>
            <div class="sub-sections">
                <div class="sub-section" data-aos="fade-up" data-aos-delay="100">
                    <h3>Diagnostique <span class="toggle">+</span></h3>
                    <div class="description">
                        Maintenance intégrée pour plus de réactivité. Notre équipe est formée pour répondre rapidement aux besoins de maintenance, assurant ainsi une continuité dans vos opérations agricoles. Nous utilisons des technologies de pointe pour diagnostiquer et résoudre les problèmes avant qu'ils ne deviennent critiques, ce qui permet de minimiser les temps d'arrêt et d'optimiser la productivité.
                        Maintenance intégrée pour plus de réactivité. Notre équipe est formée pour répondre rapidement aux besoins de maintenance, assurant ainsi une continuité dans vos opérations agricoles. Nous utilisons des technologies de pointe pour diagnostiquer et résoudre les problèmes avant qu'ils ne deviennent critiques, ce qui permet de minimiser les temps d'arrêt et d'optimiser la productivité.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="200">
                    <h3>Recommendation de programme de cultures<span class="toggle">+</span></h3>
                    <div class="description">
                        Essais in planta pour l’amélioration continue. Nous menons des essais approfondis directement sur les plantes pour évaluer l'efficacité de nos produits et techniques. Ces essais nous permettent d'ajuster et de perfectionner nos solutions pour garantir des résultats optimaux. En collaborant étroitement avec les agriculteurs, nous nous assurons que les innovations sont adaptées aux conditions réelles du terrain.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="300">
                    <h3>Maîtrise des process technologiques <span class="toggle">+</span></h3>
                    <div class="description">
                        Maîtrise des process technologiques. Nous sommes experts dans l'intégration des technologies les plus avancées dans les processus agricoles. Que ce soit l'automatisation, les capteurs intelligents, ou les logiciels de gestion, nous vous accompagnons pour optimiser chaque étape de votre production. Notre objectif est de vous offrir des solutions sur mesure qui améliorent l'efficacité et la rentabilité de vos exploitations.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="400">
                    <h3>Conservation des souches <span class="toggle">+</span></h3>
                    <div class="description">
                        Savoir-faire sur la conservation des souches. La conservation des souches microbiologiques est cruciale pour la qualité et la productivité des sols. Nous utilisons des techniques de conservation éprouvées pour maintenir la viabilité et l'efficacité des souches bénéfiques. En protégeant ces ressources, nous contribuons à la durabilité et à la fertilité à long terme de vos terres agricoles.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="500">
                    <h3>Production des amendements <span class="toggle">+</span></h3>
                    <div class="description">
                        La production des amendements et d’engrais organiques. Nous produisons des amendements et des engrais organiques de haute qualité, adaptés à diverses cultures et conditions de sol. Nos produits sont conçus pour améliorer la santé du sol, stimuler la croissance des plantes, et augmenter les rendements. En choisissant nos solutions, vous optez pour une agriculture durable et respectueuse de l'environnement.
                    </div>
                </div>
              
            </div>
        </div>

        <h2 data-aos="fade-left">Pour les Revendeurs</h2>
        <div class="section-service" data-aos="fade-left">
            <div class="carousel">
                <div><img src="./immmmage/sos1.jpeg" alt="Image 1" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-goumbik-298696.jpg" alt="Image 2" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-nc-farm-bureau-mark-2252584.jpg" alt="Image 3" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-markusspiske-1268101.jpg" alt="Image 4" data-aos="zoom-in"></div>
                <div><img src="./immmmage/pexels-cenali-2733918.jpg" alt="Image 5" data-aos="zoom-in"></div>

            </div>
            <div class="sub-sections">
                <div class="sub-section" data-aos="fade-up" data-aos-delay="100">
                    <h3>Formulation des produits <span class="toggle">+</span></h3>
                    <div class="description">
                        Formation sur les produits pour une meilleure connaissance et vente. Nous offrons des sessions de formation détaillées pour nos revendeurs, leur permettant de comprendre parfaitement les caractéristiques et les avantages de nos produits. Cette connaissance approfondie aide à améliorer les techniques de vente et à offrir un meilleur service client. Les formations sont régulièrement mises à jour pour intégrer les dernières innovations et tendances du marché.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="200">
                    <h3>Création de gamme <span class="toggle">+</span></h3>
                    <div class="description">
                        Support marketing pour aider à promouvoir les produits. Notre équipe marketing vous fournit tous les outils nécessaires pour promouvoir efficacement nos produits. Cela inclut des brochures, des affiches, des campagnes en ligne, et des stratégies de marketing digital. Nous travaillons en étroite collaboration avec vous pour développer des plans marketing personnalisés qui répondent aux besoins spécifiques de votre marché et maximisent les ventes.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="300">
                    <h3>Logistique et distribution <span class="toggle">+</span></h3>
                    <div class="description">
                        Aide à la logistique et distribution des produits. Nous offrons des solutions logistiques intégrées pour assurer une distribution rapide et efficace de nos produits. Cela comprend la gestion des stocks, la coordination des expéditions, et l'optimisation des chaînes d'approvisionnement. Notre objectif est de vous fournir un service sans faille, garantissant que les produits arrivent en temps voulu et en parfait état.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="400">
                    <h3>Retour d'information <span class="toggle">+</span></h3>
                    <div class="description">
                        Retour d'information pour améliorer les services et produits. Nous valorisons le retour d'information de nos revendeurs et clients. Vos suggestions et commentaires sont essentiels pour nous aider à améliorer nos produits et services. Nous avons mis en place des canaux de communication dédiés pour recueillir vos avis et nous engageons à les utiliser pour apporter des améliorations continues.
                    </div>
                </div>
                <div class="sub-section" data-aos="fade-up" data-aos-delay="500">
                    <h3>Support technique <span class="toggle">+</span></h3>
                    <div class="description">
                        Support technique pour résoudre les problèmes rapidement. Notre équipe technique est disponible pour vous aider à résoudre tout problème lié à nos produits. Que ce soit pour une question de compatibilité, d'installation, ou de performance, nous sommes là pour vous fournir des solutions rapides et efficaces. Notre objectif est de minimiser les interruptions et d'assurer une utilisation optimale de nos produits.
                    </div>
                </div>
               
            </div>
        </div>
    </div>



    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">our Team</a></li>
                </ul>
            </div>
            
        </div>
     
  
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Noman</span></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000
            });

            $('.sub-section h3').click(function() {
                const $description = $(this).siblings('.description');
                const $toggle = $(this).find('.toggle');
                if ($description.is(':visible')) {
                    $description.slideUp();
                    $toggle.text('+');
                } else {
                    $('.description').slideUp();
                    $('.toggle').text('+');
                    $description.slideDown();
                    $toggle.text('-');
                }
            });

            $('.sub-section').click(function() {
                const index = $(this).index();
                $(this).closest('.section-service').find('.carousel').slick('slickGoTo', index);
            });
        });

        AOS.init({
            duration: 1000,
            once: true, // animation should happen only once - while scrolling down
        });
    </script>
</body>
</html>
