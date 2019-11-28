<?php
$login_email = isset($_POST["login_email"]) ? strip_tags(filter_input(INPUT_POST, "login_email")) : NULL;
$login_senha = isset($_POST["login_senha"]) ? strip_tags(filter_input(INPUT_POST, "login_senha")) : NULL;


if (empty($login_email || $login_senha)) {
    header("location:" . URL_BASE . "/login");
}

if (is_array($logins)) {
    foreach ($logins as $login) {
        echo $login_email;
        echo $login->email;
        if ($login->email == $login_email) {
            header("location:" . URL_BASE . "/administrativo");
        } else
            header("location:" . URL_BASE . "/login");
    }
}
