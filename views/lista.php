<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Idade</th>
        </tr>

        <?php foreach($data['usuarios'] as $usuario) : ?>
            <tr>
                <td><?= $usuario['id'] ; ?></td>
                <td><?= $usuario['nome'] ; ?></td>
                <td><?= $usuario['idade'] ; ?></td>
            </tr>
        <?php endforeach; ?>       
    </table>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
        </tr>

        <?php foreach($data['produtos'] as $produto) : ?>
            <tr>
                <td><?= $produto['nome'] ; ?></td>
                <td>R$ <?= number_format($produto['preco'], 2,",",".")  ; ?></td>
               
            </tr>
        <?php endforeach; ?>       
    </table>

</body>
</html>