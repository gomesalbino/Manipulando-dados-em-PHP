
<?php

// for ($i = 1; $i <=100;  $i++){

//     if($i % 2 != 0){
//         echo $i . PHP_EOL;
//     }

// }


//Fazer uma Tabuada

// $tabuadaDe = 8;

// for ($i = 1; $i<= 10; $i++){
//     $resultado = $tabuadaDe * $i;
//     echo "$tabuadaDe x $i = " . $resultado . PHP_EOL; 
// }



//Calcular o IMC

$peso =70;
$altura = 1.70 ;

$IMC = $peso / $altura ** 2;

if ($IMC < 18.5){
    echo "O seu é : $IMC" . PHP_EOL;
    echo "Você está magro, precisa se alimentar";
}elseif($IMC >= 18.5 && $IMC <= 24.9){
    echo "O seu Imc é: $IMC" . PHP_EOL;
    echo "IMC normal";
}elseif($IMC >= 25 && $IMC <= 29.9 ){
    echo " O seu imc é: $IMC" . PHP_EOL;
    echo "Sobrepeso!";
}elseif($IMC >= 30 && $IMC <= 34.9){
    echo "O seu imc é: $IMC" . PHP_EOL;
    echo "Obesidade grau I!";
}elseif($IMC >= 35 && $IMC <= 39.9){
    echo "o seu imc é: $IMC" . PHP_EOL;
    echo "Obesidade grau II!";
}else{
    echo "Peso superiodade relativa";
}
