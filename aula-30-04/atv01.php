<?php
    $varAluno = array("Fabio", "Joao", "Raifran");
    $varIdade = array("Fabio" => 30, "Joao" => 17, "Raifran" => 18);
    $varEnd = array("Fabio" => "RuaX", "Joao" => "RuaY", "Raifran" => "RuaZ");
    $varCid = array("Fabio" => "Guanambi", "Joao" => "Guanambi", "Raifran" => "Pesqueiro");
    $varEst = array("Fabio" => "Bahia", "Joao" => "Bahia", "Raifran" => "Bahia");
    $varCPF = array("Fabio" => 12, "Joao" => 13, "Raifran" => 98);

    echo "$varAluno[0] tem $varIdade[Fabio] anos de idade. Reside em $varEnd[Fabio], $varCid[Fabio], $varEst[Fabio]. CPF: $varCPF[Fabio]<br>";
    echo "$varAluno[1] tem $varIdade[Joao] anos de idade. Reside em $varEnd[Joao], $varCid[Joao], $varEst[Joao]. CPF: $varCPF[Joao]<br>";
    echo "$varAluno[2] tem $varIdade[Raifran] anos de idade. Reside em $varEnd[Raifran], $varCid[Raifran], $varEst[Raifran]. CPF: $varCPF[Raifran]<br>";
    
    echo "<br>";

    $varPro = array("P" => "Nome");
    $varIdadeP = array("P" => "IdadeP");
    $varEndP = array("P" => "EndP");
    $varCidP = array("P" => "CidP");
    $varEstP = array("P" => "EstP");
    $varCPFP = array("P" => "CPFP");

    echo "Aqui será armazenado o  $varPro[P], $varIdadeP[P], $varEndP[P], $varCidP[P], $varEstP[P], $varCPFP[P]<br>";
?>