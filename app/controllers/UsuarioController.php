<?php
namespace app\controllers;
use app\core\Usuario;
use app\models\Usuario;

class UsuarioController extends Controller{
    
    public function index() {
        $usuario = new Usuario();

        $dados["usuario"] = $usuario->lista();
        $dados["view"] = "usuario/Index";
        $this->load("template", $dados);
    } 

    public function novo() {
        $dados["view"] = "usuario/Criar";
        $this->load("template", $dados);
    }
    
    public function editar($id) {
        $usuario = new Usuario();

        $dados["usuario"] = $usuario->getUsuario($id);
        $dados["view"] = "usuario/Editar";
        $this->load("template", $dados);
    }
    
    public function apagar($id, $excluir = NULL) {
        $usuario = new Usuario();
        if($excluir=="S"){
            $usuario->excluir($id);
            header("location:" . URL_BASE ."/usuario");
            exit;
        }
        $dados["usuario"] = $usuario->getUsuario($id);
        $dados["view"] = "usuario/Delete";
        $this->load("template", $dados);
    }
    
    public function salvar(){
    $usuario = new Usuario();   

    $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")): NULL;
    $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")): NULL;
    $email = isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST, "email")): NULL; 
    $senha = isset($_POST["senha"]) ? strip_tags(filter_input(INPUT_POST, "senha")): NULL; 
    if($id){
        $usuario->editar($id, $nome, $email, $senha);
    }
    else{
        $usuario->inserir($nome, $email, $senha);
    }

    header("location:" . URL_BASE ."/usuario");
    }

    public function pesquisar(){
        $categoria = new Usuario();

        $pesquisar = isset($_POST["usuario_pesquisar"]) ? strip_tags(filter_input(INPUT_POST, "usuario_pesquisar")): NULL;

        $dados["usuarios"] = $usuario->resultado($pesquisar);
        $dados["view"] = "usuario/Pesquisar";
        $this->load("template", $dados);
    }

}
