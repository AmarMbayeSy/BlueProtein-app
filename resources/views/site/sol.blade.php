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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        body {
            text-align: center;
        }

        h1 {
            color: green;
        }

        .round {
            width: 600px;
            height: 600px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            float: left;
            font-weight: bold;
            shape-outside: circle();
            background-image: url('./immmmage/pexels.jpg');
            background-size: cover;
            background-position: center;
            animation: rotate 10s linear infinite;
            transition: transform 0.3s ease;
        }

        .round:hover {
            transform: scale(1.1);
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        article {
            padding-top: 75px;
            display: inline-block;
        }

        p {
            text-align: justify;
            font-size: 22px;
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
                            <a class="nav-link mx-lg-2" href="./try.html">Accueil</a>
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
                            <a class="nav-link active mx-lg-2" href="./sol.html">Nos produits sur vos sols</a>
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

    <section class="images position-relative" style="height: 400px;">
        <div class="row h-100">
            <div class="h-100">
                <img src="./immmmage/pexels-nc-farm-bureau-mark-2252584.jpg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                <div class="fixed-text">
                    <span class="image-text" style="color: rgb(251, 239, 239); font-size: 4rem;">Nos produits sur vos sols</span>
                </div>
            </div>
        </div>
    </section>
    <div>
        <h2 class="part" style="font-size: 3rem; display: flex; justify-content: center; align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; margin: 2rem;">Pas Lorem Ipsum que ce soit, mais votre Lorem Ipsum!</h2>
    </div>

    <section class="container">
        <h1> Lorem Ipsum</h1>
     
        <div class="round">
          
        </div>
     
        <p>
            How many times were you frustrated while looking
            out for a good collection of programming/
            algorithm/ interview questions? What did you
            expect and what did you get? This portal has been
            created to provide well written, well thought and
            well explained solutions for selected questions.
            An IIT Roorkee alumnus and founder of
            GeeksforGeeks. He loves to solve programming
            problems in most efficient ways. Apart from
            GeeksforGeeks, he has worked with DE Shaw and
            Co. as a software developer and JIIT Noida as
            an assistant professor. It is a good platform
            to learn programming. It is an educational
            website. Prepare for the Recruitment drive of
            product based companies like Microsoft, Amazon,
            Adobe etc with a free online placement
            preparation course.
        </p>
        <p>
            How many times were you frustrated while looking
            out for a good collection of programming/
            algorithm/ interview questions? What did you
            expect and what did you get? This portal has been
            created to provide well written, well thought and
            well explained solutions for selected questions.
            An IIT Roorkee alumnus and founder of
            GeeksforGeeks. He loves to solve programming
            problems in most efficient ways. Apart from
            GeeksforGeeks, he has worked with DE Shaw and
            Co. as a software developer and JIIT Noida as
            an assistant professor. It is a good platform
            to learn programming. It is an educational
            website. Prepare for the Recruitment drive of
            product based companies like Microsoft, Amazon,
            Adobe etc with a free online placement
            preparation course.
        </p>
        <p>
            How many times were you frustrated while looking
            out for a good collection of programming/
            algorithm/ interview questions? What did you
            expect and what did you get? This portal has been
            created to provide well written, well thought and
            well explained solutions for selected questions.
            An IIT Roorkee alumnus and founder of
            GeeksforGeeks. He loves to solve programming
            problems in most efficient ways. Apart from
            GeeksforGeeks, he has worked with DE Shaw and
            Co. as a software developer and JIIT Noida as
            an assistant professor. It is a good platform
            to learn programming. It is an educational
            website. Prepare for the Recruitment drive of
            product based companies like Microsoft, Amazon,
            Adobe etc with a free online placement
            preparation course.
        </p>
        <p>
            How many times were you frustrated while looking
            out for a good collection of programming/
            algorithm/ interview questions? What did you
            expect and what did you get? This portal has been
            created to provide well written, well thought and
            well explained solutions for selected questions.
            An IIT Roorkee alumnus and founder of
            GeeksforGeeks. He loves to solve programming
            problems in most efficient ways. Apart from
            GeeksforGeeks, he has worked with DE Shaw and
            Co. as a software developer and JIIT Noida as
            an assistant professor. It is a good platform
            to learn programming. It is an educational
            website. Prepare for the Recruitment drive of
            product based companies like Microsoft, Amazon,
            Adobe etc with a free online placement
            preparation course.
        </p>
        <p>
            How many times were you frustrated while looking
            out for a good collection of programming/
            algorithm/ interview questions? What did you
            expect and what did you get? This portal has been
            created to provide well written, well thought and
            well explained solutions for selected questions.
            An IIT Roorkee alumnus and founder of
            GeeksforGeeks. He loves to solve programming
            problems in most efficient ways. Apart from
            GeeksforGeeks, he has worked with DE Shaw and
            Co. as a software developer and JIIT Noida as
            an assistant professor. It is a good platform
            to learn programming. It is an educational
            website. Prepare for the Recruitment drive of
            product based companies like Microsoft, Amazon,
            Adobe etc with a free online placement
            preparation course.
        </p>

     
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
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>