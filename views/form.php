<?php require_once "../config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Aula de Formulário</h1>

    <span> <?= $data['nome'];  ?></span>
    <span> <?= $data['aluno']['curso']; ?></span>




    <form action="">
        <div>
            <label for="nome">Insira seu nome:</label>
            <input type="number" placeholder="Digite seu nome" name="nome" id="nome">
        </div>

         <div>
            <label for="idade">Insira sua idade:</label>
            <input type="number" placeholder="Digite sua idade" name="idade" id="idade">
        </div>

        <div>
            <label for="estado">Selecione seu estado:</label>
            <select name="estado" id="estado">
                <option value="mg">Minas Gerais</option>
                <option value="sp">São Paulo</option>
                <option value="rj">Rio de Janeiro</option>
            </select>
        </div>

        <div>
            <button tupe="submit">Enviar</button>
        </div>
    </form>
    







</body>
</html>