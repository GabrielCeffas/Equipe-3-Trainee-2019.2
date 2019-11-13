<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

class ProdutoController extends Controller{
    
   public function index(){
       $produto = new Produto();

       $dados["produtos"] = $produto->lista();
       $dados["view"] = "produto/Index";

       $this->load("template", $dados);
   }
   
   public function novo(){
      $dados["view"] = "produto/Criar";
      $this->load("template", $dados);
   }

   public function editar($id){
      $produto = new Produto();

      $dados["produto"] = $produto->getProduto($id);
      $dados["view"] = "produto/Editar";
      $this->load("template", $dados);
   }

   public function apagar($id, $excluir = NULL){
      $produto = new Produto();

      if ($excluir == "S"){
         $produto->excluir($id);
         header("location:" . URL_BASE . "/produto");
         exit;
      }

      $dados["produto"] = $produto->getProduto($id);
      $dados["view"] = "produto/Deletar";
      $this->load("template", $dados);
   }

   public function salvar(){
      $produto = new Produto();

      $id = isset ($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")): NULL;
      $nome = isset ($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")): NULL;
      $preco = isset ($_POST["preco"]) ? strip_tags(filter_input(INPUT_POST, "preco")): NULL;
      $descricao = isset ($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")): NULL;
      $url_imagem = isset ($_POST["url_imagem"]) ? strip_tags(filter_input(INPUT_POST, "url_imagem")): NULL;
      $data_venda = isset ($_POST["data_venda"]) ? strip_tags(filter_input(INPUT_POST, "data_venda")): NULL;
      $categoria_id = isset ($_POST["categoria_id"]) ? strip_tags(filter_input(INPUT_POST, "categoria_id")): NULL;

      if ($id){
         $produto->editar($id, $nome, $preco, $descricao, $url_imagem, $data_venda, $categoria_id);
      }
      else{
         $produto->inserir($nome, $preco, $descricao, $url_imagem, $data_venda, $categoria_id);
      }
      header("location:" . URL_BASE . "/produto");      
   }
}