<!DOCTYPE html>
<html>
<head>
    <title>Página de Destino</title>
</head>
<body>
    <h1>Dados Enviados do Formulário</h1>
    
    <?php
    //metodo get e post

    $nome = $_POST["nome"] ?? "Nome não fornecido";
    $email = $_POST["email"] ?? "E-mail não fornecido";
    ?>
    
    <p>Nome: <?php echo $nome; ?></p>
    <p>E-mail: <?php echo $email; ?></p>

<?php
//conexão banco 
$servername = "localhost";
$nome = "nome";
$email = "email";

$conn = new mysqli($nome, $email);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
</body>
</html>
