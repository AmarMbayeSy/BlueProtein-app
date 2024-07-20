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
            background: linear-gradient(90deg, var(--orange) 0%, var(--blue) 100%);
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .custom-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: calc(200vh - 2px); /* Subtract navbar height */
            padding: 10px;
        }
        .custom-section {
            display: flex;
            flex-direction: column;
            border: 2px solid #800080;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 1200px;
        }
        .custom-dropdown {
            width: 200px;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"> <path d="M7.247 11.14 2.451 6.345A.5.5 0 0 1 2.451 5h11.098a.5.5 0 0 1 .354.854L8.753 11.14a.5.5 0 0 1-.707 0z"/> </svg>') no-repeat right 10px center;
            background-color: #f9f9f9;
        }
        .custom-map-container {
            width: 100%;
            height: 600px;
            border: 1px solid #000;
            margin-top: 20px;
        }
        .legend {
            margin-top: 10px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 5px;
            display: inline-block;
        }
        .legend div {
            margin-bottom: 5px;
        }
    </style>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
                            <a class="nav-link mx-lg-2 " aria-current="page" href="./apropos">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="./try">Accueil</a>
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
                              <li><a class="dropdown-item" href="./services">Agriculteur</a></li>
                              <li><a class="dropdown-item" href="#">Revendeur</a></li>
                             
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2" href="./partenaires">Nos produits sur vos sols</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-button">Nous Rejoindre </a>
            <a href="#" class="login-button">Contact</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->

    <section class="images position-relative" style="height: 400px;">
        <div class="row h-100">
            <div class="h-100">
                <img src="./immmmage/voiture.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                <div class="fixed-text">
                    <span class="image-text" style="color: rgb(251, 239, 239); font-size: 4rem;">Nos partenaires revendeurs</span>
                </div>
            </div>
        </div>
    </section>
    <div>
        <h2 class="part" style="font-size: 3rem; display: flex; justify-content: center; align-items: center; font-family: Georgia, 'Times New Roman', Times, serif; margin: 2rem;">Trouver nos partenaires revendeurs prés de chez vous</h2>
    </div>

    <section>
        <div class="custom-container">
            <section class="custom-section">
                <select id="region-select" class="custom-dropdown">
                    <option value="" disabled selected>Région</option>
                    <option value="casablanca">Casablanca</option>
                    <option value="rabat">Rabat</option>
                    <option value="oujda">Oujda</option>
                    <option value="marrakech">Marrakech</option>
                    <option value="kenitra">Kénitra</option>
                    <option value="fes">Fès</option>
                    <option value="tangier">Tanger</option>
                    <option value="agadir">Agadir</option>
                    <option value="meknes">Meknès</option>
                    <option value="nador">Nador</option>
                    <option value="tetouan">Tétouan</option>
                    <option value="safi">Safi</option>
                    <option value="errachidia">Errachidia</option>
                    <option value="beni_mellal">Beni Mellal</option>
                    <option value="laayoune">Laâyoune</option>
                    <option value="essaouira">Essaouira</option>
                    <option value="ouarzazate">Ouarzazate</option>
                    <option value="el_jadida">El Jadida</option>
                    <option value="taza">Taza</option>
                    <option value="tan_tan">Tan-Tan</option>
                    <!-- Ajoutez plus de villes ici -->
                </select>
                <div id="custom-map" class="custom-map-container"></div>
                <div class="legend">
                    <div><span style="background-color: #ff0000; padding: 5px; border-radius: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Légende 1</div>
                    <div><span style="background-color: #00ff00; padding: 5px; border-radius: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Légende 2</div>
                    <div><span style="background-color: #0000ff; padding: 5px; border-radius: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Légende 3</div>
                </div>
            </section>
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
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
            document.addEventListener('DOMContentLoaded', () => {
                const map = L.map('custom-map').setView([33.5731, -7.5898], 6);
    
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
    
                const regionCoordinates = {
                    casablanca: {coords: [33.5731, -7.5898], name: "Nom A", phone: "123-456-789"},
                    rabat: {coords: [34.020882, -6.84165], name: "Nom B", phone: "987-654-321"},
                    oujda: {coords: [34.6814, -1.9086], name: "Nom C", phone: "456-789-123"},
                    marrakech: {coords: [31.6295, -7.9811], name: "Nom D", phone: "321-654-987"},
                    kenitra: {coords: [34.261, -6.5802], name: "Nom E", phone: "789-123-456"},
                    fes: {coords: [34.0331, -5.0003], name: "Nom F", phone: "654-987-321"},
                    tangier: {coords: [35.7595, -5.834], name: "Nom G", phone: "147-258-369"},
                    agadir: {coords: [30.4278, -9.5981], name: "Nom H", phone: "258-369-147"},
                    meknes: {coords: [33.8965, -5.5473], name: "Nom I", phone: "369-147-258"},
                    nador: {coords: [35.1688, -2.9335], name: "Nom J", phone: "741-852-963"},
                    tetouan: {coords: [35.5785, -5.3684], name: "Nom K", phone: "852-963-741"},
                    safi: {coords: [32.2994, -9.2372], name: "Nom L", phone: "963-741-852"},
                    errachidia: {coords: [31.9314, -4.4322], name: "Nom M", phone: "159-753-486"},
                    beni_mellal: {coords: [32.3372, -6.3498], name: "Nom N", phone: "753-486-159"},
                    laayoune: {coords: [27.1253, -13.1625], name: "Nom O", phone: "486-159-753"},
                    essaouira: {coords: [31.5085, -9.7595], name: "Nom P", phone: "951-357-468"},
                    ouarzazate: {coords: [30.9189, -6.8934], name: "Nom Q", phone: "357-468-951"},
                    el_jadida: {coords: [33.2311, -8.5003], name: "Nom R", phone: "468-951-357"},
                    taza: {coords: [34.21, -3.97], name: "Nom S", phone: "753-159-486"},
                    tan_tan: {coords: [28.4385, -11.1043], name: "Nom T", phone: "159-486-753"},
                    // Ajoutez plus de villes ici
                };
    
                const markers = {};
    
                for (const [region, data] of Object.entries(regionCoordinates)) {
                    const popupContent = `<b>${region.charAt(0).toUpperCase() + region.slice(1)}</b><br>Nom: ${data.name}<br>Téléphone: ${data.phone}`;
                    const marker = L.marker(data.coords).addTo(map).bindPopup(popupContent);
                    markers[region] = marker;
                }
    
                document.getElementById('region-select').addEventListener('change', (event) => {
                    const selectedRegion = event.target.value;
                    if (regionCoordinates[selectedRegion]) {
                        map.setView(regionCoordinates[selectedRegion].coords, 13);
                        markers[selectedRegion].openPopup();
                    }
                });
            });
        </script>
</body>
</html>