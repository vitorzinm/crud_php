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
    <form method="GET" >
        <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        <input type="text" name="email" id="email" placeholder="Digite o email">
        <button type="submit">Cadastrar</button>
    </form>

    <?php
        require_once 'server.php';

        if (
            !empty($_GET['nome']) && 
            !empty($_GET['email']) && 
            isset($_GET['nome']) && 
            isset($_GET['email']) 
        ) {
            $sql = "INSERT INTO pessoas (nome, email) VALUES ('" . $_GET['nome'] . "','" . $_GET['email'] . "')";
            $result = $conn->query($sql);
        } else {
            echo "ERRO: Preencha os campos para realizar a busca";
        }

        $sql = "SELECT * FROM pessoas";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <div class='card'>
                        <strong>ID:</strong> {$row['id']}<br>
                        <strong>Nome:</strong> {$row['nome']}<br>
                        <strong>Email:</strong> {$row['email']}
                    </div>
                ";
            }
        } else {
            echo "Nenhum resultado encontrado";
        }

        $conn->close();
     ?>
</body>
</html>
