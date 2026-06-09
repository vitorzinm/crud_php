<?php 
    require_once "index.php";

    
        $sql = "SELECT * FROM pessoas";
        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){

                if(
                    isset($_GET['edit']) &&
                    $_GET['edit'] == $row['id']
                ){

                    echo "
                        <div class='card'>
                            <form method='POST'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <input type='text' name='nome' value='{$row['nome']}'>
                                <input type='text' name='email' value='{$row['email']}'> 
                                <button type='submit' name='update'>💾</button>
                                <a href='index.php'>Sair</a>
                            </form>
                        </div>
                    ";

                }else{

                    echo "
                        <div class='card'>

                            <strong>ID:</strong> {$row['id']}<br>
                            <strong>Nome:</strong> {$row['nome']}<br>
                            <strong>Email:</strong> {$row['email']}<br><br>
                            <a href='?edit={$row['id']}'>✎</a>
                            <a
                                href='?delete={$row['id']}'
                                onclick='return confirm(\"Deseja excluir?\")'
                            >
                                🗑️
                            </a>
                        </div>
                    ";
                }
            }

        }else{

            echo "Nenhum resultado encontrado";
        }

        $conn->close();
?> 