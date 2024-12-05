<?php

require_once "conexao.php";

$sql = "SELECT * from livros";

$stmt = $conn->prepare($sql);

$stmt->execute();

$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>