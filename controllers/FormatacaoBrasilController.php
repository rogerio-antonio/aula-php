<?php 
    //Incluir o arquivo de configuração
    require_once "../config.php";

    $data_atual = date("d/m/Y H:i:s");

    //Data em formato de string
    $data_banco_dados = "2025-06-30 20:59:15"; //Simulação de uma data vindo do banco de dados // Quando não vem a hora o Banco de Dados considera meia-noite,

    //Converte a string em timestamp
    $data_timestamp = strtotime($data_banco_dados); //Converte cada data (até os segundos) em um número único. Os dois últimos algarismos correspondem aos segundos.

    //Formata a data a partir do timestamp
    $data_formato_brasil = date("d/m/Y H:i:s", $data_timestamp); //No formato que o usuário quiser (definir)
    //echo "Data formatada: " .$data_formato_brasil . "<br>"; //Só para testar. Não usamos o echo no controller

    $valor = 1234567.89;
    $valor_formato_brasil = number_format($valor,2,",",".");
    //echo "R$ " . $valor_formato_brasil;

    //SAÍDA: R$ 1.234.567,89

    //Chamando a view formatacao-brasil.php
    //que está na pasta views
    require_once "../views/formatacao-brasil.php";
    ?>