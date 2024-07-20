

<!DOCTYPE html>
<html lang="fr">

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
 /<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Tableau de bord BlueProtein </title>
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
            <a href="/posts" class="nav-link">Produits</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Distributeurs</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Actualites</a>
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
          <form method="POST" action="{{ route('logout') }}">
          @csrf
          <li class="nav-item">
            <div class="nav-link">
            <button type="submit" class="fas fa-user-times">Deconnexion</button>
            </div>
          </li>
          </form>
        </ul>
      </div>
    </div>
  </nav>
 <section id="actions" class="bg-light mb-4 py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addPostModal">
            <i class="fas fa-plus"></i> Produit
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addResellerModal">
            <i class="fas fa-plus"></i> Distributeur
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addUserModal">
            <i class="fas fa-plus"></i> Actualite
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addUserModal">
            <i class="fas fa-plus"></i> Collaborateur
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-warning" data-toggle="modal" data-target="#addCultureModal">
            <i class="fas fa-plus"></i> Culture
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-warning" data-toggle="modal" data-target="#addCompositionModal">
            <i class="fas fa-plus"></i> Composition
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-warning" data-toggle="modal" data-target="#addPrecautionModal">
            <i class="fas fa-plus"></i> Precaution
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-warning" data-toggle="modal" data-target="#addUtilisationModal">
            <i class="fas fa-plus"></i> Utilisation
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addCertificationModal">
            <i class="fas fa-plus"></i> Certification
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addAvantageModal">
            <i class="fas fa-plus"></i> Avantages
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addApplicationModal">
            <i class="fas fa-plus"></i> Application
          </a>
        </div>
        <div class="col-md-3 action-btn">
          <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addEtapeDeCultureModal">
            <i class="fas fa-plus"></i> Etape
          </a>
        </div>
    </div>
  </section>
