<?php

require_once 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    header('Location: index.php');
} else {
    $error = "ERRO AO DELETAR LIVRO, TENTE NOVAMENTE";
}

?>