    <?php 
        $var = array(1, 2, 3, 5);
        echo "Exemplo 01<br>";
        echo "$var[0]<br>";
        echo "$var[1]<br>";
        echo "$var[2]<br>";
        echo "$var[3]<br>";
        echo "<br>";


        $var1 = array("fabio" => 30, "eber" => 40, "wr" => 60);
        echo "Exemplo 02<br>";
        echo "$var1[fabio]<br>";
        echo "$var1[eber]<br>";
        echo "$var1[wr]<br>";
        echo "<br>"; 


        $var2 = array(0 => 5, 6 => 8, 9 => 15);
        echo "Exemplo 03<br>";
        $var2[1] = 20;
        $var2[2] = 3;
        echo "$var2[0]<br>";
        echo "$var2[6]<br>";
        echo "$var2[9]<br>";
        echo "$var2[1]<br>";
        echo "$var2[2]<br>";

    ?>