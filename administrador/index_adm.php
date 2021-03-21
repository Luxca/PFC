<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PFC</title>
    <link rel="stylesheet" type="text/css" href="../usuario/style.css">
</head>
  
<body>

<header>
    <div class="container-fluid" id="nav">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index_adm.php">
                        <img src="../usuario/img/logo.png" id="logo">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index_adm.php">
                                    <p class="text-monospace">Página Inicial</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="planosAula_adm.php">
                                    <p class="text-monospace">Planos de Aula</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="disciplinas_adm.php">
                                    <p class="text-monospace">Disciplinas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="temasTransversais_adm.php">
                                    <p class="text-monospace">Temas Transversais</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="jogos_adm.php">
                                    <p class="text-monospace">Jogos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/index.php">
                                    <p class="text-monospace">Sair</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<hr />

<center><h5> Bem-vindo a página de administração do sistema </h5></center>
  <section class="indexAdm">  
      <div class="container">  
          <div clas="col-sm-12">
              <div class="row py-3"> 
                  <div class="col-sm-3">  
                    <a href="cadastrar_jogo.php" id="botao" class="btn btn-primary"><p>Cadastrar Jogo</p></a>
                  </div>
                  <div class="col-sm-3">  
                    <a href="cadastrar_disciplina.php" id="botao" class="btn btn-primary"><p>Cadastrar Disciplina</p></a>
                  </div>
                  <div class="col-sm-3">  
                    <a href="cadastrar_tema.php" id="botao" class="btn btn-primary"><p>Cadastrar Tema Transversal</p></a>
                  </div>
                  <div class="col-sm-3">  
                    <a href="cadastrar_plano.php" id="botao" class="btn btn-primary"><p>Cadastrar Plano de Aula</p></a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="footer mt-auto py-4 bg-light" id="rodape">
      <div class="col-sm-12">
        <span class="text-muted">&copy 2020</span>
      </div>
    </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
