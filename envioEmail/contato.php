<?php
include "config.php";
include DIR_PATH."./template/header.php";
include DIR_PATH."/template/nav.php";
?>

<style>
    <?php include ".\\template\css\style.css";?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="envia-email.php" method="POST">

        <h1 id="h1_Contato">Fale conosco pelo nosso E-mail</h1>

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" placeholder="Digite seu nome: (Ex.: Eduarda)" required> <br> 
    
        <label for="Sobrenome">Sobrenome:</label><br>
        <input type="text" name="sobrenome" placeholder= "Digite seu sobrenome: (Ex.: Berti)" required> <br>

        <label for="E-mail">E-mail:</label><br>
        <input type="email" name="email" placeholder= "Digite seu e-mail: (Ex.: dudabm2005@gmail.com)" required> <br>

        <label for="">Mensagem:</label> <br>
        <textarea name="mensagem" placeholder= "Digite sua mensagem aqui: " required></textarea> <br>

        <input type="submit" id="botao" name ="Enviar E-mail">


    </form>

    
</body>
</html>

