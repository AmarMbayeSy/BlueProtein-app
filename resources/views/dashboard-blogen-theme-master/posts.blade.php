<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Posts Blogen Theme</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">BlueProtein</a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link active">Tableau de bord</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Produits</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Distributeurs</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Actualités</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Connexion
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profil
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Paramètres
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times"></i> Déconnexion
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- HEADER -->
  <header id="main-header" class="text-white bg-primary py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-pencil-alt"></i> Produits</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- SEARCH -->
  <section id="search" class="bg-light mb-4 py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisar Posts..." />
            <div class="input-group-append">
              <button class="btn btn-primary">Rechercher produit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <main id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Produits Enregistrés</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Description</th>
                  <th>types de Culture</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>BLUE STIMULANT</td>
                  <td>Biostimulant liquide à base de guano d’insectes</td>
                  <td>Pour Tous Types De Cultures</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>BLUE STIMULANT GOLD</td>
                  <td>Biostimulant liquide à très concentre en guano d’insecte</td>
                  <td>Pour Tous Types De Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BLUE ALGEA</td>
                  <td>Fertilisant liquide à base d’algues marines</td>
                  <td>Pour Tous Types de Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BLUE ALGEA</td>
                  <td>Fertilisant liquide à base d’algues marines</td>
                  <td>Pour Tous Types de Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BLUE ALGEA</td>
                  <td>Fertilisant liquide à base d’algues marines</td>
                  <td>Pour Tous Types de Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BLUE ALGEA</td>
                  <td>Fertilisant liquide à base d’algues marines</td>
                  <td>Pour Tous Types de Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BLUE ALGEA</td>
                  <td>Fertilisant liquide à base d’algues marines</td>
                  <td>Pour Tous Types de Culture</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Plus de Détails
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Anterior</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Próxima</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer id="main-footer" class="text-white bg-dark mt-5 py-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span> Blogen
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>