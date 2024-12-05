<?php require_once "listagem.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Livros</title>
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

        <h1>Lista de Livros cadastrados</h1>

        <table>
          <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?= $livro['titulo'] ?></td>
                        <td><?= $livro['autor'] ?></td>
                        <td><?= $livro['editora'] ?></td>
                        <td><a href="editar_livros.php?id=<?= $livro['id'] ?>">Editar</a><a href="detalhes.php?id=<?= $livro['id'] ?>">Visualizar</a><a href="delete.php?id=<?= $livro['id'] ?>">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>