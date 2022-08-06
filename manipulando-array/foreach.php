<?php

// $contacorrente01 = [
//     "titular" => "Albino Gomes",
//     "saldo" => 12000,
// ];

// $contacorrente02 = [
//     "titular" => "Maria da Silva",
//     "saldo" => 5.000,
// ];

// $contacorrente03 = [
//     "titular" => "João Perreira",
//     "saldo" => 4.000,
// ];

// $clientesDoBanco = [$contacorrente01, $contacorrente02, $contacorrente03];

// foreach($clientesDoBanco as $conta){
//     echo $conta["titular"] . PHP_EOL;
// }


//Para exibir os indeces de cada objetos

// $contacorrente01 = [
//     "titular" => "Albino Gomes",
//     "saldo" => 12000,
// ];

// $contacorrente02 = [
//     "titular" => "Maria da Silva",
//     "saldo" => 5.000,
// ];

// $contacorrente03 = [
//     "titular" => "João Perreira",
//     "saldo" => 4.000,
// ];

// $clientesDoBanco = [
//    "255666666" => $contacorrente01, 
//    "5522888662" => $contacorrente02, 
//     "5552224423" => $contacorrente03];

// foreach($clientesDoBanco as $conta){
//     echo $conta["titular"] . PHP_EOL;
// }


//Refaturar o código por referencias, Cpf:



// $clientesDoBanco = [
//    "255666666" => [
//     "titular" => "Albino Gomes",
//     "saldo" => 12000,
//    ], 
//    "5522888662" => [
//     "titular" => "Maria da Silva",
//     "saldo" => 5.000,
//    ], 
//     "5552224423" => [
//         "titular" => "João Perreira",
//         "saldo" => 4.000,
//     ]
// ];

// foreach($clientesDoBanco as $conta){
//     echo $conta["titular"] . PHP_EOL;
// }


//Adicionar um novo cliente:
$clientesDoBanco = [
    "255666666" => [
     "titular" => "Albino Gomes",
     "saldo" => 12000,
    ], 
    "5522888662" => [
     "titular" => "Maria da Silva",
     "saldo" => 5.000,
    ], 
     "5552224423" => [
         "titular" => "João Perreira",
         "saldo" => 4.000,
     ]
 ];
 $clientesDoBanco['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

 foreach($clientesDoBanco as $cpf => $conta){
     echo "Cpf: " . $cpf . " ==> " . $conta["titular"] . PHP_EOL;
 }

