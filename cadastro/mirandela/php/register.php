<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDatabase";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO clients (name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>