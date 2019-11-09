<?php
namespace app\controllers;
use app\core\Controller;

class CategoriaController extends Controller{
    
   public function categoria() {
       $dados["view"] = "categoria/Index";
       $this->load("template", $dados);
   } 
   public function novo() {
        $dados["view"] = "categoria/Criar";
        $this->load("template", $dados);
    } 
}
