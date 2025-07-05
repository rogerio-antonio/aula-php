<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Formulário com Check</title>
</head>
<body>
    <form action="FormCheckProcessController.php" method="POST">
        <label for="opcao1">
            <input type="checkbox" name="preferencias[]" id="opcao1" value="Opção 1">
            Opção 1
        </label>

        <label for="opcao2">
            <input type="checkbox" name="preferencias[]" id="opcao2" value="Opção 2">
            Opção 2
        </label>

        <label for="opcao3">
            <input type="checkbox" name="preferencias[]" id="opcao3" value="Opção 3">
            Opção 3
        </label>

        <button type="submit">Enviar</button>
    </form>






    
</body>
</html>