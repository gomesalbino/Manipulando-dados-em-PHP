
<?php

require_once "funcoes.php";


$clientesDoBanco = [
    "255666666" => [
     "titular" => "Albino Gomes",
     "saldo" => 12000,
    ], 
    "5522888662" => [
     "titular" => "Maria da Silva",
     "saldo" => 5000,
    ], 
     "5552224423" => [
         "titular" => "João Perreira",
         "saldo" => 4000,
     ]
 ];

 $clientesDoBanco["5522888662"] = depositarValor($clientesDoBanco["5522888662"], 200);

 $clientesDoBanco["255666666"] = sacar($clientesDoBanco["255666666"], 750);
 $clientesDoBanco["5552224423"] = sacar($clientesDoBanco["5552224423"], 600);

//  foreach($clientesDoBanco as $cpf => $conta){
//      exibeMensagem("Cpf: " . $cpf . " ==> " . $conta["titular"] . " " . "Saldo: " .$conta["saldo"]) ;
//  }

//Lidar com Strings complexas, usando as {[""]}
foreach($clientesDoBanco as $cpf => $conta){
    exibeMensagem(" $cpf  {$conta["titular"] } {$conta["saldo"]}" ) ;
}

