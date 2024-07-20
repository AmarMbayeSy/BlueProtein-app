<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style-header.css">
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style-swipe.css">
    <link rel="stylesheet" href="css/style-actualité.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
      
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
                            <a class="nav-link mx-lg-2" href="./partenaires">Nos produits sur vos sols</a>
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
     <!-- image -->
     <section class="images position-relative">
        <div class="row">
          <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./immmmage/pexels-markusspiske-1268101.jpg" class="d-block w-100 " alt="...">
              </div>
              <div class="carousel-item ">
                <img src="./immmmage/pexels-nc-farm-bureau-mark-2252584.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./immmmage/pexels-cenali-2733918.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            
          </div>
          <div class="fixed-text">
            <span class="image-text">Augmenter la vitalité de vos sols pour une agriculture productive, économique et rentable</span>
          </div>
        </div>
      </section>
       <!-- End image -->
<!-- agri-section -->
       <section class="agri-section">
        <div class="card-container">
            <div class="card">
                <img src="./immmmage/agriculteur.jpeg" alt="Agriculture" class="card-image">
                <div class="overlay"></div>
                <div class="card-text">
                    <img src="./immmmage/plante.png" alt="Icon" class="icon">
                    <p>Agriculteur</p>
                </div>
            </div>
            <div class="card">
                <img src="./immmmage/elevage.jpeg" alt="Livestock and Nutrition" class="card-image">
                <div class="overlay"></div>
                <div class="card-text">
                    <img src="./immmmage/fish.png" alt="Icon" class="icon">
                    <p>Élevage</p>
                </div>
            </div>
            <div class="card">
                <img src="./immmmage/collectif.jpeg" alt="Community" class="card-image">
                <div class="overlay"></div>
                <div class="card-text">
                    <img src="./immmmage/presi.png" alt="Icon" class="icon">
                    <p>Collectivité</p>
                </div>
            </div>
            <div class="card">
                <img src="./immmmage/collectif.jpeg" alt="Community" class="card-image">
                <div class="overlay"></div>
                <div class="card-text">
                    <img src="./immmmage/profit.png" alt="Icon" class="icon">
                    <p>Collectivité</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End agri-section -->
    <section>
      <div class="product"> <img src="./immmmage/fleur.png" alt="fleur" class="logo">Nos produits dediés à votre agriculture</div>
     </section>
<!-- unique-collection -->
    <section class="unique-collection">
      <div class="swiper unique-swiper">
        <div class="swiper-wrapper">
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <div class="unique-content swiper-slide">
            <img src="./immmmage/image.jpeg" alt="">
            <div class="unique-text-content">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque, dolores vel
                culpa debitis officia expedita unde?</p>
              <button class="unique-btn">Read more</button>
            </div>
          </div>
          <!-- other swiper slides -->
        </div>
      </div>
    </section>
    <!-- end of unique section -->
    
    
<!-- start of about section -->
 
    <div class="container-fluid">
        <div id="message" class="row">
            <div class="col-12 col-lg-6"> 
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="title">
                            <img src="./immmmage/efficace.png" alt="Logo 1" class="title-logo">
                            <h2>Efficacite et neutralité</h2>
                        </div>
                        <p>Plus de vie dans vos sols favorisant des rendements et une qualité supérieure <br> <br> <br></p>
                        
                        <div class="title">
                            <img src="./immmmage/ecologie.png" alt="Logo 2" class="title-logo">
                            <h2>Ecologie et Durabilité</h2>
                        </div>
                        <p>Notre activité nos permet de favoriser l'esprit durable des agricultures et de promouvoir la production écologiques</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="title">
                            <img src="./immmmage/eco.png" alt="Logo 3" class="title-logo">
                            <h2>Economie participative</h2>
                        </div>
                        <p>Nous utilisons des déchets biologiques issues des secteurs agricole, forestier, d'élevage pour nourrir nos insectes et produire des fertilisants naturels participant à l'économie circulaire</p>
                        <div class="title">
                            <img src="./immmmage/environnement.png" alt="Logo 4" class="title-logo">
                            <h2>Conscience environnementale</h2>
                        </div>
                        <p>Nous sommes engagés pour un usage rationnel des ressources et pouvoir parvenir ainsi à un produit adéquat et durable</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- end of about section -->

    <div class="background-image">
        <div class="text-overlay">
            <h2>Nos produits dédiés à votre agriculture.</h2>
            <p>Rejoignez la révolution verte avec BlueProtein : des solutions biologiques innovantes pour une Agriculture durable au Maroc.</p>
            <p>Nous vous proposons des solutions d'engrais biologiques : biofertilisant et biostimulant faits à base de guano d'insecte pour redonner vie à vos sols et booster vos cultures.</p>
        </div>
    </div>

<!-- actualité-page -->
    <section class="actualite-page">
      <div class="news-container">
          <div class="news-card news-long-card">
              <img src="./immmmage/nat.jpeg" alt="News Image">
              <div class="news-card-content">
                  <h3>Actualité 1</h3>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page.</p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
  
                  </p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
              </div>
          </div>
          <div class="news-card news-short-card">
              <img src="./immmmage/nat.jpeg" alt="News Image">
              <div class="news-card-content">
                  <h3>Actualité 2</h3>
                  <p>Résumé de l'actualité numéro 2. C'est un texte d'exemple pour illustrer la mise en page...</p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
              </div>
          </div>
          <div class="news-card news-short-card">
              <img src="./immmmage/nat.jpeg" alt="News Image">
              <div class="news-card-content">
                  <h3>Actualité 3</h3>
                  <p>Résumé de l'actualité numéro 3. C'est un texte d'exemple pour illustrer la mise en page...</p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
              </div>
          </div>
          <div class="news-card news-long-card">
              <img src="./immmmage/nat.jpeg" alt="News Image">
              <div class="news-card-content">
                  <h3>Actualité 4</h3>
                  <p>Résumé de l'actualité numéro 4. C'est un texte d'exemple pour illustrer la mise en page...</p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
                  <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      Résumé de l'actualité numjpegéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                      
                  </p>
              </div>
          </div>
          <div class="additional-news-cards">
              <div class="news-card additional-news-card">
                  <img src="./immmmage/nat.jpeg" alt="News Image">
                  <div class="news-card-content">
                      <h3>Actualité 5</h3>
                      <p>Résumé de l'actualité numéro 5. C'est un texte d'exemple pour illustrer la mise en page...</p>
                      <p>Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                          Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                          Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                          Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                          Résumé de l'actualité numéro 1. C'est un texte d'exemple pour illustrer la mise en page...
                          
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end actualité-page -->
   <!-- confiance -->
  
  <!-- end confiance -->

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
    <script src="./SCRIPT/script1.js"></script>

    <script >
      // scripts.js

document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
      card.addEventListener('mouseenter', () => {
          card.classList.add('hover');
      });

      card.addEventListener('mouseleave', () => {
          card.classList.remove('hover');
      });
  });
});

  </script>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./SCRIPT/script-swipe.js"></script>
</body>

</html>