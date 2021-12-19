<?php

$idades = array("Jason"=>38, "Ada"=>35, "Delphino"=>26);

$json_str = json_encode($idades);

echo "$json_str";

echo "<hr>";

$empregados = array('empregados' => array(
    array(
        'nome' => 'Jason Jones',
        'idade' => 38,
        'sexo' => 'M'
    ),
    array(
        'nome' => 'Ada Pascalina',
        'idade' => 35,
        'sexo' => 'F'
    ),
    array(
        'nome' => 'Delphino da Silva',
        'idade' => 26,
        'sexo' => 'M'
    )));

$json_str_2 = json_encode($empregados);

echo "$json_str_2";

?>