<?php

namespace app\controllers;

use app\core\Controller;

class NewsLetterController extends Controller
{

    public function index()
    {
        $dados["view"] = "Newsletter/index";
        $this->load("template", $dados);
    }
}
