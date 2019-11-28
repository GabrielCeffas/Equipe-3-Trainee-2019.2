<?php

namespace app\models;

use app\core\Model;

class Contato extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista()
    {
        $sql = "SELECT * FROM contato";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getContato($id)
    {
        $resultado = array();
        $sql = "SELECT * FROM contato WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }

        return $resultado;
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM contato WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }

    public function inserir($nome, $email, $assunto, $comentario)
    {
        $sql = "INSERT INTO contato SET nome = :nome, email = :email, assunto = :assunto, comentario = :comentario";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":email", $email);
        $qry->bindValue(":assunto", $assunto);
        $qry->bindValue(":comentario", $comentario);
        $qry->execute();

        return $this->db->lastInsertId();
    }
}
