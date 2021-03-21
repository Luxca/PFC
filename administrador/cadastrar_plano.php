<?php
  require_once '../classes/plano_aula.php';
  require_once "../conexao/conexao.php";

  $resultado1 = mysqli_query($conn, "select * from jogos");
  $resultado2 = mysqli_query($conn, "select * from disciplinas");
  $resultado3 = mysqli_query($conn, "select * from temas_transversais");
  
  $p = new Plano_Aula;
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
</header>>

<div class="container-fluid">

<div class="col-sm-12 text-center my-3">
    <h1>Cadastro de Plano de Aula</h1>
    <div class="row justify-content-center mb-5 my-5">
        <div class="col-sm-12" id="iconCadastro">
            <svg class="bi bi-pencil-square" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
    <path fill-rule="evenodd"
      d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z"
      clip-rule="evenodd" />
  </svg>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-sm-6">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="POST" enctype="multipart/form-data" method="POST"> 
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <div class="col-md-5 mb-3">
                        <label for="perfil">Disciplina</label>
                        <select class="custom-select d-block w-100" name="disciplina">
                        <?php
                        while($disciplina = mysqli_fetch_array($resultado2)) {
                            echo "<option value=".$disciplina['id'].">".$disciplina['nome']."</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="perfil">Tema Transversal</label>
                        <select class="custom-select d-block w-100" name="tema_transversal">
                        <?php
                        while($tema_transversal = mysqli_fetch_array($resultado3)) {
                            echo "<option value=".$tema_transversal['id'].">".$tema_transversal['nome']."</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="perfil">Jogo</label>
                        <select class="custom-select d-block w-100" name="jogo" required>
                        <?php
                        while($jogo = mysqli_fetch_array($resultado1)) {
                            echo "<option value=".$jogo['id'].">".$jogo['nome']."</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputSerie">Nome</label>
                        <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputDescricao">Descricao</label>
                        <input name="descricao" type="text" class="form-control" id="inputDescricao" placeholder="Descrição..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputSerie">Série</label>
                        <input name="serie" type="text" class="form-control" id="inputSerie" placeholder="Série..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputEscola">Escola/Instituição</label>
                        <input name="escola" type="text" id="inputEscola" class="form-control" placeholder="Escola/Instituição..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputConteudo">Conteúdo</label>
                        <input name="conteudo" type="text" id="inputDescricao" class="form-control" placeholder="Conteúdo..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputObjetivos">Objetivos</label>
                        <input name="objetivos" type="text" id="inputDescricao" class="form-control" placeholder="Objetivos..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputDesenvolvimento">Desenvolvimento</label>
                        <input name="desenvolvimento" type="text" id="inputDescricao" class="form-control" placeholder="Desenvolvimento..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputMateriais">Materiais</label>
                        <input name="materiais" type="text" id="inputDescricao" class="form-control" placeholder="Materiais..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputTempoDuracao">Tempo de duração</label>
                        <input name="tempoDuracao" type="text" id="inputTempoDuracao" class="form-control" placeholder="Tempo de duração..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputAutor">Autor</label>
                        <input name="autor" type="text" id="inputAutor" class="form-control" placeholder="Autor..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="inputContato">Contato</label>
                        <input name="contato" type="text" id="inputContato" class="form-control" placeholder="Contato..." required>
                    </div>

                    <div class="form-group col-sm-12">
                        <a href="planosAula_adm.php" class="btn" id="botao">Cancelar </a>
                        <button type="submit" class="btn" id ="botao">Criar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<?php
        if(isset($_POST['nome']))
        {
         $nome = addslashes($_POST['nome']);
         $descricao = addslashes($_POST['descricao']);
         $serie = addslashes($_POST['serie']);
         $conteudo = addslashes($_POST['conteudo']);
         $tempoDuracao = addslashes($_POST['tempoDuracao']);
         $objetivos = addslashes($_POST['objetivos']);
         $desenvolvimento = addslashes($_POST['desenvolvimento']);
         $materiais = addslashes($_POST['materiais']);
         $autor = addslashes($_POST['autor']);
         $contato = addslashes($_POST['contato']);

         $jogo_id = ($_POST['jogo']);
         $disciplina_id = ($_POST['disciplina']);
         $tema_transversal_id = ($_POST['tema_transversal']);

         if(!empty($nome) && !empty($descricao) && !empty($serie) && !empty($conteudo) && !empty($tempoDuracao) && !empty($objetivos) 
         && !empty($desenvolvimento) && !empty($materiais) && !empty($autor) && !empty($contato) && !empty($jogo_id) && !empty($disciplina_id) && !empty($tema_transversal_id))
         {
            $p->conectar("pfc", "127.0.0.1", "root", "");
            if($p->msgErro == "")
            {

                if($p->cadastrar($nome, $descricao, $serie, $conteudo, $tempoDuracao, $objetivos, $desenvolvimento, $materiais, $autor, $contato, $jogo_id, $disciplina_id, $tema_transversal_id))
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
                      Plano já cadastrado;
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
