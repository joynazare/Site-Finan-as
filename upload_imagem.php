<?php 
require 'verifica.php';
if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])):?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagens</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="upload_imagem.php">FINANÇAS</a>
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
            <a class="dropdown-item " href="#">Documentos</a>
            <hr class="dropdown-divider">
            <a class="dropdown-item" href="#">Something else here</a></li>
            </div>
        
        
            
        
        </ul>
        <div class="d-flex">
            <label for="" class="mr-5"><?php echo $nome;?></label>
        <a href="logout.php">Sair</a>
        </div>
    </div>
    </div>
    </nav>

    <?php 
    require 'connexao.php';

  /*
    if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
        $arquivo = $_FILES['imagem']['name'];
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));// toda extenção de imagem em minusculo ex: png jpg

        $novo_nome = md5(time()) . ".".$extensao;
        move_uploaded_file($_FILES["imagem"]["tmp_name"], "./imagens/slides/".$_FILES["imagem"]["name"]);
        echo "update realizado com sucesso";

       
            $pdo->query ("insert into tb_imagem(id_foto, titulo_imagem, data) values ('','$novo_nome', Now())") ;
         
    }   */ 

    
    $msg = false;
    if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
        $arquivo = $_FILES['imagem']['name'];
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));// toda extenção de imagem em minusculo ex: png jpg

        $novo_nome = md5(time()) . ".".$extensao;

        $directorio = "./imagens/slides/";

        move_uploaded_file($_FILES["imagem"]["tmp_name"], $directorio. $novo_nome);

        $pdo->query ("insert into tb_imagem(id_foto, titulo_imagem, data) values ('','$novo_nome', Now())")  ;
      /* 
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id_foto", "");
        $sql->bindValue("totulo_imagem", $novo_nome);
        $sql->bindValue("data", Now());
        $sql->execute();

        

        if ($pdo) {
            # code...
            $msg = "arquivo enviado com sucesso";
        } else {
            # code...
             $msg = "falha ao enviar oarquivo ";
        }
        

*/

    } 
    ?>
    
    <div class="row ">
        <div class="cold-md-4 ml-5 mt-5">
            <form action="./upload_imagem.php" method="post" enctype="multipart/form-data">
                <label for="">Selecione a imagem para slide </label>
                <input type="file" name="imagem"  class="form-control mb-3">
                <button type="submit" class="btn btn-success">Enviar imagem</button>
            </form>
        </div>
    </div>

    
    






 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php  else: header("Location: index.php"); endif;?>