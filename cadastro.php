<?php
    require_once "index.php";

        if(
        isset($_POST['cadastrar']) &&
        !empty($_POST['nome']) &&
        !empty($_POST['email'])
    ){

        $sql = "INSERT INTO pessoas (nome, email)
                VALUES ('{$_POST['nome']}', '{$_POST['email']}')";

        $conn->query($sql);

        header("Location: index.php");
        exit;
    }
?>
