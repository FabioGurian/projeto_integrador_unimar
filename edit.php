<?php

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];

    $sql = "UPDATE livros 
            SET titulo = :titulo, 
            autor = :autor, 
            data = :data, 
            editora = :editora, 
            genero = :genero 
            WHERE id = :id";
    try {
 
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
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

?>