<?php

namespace app\controllers;

use app\core\Controller;

class ViewProdutoController extends Controller
{

    public function index()
    {
        $dados["view"] = "ViewProdutos/v_produto";
        $this->load("template", $dados);
    }
}
