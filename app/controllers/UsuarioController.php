<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuario = new Usuario();

        $dados["usuarios"] = $usuario->lista();
        $dados["view"] = "usuario/Index";
        $this->load("template", $dados);
    }

    public function novo()
    {
        $dados["view"] = "usuario/Criar";
        $this->load("template", $dados);
    }

    public function editar($id)
    {
        $usuario = new Usuario();

        $dados["usuario"] = $usuario->getUsuario($id);
        $dados["view"] = "usuario/Editar";
        $this->load("template", $dados);
    }

    public function apagar($id, $excluir = NULL)
    {
        $usuario = new Usuario();
        if ($excluir == "S") {
            $usuario->excluir($id);
            header("location:" . URL_BASE . "/usuario");
            exit;
        }
        $dados["usuario"] = $usuario->getUsuario($id);
        $dados["view"] = "usuario/Delete";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        $usuario = new Usuario();

        $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")) : NULL;
        $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")) : NULL;
        $email = isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST, "email")) : NULL;
        $senha = isset($_POST["senha"]) ? strip_tags(filter_input(INPUT_POST, "senha")) : NULL;
        $url_imagem = isset($_POST["url_imagem"]) ? strip_tags(filter_input(INPUT_POST, "url_imagem")) : NULL;
        if ($id) {
            $usuario->editar($id, $nome, $email, $senha, $url_imagem);
        } else {
            $usuario->inserir($nome, $email, $senha, $url_imagem);
        }

        header("location:" . URL_BASE . "/usuario");
    }
}
