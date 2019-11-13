<?php

namespace app\models;
use app\core\Model;

class Produto extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM produto";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getProduto($id){
        $resultado = array();
        $sql = "SELECT * FROM produto WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

        if($qry->rowCount()>0){
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function inserir($nome, $preco, $descricao, $url_imagem, $data_venda, $categoria_id) {
        $sql="INSERT INTO produto SET nome = :nome, preco = :preco, descricao = :descricao, url_imagem = :url_imagem, data_venda = :data_venda, categoria_id = :categoria_id";

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

    public function editar($id, $nome, $preco, $descricao, $url_imagem, $data_venda, $categoria_id) {
        $sql="UPDATE produto SET nome = :nome, preco = :preco, descricao = :descricao, url_imagem = :url_imagem, data_venda = :data_venda, categoria_id = :categoria_id WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":preco", $preco);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":url_imagem", $url_imagem);
        $qry->bindValue(":data_venda", $data_venda);
        $qry->bindValue(":categoria_id", $categoria_id);
        $qry->bindValue(":id", $id);
        $qry->execute();

    }

    public function excluir($id) {
        $sql="DELETE FROM produto WHERE id = :id";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }

    public function resultado($pesquisar){
        $sql = "SELECT * FROM produto WHERE nome LIKE '%$pesquisar%'";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}