```
<!-- POSTS & INFOS -->
<main id="posts">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Catalogue de produit</h4>
          </div>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Types de Culture</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($produits as $produit)
              <tr>
                <td>{{ $produit->id }}</td>
                <td>{{ $produit->nom_produit }}</td>
                <td>{{ $produit->description1_produit }}</td>
                <td>{{ $produit->culture->culture_produit ?? 'N/A' }}</td>
                <td>
                  <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i> Supprimer
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center text-white bg-primary mb-3 custom-card">
          <div class="card-body">
            <h3>Produits</h3>
            <h4 class="display-4">
              <i class="fas fa-pencil-alt"></i> {{ $nombreProduits }}
            </h4>
            <a href="/posts" class="btn btn-sm btn-outline-light">Voir Tous</a>
          </div>
        </div>

        <div class="card text-center text-white bg-success mb-3 custom-card">
          <div class="card-body">
            <h3>Distributeurs</h3>
            <h4 class="display-4">
              <i class="fas fa-users"></i> 4
            </h4>
            <a href="categories.html" class="btn btn-sm btn-outline-light">Voir Toutes</a>
          </div>
        </div>

        <div class="card text-center text-white bg-warning mb-3 custom-card">
          <div class="card-body">
            <h3>Bloc</h3>
            <h4 class="display-4">
              <i class="fas fa-folder"></i> 5
            </h4>
            <a href="users.html" class="btn btn-sm btn-outline-light">Voir Tous</a>
          </div>
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
            Copyright &copy; <span id="year"></span> BlueProtein
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- MODALS -->
<!-- ADD PRODUCT MODAL -->

<!-- ADD PRODUCT MODAL -->

<div id="addPostModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
        <h5 class="modal-title">Ajouter Produit</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nom_produit">Nom Produit</label>
            <input type="text" id="nom_produit" name="nom_produit" class="form-control" placeholder="Entrez le nom du produit" required />
          </div>
          <div class="form-group">
            <label for="image_produit">Image Produit</label>
            <div class="custom-file">
              <input type="file" id="image_produit" name="image_produit" class="custom-file-input" required />
              <label for="image_produit" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="form-group">
            <label for="id_avantage_1">Avantage 1</label>
            <select id="id_avantage_1" name="id_avantage_1" class="form-control" required>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_avantage_2">Avantage 2</label>
            <select id="id_avantage_2" name="id_avantage_2" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_avantage_3">Avantage 3</label>
            <select id="id_avantage_3" name="id_avantage_3" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_avantage_4">Avantage 4</label>
            <select id="id_avantage_4" name="id_avantage_4" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_avantage_5">Avantage 5</label>
            <select id="id_avantage_5" name="id_avantage_5" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_avantage_6">Avantage 6</label>
            <select id="id_avantage_6" name="id_avantage_6" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($avantages as $avantage)
                <option value="{{ $avantage->id }}">{{ $avantage->avantage_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_1">Composition 1</label>
            <select id="id_composition_1" name="id_composition_1" class="form-control" required>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_2">Composition 2</label>
            <select id="id_composition_2" name="id_composition_2" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_3">Composition 3</label>
            <select id="id_composition_3" name="id_composition_3" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_4">Composition 4</label>
            <select id="id_composition_4" name="id_composition_4" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_5">Composition 5</label>
            <select id="id_composition_5" name="id_composition_5" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_composition_6">Composition 6</label>
            <select id="id_composition_6" name="id_composition_6" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($compositions as $composition)
                <option value="{{ $composition->id }}">{{ $composition->composition_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_1">Utilisation 1</label>
            <select id="id_utilisation_1" name="id_utilisation_1" class="form-control" required>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_2">Utilisation 2</label>
            <select id="id_utilisation_2" name="id_utilisation_2" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_3">Utilisation 3</label>
            <select id="id_utilisation_3" name="id_utilisation_3" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_4">Utilisation 4</label>
            <select id="id_utilisation_4" name="id_utilisation_4" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_5">Utilisation 5</label>
            <select id="id_utilisation_5" name="id_utilisation_5" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_utilisation_6">Utilisation 6</label>
            <select id="id_utilisation_6" name="id_utilisation_6" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($utilisations as $utilisation)
                <option value="{{ $utilisation->id }}">{{ $utilisation->mode_emploi_1 }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_1">Precaution 1</label>
            <select id="id_precaution_1" name="id_precaution_1" class="form-control" required>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_2">Precaution 2</label>
            <select id="id_precaution_2" name="id_precaution_2" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_3">Precaution 3</label>
            <select id="id_precaution_3" name="id_precaution_3" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_4">Precaution 4</label>
            <select id="id_precaution_4" name="id_precaution_4" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_5">Precaution 5</label>
            <select id="id_precaution_5" name="id_precaution_5" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_precaution_6">Precaution 6</label>
            <select id="id_precaution_6" name="id_precaution_6" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($precautions as $precaution)
                <option value="{{ $precaution->id }}">{{ $precaution->precaution_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="description1_produit">Description 1</label>
            <textarea id="description1_produit" name="description1_produit" class="form-control" placeholder="Entrez la première description" required></textarea>
          </div>
          <div class="form-group">
            <label for="description2_produit">Description 2</label>
            <input type="text" id="description2_produit" name="description2_produit" class="form-control" placeholder="Entrez la deuxième description" />
          </div>
          <div class="form-group">
            <label for="id_application">Application</label>
            <select id="id_application" name="id_application" class="form-control" required>
              @foreach($applications as $application)
                <option value="{{ $application->id }}">{{ $application->application_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_culture">Type de Culture</label>
            <select id="id_culture" name="id_culture" class="form-control" required>
              @foreach($cultures as $culture)
                <option value="{{ $culture->id }}">{{ $culture->culture_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_etape">Etape</label>
            <select id="id_etape" name="id_etape" class="form-control" required>
              @foreach($etapes as $etape)
                <option value="{{ $etape->id }}">{{ $etape->etape_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_certification_1">Certification 1</label>
            <select id="id_certification_1" name="id_certification_1" class="form-control" required>
              @foreach($certifications as $certification)
                <option value="{{ $certification->id }}">{{ $certification->certification_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="id_certification_2">Certification 2</label>
            <select id="id_certification_2" name="id_certification_2" class="form-control">
              <option value="">Sélectionner</option>
              @foreach($certifications as $certification)
                <option value="{{ $certification->id }}">{{ $certification->certification_produit }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Enregistrer le produit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




  <!-- ADD RESELLER MODAL -->
<div id="addResellerModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter nouveau revendeur</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('revendeurs.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="phone">Telephone</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <select class="form-control" id="country-code">
                  <option value="+1">+1 (USA)</option>
                  <option value="+33">+33 (France)</option>
                  <option value="+226">+226 (Cote D'ivoire)</option>
                  <option value="+49">+49 (Germany)</option>
                  <option value="+81">+81 (Japan)</option>
                  <option value="+212">+212 (Maroc)</option>
                </select>
              </div>
              <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]*" inputmode="numeric" placeholder="Numero de telephone" required />
            </div>
          </div>
          <div class="form-group">
            <label for="region">Region</label>
            <input type="text" id="region" name="region" class="form-control" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder le revendeur</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <!-- ADD BLOC MODAL -->
<div id="addUserModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Ajouter une Actualité</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('blocs.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="contenu">Rédiger ici</label>
            <input type="text" id="contenu" name="contenu" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_actualite">Image</label>
            <div class="custom-file">
              <input type="file" id="image_actualite" name="image" class="custom-file-input" required />
              <label for="image_actualite" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder Actualité</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD CULTURE MODAL -->
<div id="addCultureModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Culture</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('cultures.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="cultureType">Type de Culture</label>
            <input type="text" id="cultureType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_culture">Image de la Culture</label>
            <div class="custom-file">
              <input type="file" id="image_culture" name="image" class="custom-file-input" required />
              <label for="image_culture" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder la Culture</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- ADD APPLICATION MODAL -->
<div id="addApplicationModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Application</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="applicationType">Type d'Application</label>
            <input type="text" id="applicationType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_application">Image de l'Application</label>
            <div class="custom-file">
              <input type="file" id="image_application" name="image" class="custom-file-input" required />
              <label for="image_application" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder l'Application</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD AVANTAGE MODAL -->
<div id="addAvantageModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter un Avantage</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('avantages.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="avantageType">Type d'Avantage</label>
            <input type="text" id="avantageType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_avantage">Image de l'Avantage</label>
            <div class="custom-file">
              <input type="file" id="image_avantage" name="image" class="custom-file-input" required />
              <label for="image_avantage" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder l'Avantage</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD COMPOSITION MODAL -->
<div id="addCompositionModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Composition</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('compositions.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="compositionType">Type de Composition</label>
            <input type="text" id="compositionType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_composition">Image de la Composition</label>
            <div class="custom-file">
              <input type="file" id="image_composition" name="image" class="custom-file-input" required />
              <label for="image_composition" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder la Composition</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD PRECAUTION MODAL -->
<div id="addPrecautionModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Precaution</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('precautions.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="precautionType">Type de Precaution</label>
            <input type="text" id="precautionType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_precaution">Image de la Precaution</label>
            <div class="custom-file">
              <input type="file" id="image_precaution" name="image" class="custom-file-input" required />
              <label for="image_precaution" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder la Precaution</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD CERTIFICATION MODAL -->
<div id="addCertificationModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Certification</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('certifications.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="certificationType">Nom de l'organisme certifiant</label>
            <input type="text" id="certificationType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_certification">Image de la Certification</label>
            <div class="custom-file">
              <input type="file" id="image_certification" name="image" class="custom-file-input" />
              <label for="image_certification" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder la Certification</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- ADD ETAPE DE CULTURE MODAL -->
<div id="addEtapeDeCultureModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Etape</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('etapes.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="etapeType">Type de Etape</label>
            <input type="text" id="etapeType" name="type" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="image_etape">Image de la Etape</label>
            <div class="custom-file">
              <input type="file" id="image" name="image" class="custom-file-input" required />
              <label for="image_etape" class="custom-file-label">Choisir le fichier</label>
            </div>
            <small class="text-muted">Taille maximale de 3 Mo</small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder la Etape</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ADD UTILISATION MODAL -->
<div id="addUtilisationModal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ajouter une Utilisation</h5>
        <button class="close" data-dismiss="modal">
          <span class="text-white">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('utilisations.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="utilisationType1">Mode d'emploi 1</label>
            <input type="text" id="utilisationType1" name="emploi_1" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="utilisationType2">Mode d'emploi 2</label>
            <input type="text" id="utilisationType2" name="emploi_2" class="form-control" required />
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sauvegarder l'Utilisation</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Turn simple editor to modern editor
    CKEDITOR.replace('addPostEditor');
  </script>
</body>

</html>