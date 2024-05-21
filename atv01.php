<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #d12d3d;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ADD8E6;
}
</style>
<body>
    <pre>
    <?php
        $array = [
            'alunos' => [
                [
                    'id' => 1,
                    'nome' => 'Jamal Murray',
                    'idade' => 27,
                    'altura' => '1.93m',
                    'nota' => 8
                ],
                [
                    'id' => 2,
                    'nome' => 'Nikola Jokic',
                    'idade' => 29,
                    'altura' => '2.11m',
                    'nota' => 10
                ],
                [
                    'id' => 3,
                    'nome' => 'Kentavious Caldwell-Pope',
                    'idade' => 31,
                    'altura' => '1.96m',
                    'nota' => 3
                ],
                [
                    'id' => 4,
                    'nome' => 'Aaron Gordon',
                    'idade' => 28,
                    'altura' => '2.03m',
                    'nota' => 7
                ]
            ]
                ];

                print_r($array['alunos'][0]['nota']);
                echo '<br>';
    
        print_r($array);
        echo '<br>';
        print_r($array['alunos'][0]['nome']);
        echo '<br>';
        print_r($array['alunos'][1]['nome']);
        echo '<br>';
        print_r($array['alunos'][2]['nome']);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>idade</th>
            <th>altura</th>
            <th>nota</th>
        </tr>
        <tr>
            <td><?php print_r($array['alunos'][0]['id'])?></td>
            <td><?php print_r($array['alunos'][0]['nome'])?></td>
            <td><?php print_r($array['alunos'][0]['idade'])?></td>
            <td><?php print_r($array['alunos'][0]['altura'])?></td>
            <td><?php print_r($array['alunos'][0]['nota'])?></td>
        </tr>
        <tr>
            <td><?php print_r($array['alunos'][1]['id'])?></td>
            <td><?php print_r($array['alunos'][1]['nome'])?></td>
            <td><?php print_r($array['alunos'][1]['idade'])?></td>
            <td><?php print_r($array['alunos'][1]['altura'])?></td>
            <td><?php print_r($array['alunos'][1]['nota'])?></td>
        </tr>
        <tr>
            <td><?php print_r($array['alunos'][2]['id'])?></td>
            <td><?php print_r($array['alunos'][2]['nome'])?></td>
            <td><?php print_r($array['alunos'][2]['idade'])?></td>
            <td><?php print_r($array['alunos'][2]['altura'])?></td>
            <td><?php print_r($array['alunos'][2]['nota'])?></td>
        </tr>
    </table>

<?php
       echo count($array['alunos']);
       echo '<br>';
       for($a=0; $a<(count($array['alunos'])); $a++) {
        print_r($array['alunos'][$a]['nome']);   
    }
    echo "<br>";
?>
    <table>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>idade</th>
            <th>altura</th>
            <th>nota</th>
        </tr>
            <?php for($a=0; $a<(count($array['alunos'])); $a++) { ?>
                
                <tr>
                    <td><?php print_r($array['alunos'][$a]['id']);?></td>
                    <td><?php print_r($array['alunos'][$a]['nome']);?></td>
                    <td><?php print_r($array['alunos'][$a]['idade']);?></td>
                    <td><?php print_r($array['alunos'][$a]['altura']);?></td>
                    <td><?php print_r($array['alunos'][$a]['nota']);?></td>
                </tr>
            <?php } ?>
        
        </table>

        <?php
               for($a=0; $a<(count($array['alunos'])); $a++)

        if(($array['alunos'][$a]['nota']) > 7){
            echo ($array['alunos'][$a]['nome']);
            echo '<br>';
        }
        if(($array['alunos'][$a]['nota']) > 7){
            echo ($array['alunos'][$a]['nome']);
            echo '<br>';
        }
        
        ?>

    <pre>
</body>
</html>