<?php
namespace app\controllers;
use app\core\Controller;

class UsuarioController extends Controller{
    
   public function index(){
       $dados["view"] = "usuario/Index";
       $this->load("template",$dados);
   } 
    
    public function novo(){
        $dados["view"] = "usuario/Criar";
        $this->load("template",$dados);
    } 

    public function edit(){
        $dados["view"] = "usuario/Editar";
        $this->load("template",$dados);
    }
}