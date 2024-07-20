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
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style-header.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style5.css">
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
                            <a class="nav-link mx-lg-2 active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link mx-lg-2  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./Services">Agriculteur</a></li>
                              <li><a class="dropdown-item" href="./Services">Revendeurs</a></li>
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
    <section class="images position-relative">
        <div class="row">
        
              <div>
                <img src="./images/banner1.jpeg" class="d-block w-100" alt="..." style="filter: brightness(0.5);">
              </div>
            </div>
            
          </div>
          <div class="fixed-text">
            <span class="image-text">Notre catalogue de produits <style> .image-text{color: rgb(251, 239, 239); font-size: 4rem;}</style></span>
          </div>
        </div>
      </section>
      </header>

      <!-- barre de recherche -->
      <div class="filters">
        <h2>Filtres</h2>
        <div class="search-bar">
            <input type="text" placeholder="Rechercher">
            <button>Rechercher</button>
        </div>
        <div class="selected-filters">
            <div class="filter-tag">Culture horticole <span class="remove">✕</span></div>
            <div class="filter-tag">Croissance végétative <span class="remove">✕</span></div>
            <div class="filter-tag">Espace vert <span class="remove">✕</span></div>
        </div>
       
    </div>
    <!-- End barre de recherche -->


<section class="germination">
  <div class="title">
    <h2> 
      <span class="logo1"><img src="./immmmage/seed.png" alt="logo"></span>  
      Germination 
      <span class="logo1"><img src="./immmmage/seed.png" alt="logo"></span> 
    </h2>
  </div>
  
    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                        <img src="./immmmage/image.jpeg" alt="" class="card-img">
                         
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                     

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                   

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content " >                   
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</section>

<section class="germination">
  <div class="title">
    <h2> 
      <span class="logo1"><img src="./immmmage/semis.png" alt="logo"></span>  
      Semis
      <span class="logo1"><img src="./immmmage/semis.png" alt="logo"></span> 
    </h2>
  </div>
  
    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                        <img src="./immmmage/image.jpeg" alt="" class="card-img">
                         
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                     

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                   

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content " >                   
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</section>

<section class="germination">
  <div class="title">
    <h2> 
      <span class="logo1"><img src="./immmmage/végétative.jpg" alt="logo"></span>  
     Végétative
      <span class="logo1"><img src="./immmmage/végétative.jpg" alt="logo"></span> 
    </h2>
  </div>
  
    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                        <img src="./immmmage/image.jpeg" alt="" class="card-img">
                         
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                     

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                   

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content " >                   
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</section>

<section class="germination">
  <div class="title">
    <h2> 
      <span class="logo1"><img src="./immmmage/seed.png" alt="logo"></span>  
      Floraison 
      <span class="logo1"><img src="./immmmage/seed.png" alt="logo"></span> 
    </h2>
  </div>
  
    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                        <img src="./immmmage/image.jpeg" alt="" class="card-img">
                         
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                    

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                     

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content">
                   

                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide" style="padding: 0;">
                  <div class="image-content " >                   
                      <div class="card-image">
                          <img src="./immmmage/image.jpeg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</section>

<section>
  <img src="./immmmage/germination.webp" alt="" width="100%">
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
     <script src="./SCRIPT/swiper-bundle.min.js"></script>

     <!-- JavaScript -->
     <script src="./SCRIPT/script2.js"></script>

</body>
</html>