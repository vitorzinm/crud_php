<?php
    require_once "index.php";

        if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "UPDATE pessoas SET nome = '$nome', email = '$email' WHERE id = $id";

        $conn->query($sql);

        header("Location: index.php");
        exit;
    }

?>
    