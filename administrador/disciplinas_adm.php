<?php
  require_once "../conexao/conexao.php"; 

$query = sprintf("SELECT * FROM disciplinas");

$aux = sprintf("SELECT j.* from planos_aula as p join jogos as j on j.id = p.jogos_id join disciplinas as d on d.id = p.disciplinas_id");

$dados = mysqli_query($conn,$query);
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);


$dados2 = mysqli_query($conn,$aux);
$linha2 = mysqli_fetch_assoc($dados2);
$total2 = mysqli_num_rows($dados2);
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
            <h1>Disciplinas</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-collection" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 011 13V6a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v7a.5.5 0 01-.5.5zm-13 1A1.5 1.5 0 010 13V6a1.5 1.5 0 011.5-1.5h13A1.5 1.5 0 0116 6v7a1.5 1.5 0 01-1.5 1.5h-13zM2 3a.5.5 0 00.5.5h11a.5.5 0 000-1h-11A.5.5 0 002 3zm2-2a.5.5 0 00.5.5h7a.5.5 0 000-1h-7A.5.5 0 004 1z" clip-rule="evenodd"/>
                </svg>
                </div>
            </div>
        </div>

    </div>

    <?php
    do {
    ?>   

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <p><?=$linha['nome']?></p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="col-sm-12">
                                        <h1 class="display-4"><?=$linha['nome']?></h1>
                                        <p><?=$linha['descricao']?></p>
                                    </div>
        
                                    <div class="col-sm-12">
                                        <h5> Jogos a que esta disciplina está vinculada: </h5>
                                        <?php
                                            do {
                                        ?> 
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action"><?=$linha2['nome']?></a>
                                        </div>
                                        <?php
                                            }while($linha2 = mysqli_fetch_assoc($dados2));
                                        ?>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php
    }while($linha = mysqli_fetch_assoc($dados));
?>


        <div class="container-fluid">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-sm-1">
                    <a href="cadastrar_disciplina.php" id="botao" class="btn" role="button" aria-pressed="true">Cadastrar Disciplina</a>
                </div>
            </div>
        </div>

        <br><br><br><br><br>

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