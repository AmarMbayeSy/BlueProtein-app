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
  <title>Blogen Theme</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">Blogen</a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categorias</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Usuários</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Seja Bem-vindo Gideon
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Perfil
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Configurações
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
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
          <h1><i class="fas fa-cog"></i> Configurações</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="bg-light mb-4 py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a
            href="index.html"
            class="btn btn-block btn-light">
            <i class="fas fa-arrow-left"></i> Voltar para o Dashboard
          </a>
        </div>

        <div class="col-md-3">
          <a
            href="#"
            class="btn btn-block btn-success">
            <i class="fas fa-check"></i> Salvar Alterações
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SETTINGS -->
  <main id="settings">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Setar Configurações</h4>
            </div>
            <div class="card-body">
              <form>
                <fieldset class="form-group">
                  <legend>Permitir Registro de Usuário</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input
                        type="radio"
                        name="allow-user-registration"
                        class="form-check-input"
                        value="yes"
                        checked
                      /> Sim
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input
                        type="radio"
                        name="allow-user-registration"
                        class="form-check-input"
                        value="no"
                      /> Não
                    </label>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <legend>Formato da Página Inicial</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input
                        type="radio"
                        name="homepage-format"
                        class="form-check-input"
                        value="blogpage"
                        checked
                      /> Página do Blog
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input
                        type="radio"
                        name="homepage-format"
                        class="form-check-input"
                        value="homepage"
                      /> Página Inicial
                    </label>
                  </div>
                </fieldset>
              </form>
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
            Copyright &copy; <span id="year"></span> Blogen
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- MODALS -->

  <!-- ADD POST MODAL -->
  <div id="addPostModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h5 class="modal-title">Adicionar Post</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="category">Categoria</label>
              <select class="form-control">
                <option value="">Desenvolvimento Web</option>
                <option value="">Desenvolvimento Mobile</option>
                <option value="">Desenvolvimento Desktop</option>
                <option value="">Negócios</option>
                <option value="">Marketing</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Subir Imagem</label>
              <div class="custom-file">
                <input type="file" id="image" class="custom-file-input" placeholder="enviar" />
                <label for="image" class="custom-file-label">Escolher Arquivo</label>
              </div>
              <small class="text-muted">Tamanho máximo de 3mb</small>
            </div>
            <div class="form-group">
              <label for="content">Conteúdo</label>
              <textarea name="addPostEditor" class="form-control"></textarea>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Salvar Publicação</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div id="addCategoryModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white bg-success">
          <h5 class="modal-title">Adicionar Categoria</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="category">Nome da Categoria</label>
              <input type="text" class="form-control" />
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Salvar Categoria</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div id="addUserModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title">Adicionar Usuário</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" />
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" />
            </div>
            <div class="form-group">
              <label for="password2">Confirmar Senha</label>
              <input type="password" class="form-control" />
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Salvar Usuário</button>
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