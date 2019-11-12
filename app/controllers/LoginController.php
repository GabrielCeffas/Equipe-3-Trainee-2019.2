<?php
namespace app\controllers;
use app\core\Controller;

class LoginController extends Controller{
    
   public function index(){
        $dados["view"] = "login/v_login";
        $this->load("template", $dados);
   } 
}