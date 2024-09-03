<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == "POST" ){
        $nomeAntigo = $_POST["nome_antigo"];
        $nomeNovo = $_POST["nome_novo"];

        $sql = "UPDATE user SET name = '$nomeNovo' WHERE name = '$nomeAntigo'";

        if ($conn->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="nome_antigo">Nome antigo</label>
        <input type="text" name="nome_antigo">
        <label for="nome_novo">Nome novo</label>
        <input type="text" name="nome_novo">
        <button type="submit"> Enviar </button>
    </form>

</body>
</html>