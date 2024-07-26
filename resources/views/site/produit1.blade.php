<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produit Details</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/style3.css">
      <link rel="stylesheet" href="css/style-header.css">
      <link rel="stylesheet" href="css2/swiper-bundle.min.css">
      <link rel="stylesheet" href="css2/style.css">

      <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="css/style-service.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                              <a class="nav-link mx-lg-2" aria-current="page" href="./apropos.html">A propos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link mx-lg-2" href="./try.html">Accueil</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link mx-lg-2 active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Produits
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./produits.html">Germination</a></li>
                                  <li><a class="dropdown-item" href="./produits.html">Semis</a></li>
                                  <li><a class="dropdown-item" href="./produits.html">Végétative</a></li>
                                  <li><a class="dropdown-item" href="./produits.html">Floraison</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Services
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./Services.html">Agriculteur</a></li>
                                  <li><a class="dropdown-item" href="./Services.html">Revendeur</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link mx-lg-2" href="./partenaires.html">Nos produits sur vos sols</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <a href="#" class="login-button">Nous Rejoindre</a>
              <a href="#" class="login-button">Contact</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
      </nav>
      <!-- End Navbar -->

      <section class="product-details">
          <div class="container">
              <div class="header">
                  <h1>{{ $produit->nom_produit }}</h1>
                  <p>{{ $produit->description1_produit }}</p>
              </div>
              <div class="content">
                  <img src="{{ asset('images/' . $produit->image_produit) }}" alt="{{ $produit->nom_produit }}">
                  <div class="text">
                      <h2>{{ $produit->description2_produit }}</h2>
                  </div>
              </div>
          </div>
      </section>

      <section class="info-tabs">
          <button class="tab-button active" data-tab="advantages">Avantages</button>
          <button class="tab-button" data-tab="composition">Composition</button>
          <button class="tab-button" data-tab="usage">Utilisation</button>
          <button class="tab-button" data-tab="precaution">Précaution</button>
      </section>

      <section class="tab-content">
          <div id="advantages" class="tab active">
              <div class="columns">
                  <ul>
                      @if ($produit->avantages)
                          @foreach ($produit->avantages as $avantage)
                              <li><span class="logo"><img src="{{ asset('images/icons/' . $avantage->icon) }}" alt="{{ $avantage->nom }}"></span>{{ $avantage->description }}</li>
                          @endforeach
                      @endif
                  </ul>
              </div>
          </div>
          <div id="composition" class="tab">
              <div class="columns">
                  <ul>
                      @if ($produit->compositions)
                          @foreach ($produit->compositions as $composition)
                              <li>{{ $composition->description }}</li>
                          @endforeach
                      @endif
                  </ul>
              </div>
          </div>
          <div id="usage" class="tab">
              <div class="columns">
                  <ul>
                      @if ($produit->utilisations)
                          @foreach ($produit->utilisations as $utilisation)
                              <li>{{ $utilisation->description }}</li>
                          @endforeach
                      @endif
                  </ul>
              </div>
          </div>
          <div id="precaution" class="tab">
              <div class="columns">
                  <ul>
                      @if ($produit->precautions)
                          @foreach ($produit->precautions as $precaution)
                              <li>{{ $precaution->description }}</li>
                          @endforeach
                      @endif
                  </ul>
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
      <script src="./SCRIPT/script.js"></script>
      <script src="./SCRIPT/swiper-bundle.min.js"></script>
      <script src="./SCRIPT/script.js"></script>
      <script src="./SCRIPT/script1.js"></script>

  </body>
</html>