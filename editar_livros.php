<?php 

require_once "conexao.php";

$sql = "SELECT * FROM livros WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam('id', $_GET['id']);

$stmt->execute();

$livro = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Livro</title>
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
        
        <h1>Editar Livro</h1>

        <div class="aba-cadastro">
            <fieldset class="formulario">
                <form action="edit.php?id=<?= $livro['id'] ?>" method="post" class="formulario-estilo">
                    <div class="campos-formulario">
                        <label for="titulo" class="campo-normal-label">Titulo do livro</label>
                        <input type="text" name="titulo" id="titulo" class="campo-normal-input" value="<?= $livro['titulo'] ?>">
                    </div>

                    <div class="campos-formulario">
                        <label for="autor" class="campo-normal-label">Autor</label>
                        <input type="text" name="autor" id="autor" class="campo-normal-input" value="<?= $livro['autor'] ?>" required>
                    </div>

                    <div class="campos-formulario">
                        <label for="data" class="campo-normal-label">Data de Lançamento</label>
                        <input type="date" name="data" id="data" class="campo-normal-input" value="<?= $livro['data'] ?>" required>
                    </div>
                    
                    <div class="campos-formulario">
                        <label for="editora" class="campo-normal-label">Editora</label>
                        <input type="text" name="editora" id="editora" class="campo-normal-input" value="<?= $livro['editora'] ?>" required>
                    </div>

                    <div class="campos-formulario" >
                        <label class="campo-normal-label">Genero: </label>
                        <input type="radio" name="genero" value="Narrativo" <?php if ($livro['genero'] == "Narrativo") echo'checked' ?>>Narrativo
                        <input type="radio" name="genero" value="Lirico" <?php if ($livro['genero'] == "Lirico") echo'checked' ?>>Lirico
                        <input type="radio" name="genero" value="Dramatico" <?php if ($livro['genero'] == "Dramatico") echo'checked' ?>>Dramatico
                    </div>

                    <div class="botao">
                        <button type="submit">Salvar</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>