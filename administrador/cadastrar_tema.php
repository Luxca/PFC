<?php
  require_once '../classes/tema_transversal.php';
  require_once "../conexao/conexao.php";
  
  $t = new Tema_Transversal;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PFC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

    <div class="container-fluid">

        <div class="col-sm-12 text-center my-3">
            <h1>Cadastro de Tema Transversal</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-command" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                        d="M2 3.5A1.5 1.5 0 003.5 5H5V3.5a1.5 1.5 0 10-3 0zM6 6V3.5A2.5 2.5 0 103.5 6H6zm8-2.5A1.5 1.5 0 0112.5 5H11V3.5a1.5 1.5 0 013 0zM10 6V3.5A2.5 2.5 0 1112.5 6H10zm-8 6.5A1.5 1.5 0 013.5 11H5v1.5a1.5 1.5 0 01-3 0zM6 10v2.5A2.5 2.5 0 113.5 10H6zm8 2.5a1.5 1.5 0 00-1.5-1.5H11v1.5a1.5 1.5 0 003 0zM10 10v2.5a2.5 2.5 0 102.5-2.5H10z"
                        clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M10 6H6v4h4V6zM5 5v6h6V5H5z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
        <div class="col-sm-8">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" method="POST">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome" maxlength="30" placeholder="Nome..." required>
              </div>

              <div class="form-group col-sm-12">
                <label for="inputDescricao">Descrição</label>
                <input type="descricao" name="descricao" class="form-control" id="inputDescricao" placeholder="Descrição..." required>
              </div>

              <div class="form-group col-sm-12">
                <a href="index_adm.php" class="btn" id="botao">Cancelar </a>
                <button id="botao" type="submit" class="btn">Cadastrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php
        if(isset($_POST['nome']))
        {
         $nome = addslashes($_POST['nome']);
         $descricao = addslashes($_POST['descricao']);

         if(!empty($nome) && !empty($descricao))
         {
            $t->conectar("pfc", "127.0.0.1", "root", "");
            if($t->msgErro == "")
            {

                if($t->cadastrar($nome, $descricao))
                {
                  ?>
                    <div id="msg-sucesso">
                      Cadastrado com sucesso!
                    </div>
                  <?php
                }
                else
                {
                  ?>
                    <div id="msg-erro">
                      Tema Transversal já cadastrado;
                    </div>
                  <?php
                }
              }
            }
            else
            {
              ?>
                <div id="msg-erro">
                  <?php echo "Erro: ".$u->msgErro ?>
                </div> 
              <?php
            }
         }

        
      ?>
    </div>
    
    <br><br><br><br>

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
