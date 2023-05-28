<?php
    session_start();

    if(empty($_SESSION['usuario'])) {
        header ('Location: cadastro-pag.php');
        exit();

    }

