<?php
    session_start();
    include("conexao.php");

    $senha = password_hash(trim($_POST['senha']), PASSWORD_BCRYPT, ['cost' => 12]);

    $nome = mysqli_real_escape_string($conexao, trim ($_POST['text']));
    $usuario = mysqli_real_escape_string($conexao, trim ($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, $senha);

    $sql = "select count(*) as total from usuario where usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: falha-cadastro.php');
        exit;
    }

    $sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

    if($conexao->query($sql) == TRUE) {
        $_SESSION['status_cadastro'] = true;
    }


    $conexao->close();
    header('Location: index.php');
    exit;

?>