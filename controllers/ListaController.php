<?php
    require_once '../config.php';

//A matriz tem que ser criada entre os dois require_once
//Aqui é só para exemplo, mas esses dados veem do banco de dados. É apenas uma simulação. Vamos buscar no Model
//O for teria que usar fixo 3, como não sabemos qtos têm no banco de dados usamos o foreach
    $data['usuarios'] = [
        ['id' => 1,'nome'=> 'João', 'idade' => 28],
        ['id' => 2,'nome'=> 'Maria', 'idade' => 22],
        ['id' => 3,'nome'=> 'Pedro', 'idade' => 30],
    ];

    require_once '../views/lista.php';

?>

