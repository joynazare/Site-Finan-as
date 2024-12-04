<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BEM VINDO</h1>


</body>
</html>

<?php

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require 'connexao.php';
    require 'Usuario.php';

    $u = new Usuario();
    

    $usuario = addslashes($_POST['usuario']) ;
    $senha = addslashes($_POST['senha']) ;

   if ($u->login($usuario, $senha) == true) {
    if (isset($_SESSION['id_user'])) {
        header("Location: sistema.php");
    } else {
        header("Location: index.php");
    }
    
   } else {
    header("Location: index.php");
   }


}else{

    header("Location: index.php");
}



?>