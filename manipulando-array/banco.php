
<?php


require_once "funcoes.php";

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

        exibeMensagem("Só pode depositar os valores positivos!");

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

         "titular" => "João dos santos Perreira",


         "titular" => "João dos santos Perreira",

         "saldo" => 4000,
     ]
 ];

 $clientesDoBanco["5522888662"] = depositarValor($clientesDoBanco["5522888662"], 200);

 $clientesDoBanco["255666666"] = sacar($clientesDoBanco["255666666"], 750);
 $clientesDoBanco["5552224423"] = sacar($clientesDoBanco["5552224423"], 600);

 titularComLetrasMaiusculas($clientesDoBanco["255666666"]);

//  foreach($clientesDoBanco as $cpf => $conta){
//      exibeMensagem("Cpf: " . $cpf . " ==> " . $conta["titular"] . " " . "Saldo: " .$conta["saldo"]) ;
//  }

//Lidar com Strings complexas, usando as {[""]}
// foreach($clientesDoBanco as $cpf => $conta){
//     exibeMensagem(" $cpf  {$conta["titular"] } {$conta["saldo"]}" ) ;
// }


//Uma outra forma de escrever e pegar os valor especificos
//unset($clientesDoBanco[ "255666666"]);
// foreach($clientesDoBanco as $cpf => $conta){
//     ["titular" => $titular, "saldo" => $saldo] = $conta;
//     exibeMensagem("$cpf $titular  $saldo" ) ;
// }

// echo "<ul>";
// foreach($clientesDoBanco as $cpf => $conta){
//     exibeConta($conta ) ;
// }
// echo "</ul>";
// $clientesDoBanco["255666666"] = sacar($clientesDoBanco["255666666"], 750);
// $clientesDoBanco["5552224423"] = sacar($clientesDoBanco["5552224423"], 600);

// foreach($clientesDoBanco as $cpf => $conta){
//     exibeMensagem("Cpf: " . $cpf . " ==> " . $conta["titular"] . " " . "Saldo: " .$conta["saldo"]) ;
// }


// foreach($clientesDoBanco as $cpf => $conta){
//     exibeMensagem("Cpf: " . $cpf . " ==> " . $conta["titular"] . " " . "Saldo: " .$conta["saldo"]) ;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Funções</title>
</head>
<body>
    <h1>Contas correntes dos clientes!</h1>
    <dl>
       <?php foreach($clientesDoBanco as $cpf => $conta){ ?>
        <dt>
            <h3>
                <?= $conta["titular"]; ?> - <?= $cpf; ?>
            </h3>
        </dt>
        <dd>
            Saldo: <?= $conta["saldo"]; ?>
         </dd>
        <?php } ?>
    </dl>
</body>
</html>




