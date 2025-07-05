<?php
    //Incluir o arquivo de configuração
    require_once "../config.php";



    if ($_SERVER["REQUEST_METHOD"] === "POST"){ //Verificando se o servidor enviou uma requisição do método POST. Se fosse GET era só mudar nos dois locais. (Está verificando se o usuário enviou os dados via POST)
        $nome = $_POST["nome"]; //Capturando esse campo no formulário
        $idade = $_POST["idade"] ?? null;//Campo NÃO obrigatório. Se a idade não for enviada, coloque Nulo.
        $options = array('cost' => 11);
        $senha = $_POST["senha"] ?? null;//Campo obrigatório. 
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT, $options);
        $estado = $_POST["estado"] ?? "MG";//Colocar um nome padrão no campo

        echo $senha_criptografada; exit;

        header("Location: " . BASE_URL . "controllers/ObrigadoController.php");
   }

//Depois ir no form.php e na action do formulário colocar o nome desse arquivo ( <form action="FormStoreController.php" method="post">).

?>

