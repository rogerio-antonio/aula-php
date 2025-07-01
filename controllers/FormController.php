<?php
    require_once("../config.php");

    $data["nome"] = "Rogério Oliveira";
    $data["idade"] = 34;
    $data["aluno"] = [
        "nome"=> "Rogério Oliviera",
        "idade"=> 34,
        "curso"=> "PHP",
    ];


    require_once("../views/form.php");

?>