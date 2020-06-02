<?php
    //Arrays multidimensionais
    $notas = array(
        array(10.0, 8.7, 6.5, 7.3),
        array(8.5, 4.3, 6.9, 7.1),
        array(10.0, 9.0, 8.0, 7.0)
    );
    //Acessar uma nota diretamente
    //linha e coluna
    echo "Nota: " . $notas[1][2] . "<br />";

    //usar o i para indice da linha
    //usar o j para indice da coluna
    for ($i=0; $i < 3; $i++) { 
        echo "Aluno " . ($i+1) . ": notas -> ";
        for ($j=0; $j < 4; $j++) { 
            if($j!=3) {
                echo $notas[$i][$j] . ", ";
            }else{
                echo $notas[$i][$j];
            }
        }
        echo "<br />";
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <td>Alunos</td>
                <td>Nota 1</td>
                <td>Nota 2</td>
                <td>Nota 3</td>
                <td>Nota 4</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($notas as $vetor) { //Dentro da matriz cada linha é um vetor               <td>Aluno --</td>
                ?>
                <tr>
                    <td>Aluno --</td>
                    <?php
                        foreach($vetor as $nota){ //Dentro do vetor cada coluna é uma nota
                        ?>
                            <td><?=$nota?></td>
                            <?php
                        }
                ?>
                </tr>      
                    <?php
                }
            ?>
        </tbody>
    </table>