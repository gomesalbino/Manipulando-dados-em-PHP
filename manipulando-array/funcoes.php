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
 echo $menssagem . "<br>";
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

function titularComLetrasMaiusculas( array &$conta)
{
    $conta["titular"] = strtoupper($conta["titular"]);
}

function exibeConta(array $conta)
{
    ["titular" => $titular, "saldo" => $saldo] = $conta;
    echo "<li> Titular: $titular . Saldo: $saldo</li>";
}