<?php

    session_start();
    if(!($_SESSION['login'])){
        return header ("location:" . URL_BASE . "/login");
    }