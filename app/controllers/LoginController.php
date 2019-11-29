<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;

class LoginController extends Controller
{

   public function index()
   {
      $dados["view"] = "login/v_login";
      $this->load("template", $dados);
   }


   public function login(){
      $usuario = new Usuario();
      $login = $usuario->login($_POST["login_email"], $_POST["login_senha"]);
      if($login>0){
         session_start();
         $_SESSION['login'] = true;
         $_SESSION['nome'] = $login;
         header("location:" . URL_BASE . "/administrativo");
      }
      else
         header("location:" . URL_BASE . "/login");
   }

   public function logout(){
      session_start();
      session_destroy();
      header("location:" . URL_BASE);
   }
}
