<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedido</title>

    <style>

        body{
            font-family: arial;
            background-color: #eee;
        }

        .tela{
            background-color: rgba(0,0,0,0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 90%;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
        }

        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        textarea{
            font-size: 15px;
        }
    </style>

</head>
<body>
    <div class="tela">
        <h1>Formulário de Orçamento</h1>
        <form method="POST" action="orçamento.php">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <br><br>
            <input type="email" name="email" placeholder="E-mail" required>
            <br><br>
            <input type="text" name="celular" placeholder="Celular" required>
            <br><br>
            <textarea id="pedido" name="pedido" placeholder="Faça seu pedido!" rows="5" cols="44" required></textarea>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>