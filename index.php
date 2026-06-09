<?php
    require_once 'server.php';
    require_once 'delete.php';
    require_once 'cadastro.php';
    require_once 'editar.php';
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Read - Usuarios</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite o nome">
        <input type="text" name="email" placeholder="Digite o email">

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <?php
    require_once "lista.php";
    ?>
</body>
</html>