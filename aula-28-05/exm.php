<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
<?php
    define("PI", 3.1415);
    
    echo PI;
    echo "<br>";
    echo PI;
    
    echo "<br>";
    function funcConstantes(){
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETORIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNCAO: ".__FUNCTION__."<br>";
    }

    funcConstantes();

    //nao entendi
    $vars_pre = get_defined_vars();
        print_r($vars_pre);
    //nao entendi
    echo "<br>";


    function esse_e_o_nome($par_1 = 0, $par_2 = "vazio") {
        echo "Codigo da Funcao <br>";
        return "Dado de Retorno: ".$par_1."/".$par_2;
        }
        $retorno = esse_e_o_nome();
        echo $retorno."<br><br>";
        $retorno = esse_e_o_nome(12, "Bill Gates");
        echo $retorno."<br><br>";

?>
</body>
</html>


