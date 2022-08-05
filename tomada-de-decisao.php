
<?php

$idade = 17;
$numeroDePessoa = 2;
//$nome = "Albino Gomes";
echo "Só pode entrar se tiver maior de 18 anos. Ou apartir de 16 anos aconpanhado!" . PHP_EOL;
/*
if ($idade >= 18){
    echo "A sua idade é $idade" .PHP_EOL;
    echo "Você pode entrar!!!";
}
*/
/*
if ($idade >= 18 && $nome == 'Albino Gomes'){
    echo "Sua idade é $idade" . PHP_EOL;
    echo "E seu nome é $nome" . PHP_EOL;
    echo "Pode entrar!";
}
*/

if ($idade >= 18 ){
    echo "Sua idade é $idade" . PHP_EOL;
    echo "Pode entrar sozinho!";
} elseif ($idade >= 16 && $idade < 18 && $numeroDePessoa > 1){
        echo "Sua idade é $idade anos" . PHP_EOL;
        echo "Pode entrar aconpanhado!!";
    } else {

        echo "Você não pode entrar, só tem $idade anos!";
    }

echo PHP_EOL;
echo "Obrigado!!";

