<?php 
require 'connexao.php';

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {
    
    require_once 'Usuario.php';
    $u = new Usuario();
    $listLogged = $u->logged($_SESSION['id_user']);
    $nome = $listLogged['nome_usuario'];

} else {
    header("location: index.php");
}


?>