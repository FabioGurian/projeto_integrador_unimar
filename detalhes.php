<?php 

require_once "conexao.php";

$sql = "SELECT * FROM livros WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam('id', $_GET['id']);

$stmt->execute();

$livro = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Detalhes</title>
</head>
<body>

    <div class="container">

        <header>
            <div class="logo">Biblioteca</div>
            <nav>
                <a href="index.php">Página Inicial</a>
                <a href="cadastrar_livros.php">Cadastro de Livros</a>
            </nav>
        </header>

        <h1>Detalhes do Livro</h1>

        <table>
            <tbody>
                <tr>
                    <td>id</td>
                    <td><?= $livro['id'] ?></td>
                </tr>
                <tr>
                    <td>Titulo</td>
                    <td><?= $livro['titulo'] ?></td>
                </tr>
                <tr>
                    <td>Autor</td>
                    <td><?= $livro['autor'] ?></td>
                </tr>
                <tr>
                    <td>Data de Lançamento</td>
                    <td><?= $livro['data'] ?></td>
                </tr>
                <tr>
                    <td>Editora</td>
                    <td><?= $livro['editora'] ?></td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td><?= $livro['genero'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>