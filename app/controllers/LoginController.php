<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class LoginController extends Controller
{

   public function index()
   {
      $dados["view"] = "login/v_login";
      $this->load("template", $dados);
   }

   public function valida()
   {
      $login = new Login();

      $dados["logins"] = $login->lista();
      $dados["view"] = "login/valida";
      $this->load("template", $dados);
   }
}
