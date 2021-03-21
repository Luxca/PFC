<?php
  require_once '../classes/jogo.php';
  require_once "../conexao/conexao.php";
  
  $j = new Jogo;
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
            <h1>Cadastro de Jogo</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-controller" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 01-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 01-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 01-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 00-.748 2.295 12.351 12.351 0 00-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 00.426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 00.426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 00-.339-2.406 13.753 13.753 0 00-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"
                    clip-rule="evenodd" />
                    <path
                    d="M11.5 6.026a.5.5 0 11-1 0 .5.5 0 011 0zm-1 1a.5.5 0 11-1 0 .5.5 0 011 0zm2 0a.5.5 0 11-1 0 .5.5 0 011 0zm-1 1a.5.5 0 11-1 0 .5.5 0 011 0zm-7-2.5h1v3h-1v-3z" />
                    <path
                    d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 01.354-.613l1.932-.518a.5.5 0 01.258.966l-1.932.518a.5.5 0 01-.612-.354zm9.976 0a.5.5 0 00-.353-.613l-1.932-.518a.5.5 0 10-.259.966l1.932.518a.5.5 0 00.612-.354z" />
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
                <label for="inputVideo">Vídeo</label>
                <input type="video" name="video" id="inputVideo" class="form-control" maxlength="40" placeholder="Video..." required>
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
         $video = addslashes($_POST['video']);

         if(!empty($nome) && !empty($descricao) && !empty($video))
         {
            $j->conectar("pfc", "127.0.0.1", "root", "");
            if($j->msgErro == "")
            {

                if($j->cadastrar($nome, $descricao, $video))
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
                      Jogo já cadastrado;
                    </div>
                  <?php
                }
              }
            }
            else
            {
              ?>
                <div id="msg-erro">
                  <?php echo "Erro: ".$j->msgErro ?>
                </div> 
              <?php
            }
         }

        
      ?>
    </div>
    


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
