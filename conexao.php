<?php

    define('HOST', '127.0.0.1');

    define('USUARIO', 'root');

    define ('SENHA', '31076');

    define('DB', 'auxiliodesenvolvimento');

    define('PORTA', '3307');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORTA) or die (mysqli_connect_error());



?>