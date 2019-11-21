<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Categoria;

class CategoriaController extends Controller
{

    public function index()
    {
        $categoria = new Categoria();

        $dados["categorias"] = $categoria->lista();
        $dados["view"] = "categoria/Index";
        $this->load("template", $dados);
    }

    public function novo()
    {
        $dados["view"] = "categoria/Criar";
        $this->load("template", $dados);
    }

    public function editar($id)
    {
        $categoria = new Categoria();

        $dados["categoria"] = $categoria->getCategoria($id);
        $dados["view"] = "categoria/Editar";
        $this->load("template", $dados);
    }

    public function apagar($id, $excluir = NULL)
    {
        $categoria = new Categoria();
        if ($excluir == "S") {
            $categoria->excluir($id);
            header("location:" . URL_BASE . "/categoria");
            exit;
        }
        $dados["categoria"] = $categoria->getCategoria($id);
        $dados["view"] = "categoria/Delete";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        $categoria = new Categoria();

        $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")) : NULL;
        $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")) : NULL;
        $descricao = isset($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")) : NULL;

        if ($id) {
            $categoria->editar($id, $nome, $descricao);
        } else {
            $categoria->inserir($nome, $descricao);
        }

        header("location:" . URL_BASE . "/categoria");
    }

    public function pesquisar()
    {
        $categoria = new Categoria();
        $pesquisar = isset($_GET["categoria_pesquisar"]) ? strip_tags(filter_input(INPUT_GET, "categoria_pesquisar")) : NULL;

        $dados["categorias"] = $categoria->resultado($pesquisar);
        $dados["view"] = "categoria/Pesquisar";

        $this->load("template", $dados);
    }
}
