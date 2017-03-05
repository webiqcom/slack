<?php
header('Content-Type: application/json');

$valor = $_POST["text"];

$valor_tributos = number_format(($valor * 6 / 100),2,",",".");
$tributos_ferederais = number_format(($valor * 4 / 100),2,",",".");
$tributos_minicipais = number_format(($valor * 2 / 100),2,",",".");

$data["text"] = '
Valor dos tributos aproximado: 6% - R$ '.$valor_tributos.'
Tributos Federais: 4% ­- R$ '.$tributos_ferederais.'
Tributos Municipais: 2%  -­ R$ '.$tributos_minicipais;

echo json_encode($data);
?>