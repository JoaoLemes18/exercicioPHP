
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Exemplo</title>
</head>

<body>
    <h1>Meu Formulario</h1>
    <form action="pagina_destino.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="Enviar">
    </form>
    <?php
    //lógica para enivar os dados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
    } 
    ?>
</body>
<!--index.php –->
