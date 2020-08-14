<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro simples</title>
    <style>
        body {
            background: chocolate;
            height: 100vh;
        }
        div.content {
            background-color: rgba(255,255,255,.8);
            margin: 0 auto;
            padding: 10px;
            width: 550px;
            min-height:300px;
            border: 1px solid rgb(114, 98, 98);
            box-shadow: 5px 5px 5px black;
            font: 14pt Arial;
        }
        h1 {
            text-align: center;
            margin: 30px 0 20px 0;
            font: bold 30pt black;
        }
        a {
        color: #273747;
        text-decoration: none;
        font-weight: bold;
        font: 11pt Helvetica;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Dados recebidos</h1>
    <div class="content">
          <?php 
            $name = isset($_GET["name"])?$_GET["name"]:"Não informado";
            $email = isset($_GET["email"])?$_GET["email"]:"Não informado";
            $ano = isset($_GET["ano"])?$_GET["ano"]:"Não informado";
            $idade = date("Y") - $ano;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Não informado";
            $msg = isset($_GET["msg"])?$_GET["msg"]:"Não enviou nenhuma mensagem";
          ?>

          <?php
            echo "<br> Nome: $name";
            echo "<br> E-mail: $email";
            echo "<br> Idade: $idade";
            echo "<br> Sexo: $sexo";
            echo "<br> Mensagem: $msg";
          ?>
          <p><a href="04exercicio.html">Voltar</a></p>
    </div>
</body>
</html>