<?php

$json_str = '{"nome":"Arthur Silva", "idade":30, "sexo": "M"}';

$obj = json_decode($json_str);

echo "nome: $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";

echo "<hr>";

$json_str_2 = '{"empregados": '.
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M"},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		']}';

$jsonObj = json_decode($json_str_2);
$empregados = $jsonObj->empregados;

foreach ( $empregados as $e )
    {
	echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";
    }

    echo "<hr>";

$json_str_3 = '{"empregados": '.
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M", "dependentes": ["Sedna Jones", "Ian Jones"]},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		'],
		"data": "15/12/2012"}';

$jsonObj = json_decode($json_str_3);


$empregados = $jsonObj->empregados;

echo "<b>data do arquivo</b>: $jsonObj->data<br/>";
foreach ( $empregados as $e )
    {
	echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br/>";

	if (property_exists($e, "dependentes")) {
		$deps = $e->dependentes;
		echo "dependentes: <br/>";
		foreach ( $deps as $d ) echo "- $d<br/>";
	}
    }

    echo "<hr>";

$json_str_4 = '{"Jason":38,"Ada":35,"Delphino":26}';

$json_arr = json_decode($json_str_4, true);

var_dump($json_arr);    

?>