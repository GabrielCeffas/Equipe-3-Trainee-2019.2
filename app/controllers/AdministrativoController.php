<?php

namespace app\controllers;

use app\core\Controller;

class AdministrativoController extends Controller
{

   public function index()
   {
      $dados["view"] = "administrativo/v_adm";
      if (require('./app/functions/loginCheck.php')) {
         $this->load("template", $dados);
      }
   }
}
