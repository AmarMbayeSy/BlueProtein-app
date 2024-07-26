<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produit Details</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style-header.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style-service.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset('css 2/swiper-bundle.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css 2/style.css') }}">

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
                            <a class="nav-link mx-lg-2" aria-current="page" href="./apropos">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" href="./try">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Produits
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./produits">Germination</a></li>
                              <li><a class="dropdown-item" href="./produits">Semis</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="./produits">Végététative</a></li>
                              <li><a class="dropdown-item" href="./produits">Floraison</a></li>
                            </ul>
                          </li>
                         
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./Services">Agriculteur</a></li>
                              <li><a class="dropdown-item" href="./Services">Revendeur</a></li>
                            
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="./sol">Nos produits sur vos sols</a>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
      <!-- End Navbar -->

      <section class="service">
          <div class="container-service">
              <div class="header-service">
                  <h1>{{ $produit->nom_produit }}</h1>
                  <p>{{ $produit->description1_produit }}</p>
              </div>
              <div class="content-service">
                  <img src="{{ asset('storage/' . $produit->image_produit) }}" alt="{{ $produit->nom_produit }}">
                  <div class="text-service">
                      <h2>{{ $produit->description2_produit }}</h2>
                  </div>
              </div>
          </div>
      </section>

      <section class="serve">
        <div class="container-fluid-serve">
          <div class="row">
            <div class="col-8">
            <h1>Certification</h1>
            <img src="{{ asset('storage/' . $produit->certification1->image_certification) }}">
          </div>
          <div class="col-4">
            <h1>Fertigation</h1>
            <img class="logo" src="{{ asset('storage/' . $produit->application->image_application) }}">
          </div>
          </div>
        </div>
      </section>
      <br>
      <br>
      <br>
      <br>
      <br>

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
                    @if ($produit->avantage1)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage1->image_avantage) }}" alt=""></span>{{ $produit->avantage1->avantage_produit }}</li>
                    @endif
                    @if ($produit->avantage2)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage2->image_avantage) }}" alt=""></span>{{ $produit->avantage2->avantage_produit }}</li>
                    @endif
                    @if ($produit->avantage3)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage3->image_avantage) }}" alt=""></span>{{ $produit->avantage3->avantage_produit }}</li>
                    @endif
                </ul>
                <ul>
                    @if ($produit->avantage4)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage4->image_avantage) }}" alt=""></span>{{ $produit->avantage4->avantage_produit }}</li>
                    @endif
                    @if ($produit->avantage5)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage5->image_avantage) }}" alt=""></span>{{ $produit->avantage5->avantage_produit }}</li>
                    @endif
                    @if ($produit->avantage6)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->avantage6->image_avantage) }}" alt=""></span>{{ $produit->avantage6->avantage_produit }}</li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Section Composition -->
        <div id="composition" class="tab">
            <div class="columns">
                <ul>
                    @if ($produit->composition1)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition1->image_composition) }}" alt=""></span>{{ $produit->composition1->composition_produit }}</li>
                    @endif
                    @if ($produit->composition2)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition2->image_composition) }}" alt=""></span>{{ $produit->composition2->composition_produit }}</li>
                    @endif
                    @if ($produit->composition3)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition3->image_composition) }}" alt=""></span>{{ $produit->composition3->composition_produit }}</li>
                    @endif
                </ul>
                <ul>
                    @if ($produit->composition4)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition4->image_composition) }}" alt=""></span>{{ $produit->composition4->composition_produit }}</li>
                    @endif
                    @if ($produit->composition5)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition5->image_composition) }}" alt=""></span>{{ $produit->composition5->composition_produit }}</li>
                    @endif
                    @if ($produit->composition6)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->composition6->image_composition) }}" alt=""></span>{{ $produit->composition6->composition_produit }}</li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Section Utilisation -->
        <div id="usage" class="tab">
            <div class="columns">
                <ul>
                    @if ($produit->utilisation1)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation1->image_utilisation) }}" alt=""></span>{{ $produit->utilisation1->utilisation_produit }}</li>
                    @endif
                    @if ($produit->utilisation2)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation2->image_utilisation) }}" alt=""></span>{{ $produit->utilisation2->utilisation_produit }}</li>
                    @endif
                    @if ($produit->utilisation3)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation3->image_utilisation) }}" alt=""></span>{{ $produit->utilisation3->utilisation_produit }}</li>
                    @endif
                </ul>
                <ul>
                    @if ($produit->utilisation4)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation4->image_utilisation) }}" alt=""></span>{{ $produit->utilisation4->utilisation_produit }}</li>
                    @endif
                    @if ($produit->utilisation5)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation5->image_utilisation) }}" alt=""></span>{{ $produit->utilisation5->utilisation_produit }}</li>
                    @endif
                    @if ($produit->utilisation6)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->utilisation6->image_utilisation) }}" alt=""></span>{{ $produit->utilisation6->utilisation_produit }}</li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Section Précaution -->
        <div id="precaution" class="tab">
            <div class="columns">
                <ul>
                    @if ($produit->precaution1)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution1->image_precaution) }}" alt=""></span>{{ $produit->precaution1->precaution_produit }}</li>
                    @endif
                    @if ($produit->precaution2)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution2->image_precaution) }}" alt=""></span>{{ $produit->precaution2->precaution_produit }}</li>
                    @endif
                    @if ($produit->precaution3)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution3->image_precaution) }}" alt=""></span>{{ $produit->precaution3->precaution_produit }}</li>
                    @endif
                </ul>
                <ul>
                    @if ($produit->precaution4)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution4->image_precaution) }}" alt=""></span>{{ $produit->precaution4->precaution_produit }}</li>
                    @endif
                    @if ($produit->precaution5)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution5->image_precaution) }}" alt=""></span>{{ $produit->precaution5->precaution_produit }}</li>
                    @endif
                    @if ($produit->precaution6)
                        <li><span class="logo"><img src="{{ asset('storage/' . $produit->precaution6->image_precaution) }}" alt=""></span>{{ $produit->precaution6->precaution_produit }}</li>
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
      <script src="{{ asset('SCRIPT/script.js') }}"></script>
      <script src="{{ asset('SCRIPT/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('SCRIPT/script1.js') }}"></script>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const tabButtons = document.querySelectorAll('.tab-button');
          const tabContents = document.querySelectorAll('.tab');

          tabButtons.forEach(button => {
            button.addEventListener('click', function () {
              const targetTab = this.dataset.tab;

              tabButtons.forEach(btn => btn.classList.remove('active'));
              this.classList.add('active');

              tabContents.forEach(content => {
                if (content.id === targetTab) {
                  content.classList.add('active');
                } else {
                  content.classList.remove('active');
                }
              });
            });
          });
        });
     </script>


  </body>
</html>