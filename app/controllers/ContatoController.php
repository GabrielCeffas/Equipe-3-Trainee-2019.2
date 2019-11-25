<?php

namespace app\controllers;

use app\core\Controller;

class ContatoController extends Controller
{

    public function index()
    {
        $dados["view"] = "contato/v_contato";
        $this->load("template", $dados);
    }
}
