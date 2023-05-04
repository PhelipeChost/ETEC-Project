<?php

    session_start();

    session_destroy();

    header('Location: cadastro-pag.php');

    exit();

?>