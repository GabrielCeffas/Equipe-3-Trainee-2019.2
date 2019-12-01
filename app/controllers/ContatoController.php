<?php

namespace app\controllers;

use app\core\Controller;

class ContatoController extends Controller
{

    public function index()
    {
        $dados["view"] = "contatos/v_contato";
        if (require('./app/functions/loginCheck.php')) {
            $this->load("template", $dados);
        }
    }
}
