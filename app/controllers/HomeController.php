<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){
       $dados["view"] = "v_adm";
       $this->load("template",$dados);
   } 
}
