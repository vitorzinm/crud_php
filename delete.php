<?php
require_once "index.php";

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM pessoas WHERE id = $id";
        echo $sql;
        $conn->query($sql);
        header("Location: index.php");
        exit;
    }

?>
