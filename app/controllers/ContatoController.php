<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        $dados["view"] = "contatos/v_contato";
        $this->load("template", $dados);
    }

    public function recebidos()
    {
        $contato = new Contato();

        $dados["contatos"] = $contato->lista();
        $dados["view"] = "contatos/index";
        $this->load("template", $dados);
    }

    public function visualizar($id)
    {
        $contato = new Contato();

        $dados["contato"] = $contato->getContato($id);
        $dados["view"] = "contatos/ver";
        $this->load("template", $dados);
    }

    public function apagar($id, $excluir = NULL)
    {
        $contato = new Contato();
        if ($excluir == "S") {
            $contato->excluir($id);
            header("location:" . URL_BASE . "/contato/recebidos");
            exit;
        }
    }

    public function salvar()
    {
        $contato = new Contato();

        $email = isset($_POST["c_email"]) ? strip_tags(filter_input(INPUT_POST, "c_email")) : NULL;
        $nome = isset($_POST["c_nome"]) ? strip_tags(filter_input(INPUT_POST, "c_nome")) : NULL;
        $assunto = isset($_POST["c_assunto"]) ? strip_tags(filter_input(INPUT_POST, "c_assunto")) : NULL;
        $comentario = isset($_POST["c_coment"]) ? strip_tags(filter_input(INPUT_POST, "c_coment")) : NULL;


        $contato->inserir($nome, $email, $assunto, $comentario);


        header("location:" . URL_BASE . "/contato");
    }
}
