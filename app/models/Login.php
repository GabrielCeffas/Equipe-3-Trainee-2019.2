<?php

namespace app\models;

use app\core\Model;

class Login extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista()
    {
        $sql = "SELECT * FROM usuario";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function verificar($login_email, $login_senha)
    {

        $sql = "SELECT * FROM usuario WHERE login_email = :email and login_senha = :senha";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":email", $login_email);
        $qry->bindValue(":senha", $login_senha);
        $qry->execute();
    }
}
