<?php

namespace app\controllers;

use app\core\Controller;

class QuemSomosController extends Controller
{

    public function index()
    {
        $dados["view"] = "quemsomos/v_quemsomos";
        $this->load("template", $dados);
    }
}
