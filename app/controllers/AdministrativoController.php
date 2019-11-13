<?php
namespace app\controllers;
use app\core\Controller;

class AdministrativoController extends Controller{
    
   public function index(){
        $dados["view"] = "administrativo/v_adm";
        $this->load("template", $dados);
   } 
}
