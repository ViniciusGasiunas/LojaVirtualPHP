<?php

    //session_start();
    // $_SESSION['nome'] = "vinicius Gasiunas";

    $exp = time() + 7200;
    setcookie("nome","vinicius",$exp);
