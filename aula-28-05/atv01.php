<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #ADD8E6;
    }
    h1{
        background-color: white;
        text-align: center;
    }
</style>
<body>
<h1>FUNÇÃO SOMA SEM PARAMETRO</h1>
<?php
function soma(){
    $numero1 = 2;
    $numero2 = 5;
    echo "Soma: ";
    echo $numero1 + $numero2;

}
soma();
echo "<br>";

function somaP($par_1, $par_2){
    $somaPa = $par_1 + $par_2;
    return $somaPa;
}
$retorno = somaP(2,2);
echo "Soma Parametro: ".$retorno;
echo "<br>";

function SomaMulti($par_1, $par_2, $par_3){
    $n1 = $par_1 + $par_2;
    echo "Soma e multiplicacao: ".$n1 * $par_3;

}
SomaMulti(3,2,2);
echo "<br>";

function exemplo($p1, $p2){
    $soma = $p1 + $p2;
    $sub = $soma - $p1;
    $multi = $sub * $p2;
    return $multi;
    
}
$retorno = exemplo(2,3);
echo "O resultado do exemplo é: ".$retorno;
echo "<br>";

function AoQuadrado($p1){
    $aq = pow($p1, 2);
    return $aq;
}
$retorno = AoQuadrado(10);
echo "Elevando ao quadrado: ".$retorno;
?>
</body>
</html>
