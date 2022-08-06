
<?php

$contacorrente01 = [
    "titular" => "Albino Gomes",
    "saldo" => "12000",
];

$contacorrente02 = [
    "titular" => "Maria da Silva g",
    "saldo" => "5.000",
];

$contacorrente03 = [
    "titular" => "João Perreira",
    "saldo" => "4.000",
];

$clientesDoBanco = [$contacorrente01, $contacorrente02, $contacorrente03];

for ($i = 0; $i < count($clientesDoBanco); $i ++ ){
    echo $clientesDoBanco[$i]["titular"] . PHP_EOL;
}
