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
            <input type="checkbox" name="esportes[]" id="futebol" value="Futebol">
            Opção 1
        </label>

        <label for="opcao2">
            <input type="checkbox" name="esportes[]" id="voley" value="Voley">
            Opção 2
        </label>

        <label for="opcao3">
            <input type="checkbox" name="esportes[]" id="basquete" value="Basquete">
            Opção 3
        </label>

        <button type="submit">Enviar</button>
    </form>






    
</body>
</html>