<?php

namespace app\controllers;

use app\core\Controller;

class NewsLetterController extends Controller
{

    public function index()
    {
        $dados["view"] = "Newsletter/index";
        if(require('./app/functions/loginCheck.php')){
            $this->load("template", $dados);
        }
    }
}
