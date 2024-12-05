<?php

include_once "conexao.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO LIVROS (titulo, autor, data, editora, genero) 
        VALUES (:titulo, :autor, :data, :editora, :genero)";
    try {
 
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':editora', $editora);
        $stmt->bindParam(':genero', $genero);

        $stmt->execute();

        header('Location: index.php');


    } catch(PDOException $e) {
        echo $e;
    }
}else {
    $error = "ERRO AO ENVIAR FORMULÁRIO, TENTE NOVAMENTE";
}
?>