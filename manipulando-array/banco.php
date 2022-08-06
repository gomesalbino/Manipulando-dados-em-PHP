
<?php

function sacar( array $conta, float $valorASacar) : array
{

    if ($valorASacar > $conta["saldo"]){
        exibeMensagem("Você não pode sacar este valor");
    }else{
    
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem( string $menssagem)
{
 echo $menssagem . PHP_EOL;
}

function depositarValor(array $conta, float $valorAdepositar): array
{
    if($valorAdepositar < 0){
        exibeMensagem("Só pode depositar os valores positivo!");
    }else{
        $conta["saldo"] += $valorAdepositar;
    }
    return $conta;
}
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

 foreach($clientesDoBanco as $cpf => $conta){
     exibeMensagem("Cpf: " . $cpf . " ==> " . $conta["titular"] . " " . "Saldo: " .$conta["saldo"]) ;
 }
