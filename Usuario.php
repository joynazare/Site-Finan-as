<?php


class Usuario {


    public function login($usuario, $senha){
        global $pdo;

        $sql = "select * from usuarios where login_usuario = :usuario AND senha_usuario = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", ($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

           $_SESSION['id_user'] = $dado['id_usuario'];

           return true;

        } else {
            return false;
        }
    }

    public function logged($id){

        global $pdo;
        
        $array = array();

        $sql = "select nome_usuario from usuarios where id_usuario = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;


    }

}
?>