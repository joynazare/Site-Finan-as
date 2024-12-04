<?php 
require 'verifica.php';
if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])):?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sistema</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">FINANÇAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown active ">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
            </a>
            <div class="dropdown-menu " >
            <a class="dropdown-item " href="upload_imagem.php">Imagens</a>
            <a class="dropdown-item " href="upload_files.php">Documentos</a>
            <hr class="dropdown-divider">
            <a class="dropdown-item" href="#">Something else here</a></li>
            </div>
        
        
            
        
        </ul>
        <div class="d-flex ">
            <label for="" class="mr-5"><?php echo $nome;?></label>
        <a href="logout.php">Sair</a>
        </div>
    </div>
    </div>
    </nav>




 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php  else: header("Location: index.php"); endif;?>