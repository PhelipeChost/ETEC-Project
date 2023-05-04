<?php
    function verifica_senha($result, $senha)
    {
        $row = mysqli_fetch_row($result);
        return password_verify($senha, $row [2]);
    }

    session_start();
    include('conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    $query = "select usuario_id, usuario, senha from usuario where usuario = '{$usuario}'"; 
    $result = mysqli_query($conexao, $query);
    $n_row = mysqli_num_rows($result);

    if($n_row == 1 && verifica_senha($result, $senha) == true) {
        $_SESSION['usuario'] = $usuario;
        header('Location: inicio.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
?>  