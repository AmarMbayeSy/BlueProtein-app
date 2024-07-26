<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page Design</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/style-header.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
              :root {
            --angle: 45deg;
            --opacity: 0.5;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .colorful-border {
            border-radius: 20px;
            padding: 2rem;
            margin: auto;
            position: relative;
            width: 600px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            animation: borderAnimation 5s infinite;
            margin-right: -70px;
            display: grid;
            place-content: center;
            text-align: center;
            font-size: 1.5em;
            --border-size: 0.3rem;
            border: var(--border-size) solid transparent;
            border-image: conic-gradient(
                    from var(--angle),
                    #FF8000 0deg 90deg,
                    #2128BF 180deg 270deg,
                    #28a745 270deg 360deg
              
                )
                1 stretch;
            background: rgb(255 255 255 / var(--opacity));
        }

        @supports (background: paint(houdini)) {
            @property --opacity {
                syntax: "<number>";
                initial-value: 0.5;
                inherits: false;
            }

            @property --angle {
                syntax: "<angle>";
                initial-value: 0deg;
                inherits: false;
            }

            @keyframes opacityChange {
                to {
                    --opacity: 1;
                }
            }

            @keyframes rotate {
                to {
                    --angle: 360deg;
                }
            }

            .colorful-border {
                animation: rotate 4s linear infinite, opacityChange 3s infinite alternate;
            }

            .support-warning {
                display: none;
            }
        }

        .colorful-border img {
        width: 600px;
        height: auto;
        }


        .agriculture {
            background-color: #c7c7c7;
            display: grid;
            place-content: center;
            gap: 0.5em;
            text-align: center;
            line-height: 1.42;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
                "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
                sans-serif;
        }

        .content-box {
            background-image: url(https://www.transparenttextures.com/patterns/asfalt-dark.png);
            opacity: 1;
            display: flex;
            align-items: center;
            position: relative;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-section {
            position: relative;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        .text-section h2 {
            margin: 0;
            color: #333;
        }

        .text-section h3 {
            margin: 10px 0 0 0;
            color: #333;
        }

        .text-section h4 {
            margin: 10px 0;
            color: #ffd700;
        }

        .text-section p {
            color: #666;
        }

        .content-box.reverse {
            flex-direction: row-reverse;
        }

        .text-section.extra {
            margin-right: 10px;
        }

        .content-box:not(.reverse) .text-section.extra {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"> <img src="./immmmage/6fef3dd9faf34f158d1563fcd8052d6c.jpeg" alt="logo" class="logo"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " aria-current="page" href="./apropos.html">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2" href="./try.html">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Produits
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./produits.html">Germination</a></li>
                              <li><a class="dropdown-item" href="./produits.html">Semis</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="./produits.html">Végététative</a></li>
                              <li><a class="dropdown-item" href="./produits.html">Floraison</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./Services.html">Agriculteur</a></li>
                              <li><a class="dropdown-item" href="./Services.html">Revendeur</a></li>
                             
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  mx-lg-2" href="./sol.html">Nos produits sur vos sols</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-button">Nous Rejoindre </a>
            <a href="#" class="login-button">Contact</a>
             <span class="language-selector">
              <a href="#" class="language-button">FR <span>&#9660;</span></a>
              <a href="#" class="language-dropdown">  <button>EN</button></a>
          </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->

    <section class="images position-relative" style="height: 500px;">
        <div class="row h-100">
            <div class="h-100">
                <img src="./immmmage/agriculteur.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                <div class="fixed-text">
                    <span class="image-text" style="color: rgb(251, 239, 239); font-size: 4rem;">Agriculteur</span>
                </div>
            </div>
        </div>
    </section>
    <section class="agriculture">
        <div class="content-box">
        <div class="colorful-border">
            <img src="./immmmage/sos1.jpeg" alt="Image">
        </div>
        <div class="text-section">
            <h2>Diagnostique</h2>
            <h3>Tests d’industrialisation</h3>
            <h4>Tests pour dossiers d’homologation</h4>
            <p>En parallèle de la montée en échelle, la préparation des dossiers d’homologation implique la réalisation de nombreux tests, y compris de validation de l’absence de toxicité et écotoxicité des substances actives et des produits formulés. Ces dossiers sont préparés progressivement en s’appuyant sur l’expertise du service réglementaire du groupe.</p>
        </div>
    </div>

    <div class="content-box reverse">
        <div class="colorful-border">
            <img src="./immmmage/sos1.jpeg" alt="Image">
        </div>
        <div class="text-section extra">
            <h2>Recommendation de programme de cultures</h2>
            <h3>Tests d’industrialisation</h3>
            <h4>Tests pour dossiers d’homologation</h4>
            <p>En parallèle de la montée en échelle, la préparation des dossiers d’homologation implique la réalisation de nombreux tests, y compris de validation de l’absence de toxicité et écotoxicité des substances actives et des produits formulés. Ces dossiers sont préparés progressivement en s’appuyant sur l’expertise du service réglementaire du groupe.</p>
            <p>En parallèle de la montée en échelle, la préparation des dossiers d’homologation implique la réalisation de nombreux tests, y compris de validation de l’absence de toxicité et écotoxicité des substances actives et des produits formulés. Ces dossiers sont préparés progressivement en s’appuyant</p>
        </div>
    </div>

    <div class="content-box">
        <div class="colorful-border">
            <img src="./immmmage/sos1.jpeg" alt="Image">
        </div>
        <div class="text-section extra">
            <h2>Maîtrise des process technologiques</h2>
            <h3>Autres Tests</h3>
            <h4>Autres Dossiers</h4>
            <p>Cette section contient des informations supplémentaires sur d'autres tests et procédures nécessaires pour la conformité réglementaire et l'approbation des produits. Cela inclut des études approfondies sur les impacts environnementaux et la sécurité des produits.</p>
            <p>En parallèle de la montée en échelle, la préparation des dossiers d’homologation implique la réalisation de nombreux tests, y compris de validation de l’absence de toxicité toxicité toxicité toxicité toxicité toxicité</p>
        </div>
    </div>
    </section>

    <section class="gallery">
        <div class="product-gallery">
        <div class="product-item" onclick="openModal('product1')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 1">
            <h3>Produit 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product2')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 2">
            <h3>Produit 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product3')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 3">
            <h3>Produit 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product4')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 4">
            <h3>Produit 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product5')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 5">
            <h3>Produit 5</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product6')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 6">
            <h3>Produit 6</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product7')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 7">
            <h3>Produit 7</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product8')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 8">
            <h3>Produit 8</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product9')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 9">
            <h3>Produit 9</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product10')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 10">
            <h3>Produit 10</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product11')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 11">
            <h3>Produit 11</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
        <div class="product-item" onclick="openModal('product12')">
            <img src="./immmmage/pexels-goumbik-298696.jpg" alt="Produit 12">
            <h3>Produit 12</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="./produit1.html">   <button class="button">View More</button></a>
        </div>
    </div>

    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle"></h2>
            <img id="modalImage" src="" alt="Image du Produit">
            <p id="modalDescription"></p>
        </div>
    </div>
        </section>
 

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
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Our Team</a></li>
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

    <script src="./SCRIPT/gallery.js"></script>

 
</body>
</html>