<?php

namespace app\models;
use app\core\Model;

class Produto extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM servico";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($nome, $preco, $descricao, $url_imagem, $data_venda, $categoria_id) {
        $sql="INSERT INTO servico SET nome = :nome, preco = :preco, descricao = :descricao, url_imagem = :url_imagem, data_venda = :data_venda, categoria_id = :categoria_id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":preco", $preco);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":url_imagem", $url_imagem);
        $qry->bindValue(":data_venda", $data_venda);
        $qry->bindValue(":categoria_id", $categoria_id);
        $qry->execute();

        return $this->db->lastInsertId();
    }
}