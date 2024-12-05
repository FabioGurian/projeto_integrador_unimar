<php 

<?php
$host = "localhost";
$db = "livros";
$user = "root";
$pass = "";

try {
    // Cria uma nova conexão PDO
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Define o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>


?>