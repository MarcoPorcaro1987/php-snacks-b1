<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
$students = [
    [
        "nome" => "Marco",
        "cognome" => "Porcaro",
        "voti" => [7,8,6,4,3,9],
    ],
    [
        "nome" => "Alessandro",
        "cognome" => "Del Piero",
        "voti" => [4,2,9,6,7,8],
    ],
    [
        "nome" => "Roberto",
        "cognome" => "Baggio",
        "voti" => [1,4,7,3,9,0],
    ],
    [
        "nome" => "Francesco",
        "cognome" => "Totti",
        "voti" => [2,4,6,0,4,6],
    ],
    [
        "nome" => "Zinedine",
        "cognome" => "Zidane",
        "voti" => [9,4,6,5,9,3],
    ],
];

function average($array){
    $total = 0;
    foreach ($array as $item){
        $total += $item;
    };
    return round($total/count($array), 2);	
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 7</title>
    </head>
<body>
    <?php 
        foreach($students as $student){
            $voto=average($student['voti']);
            echo "<div>
            <h4>{$student['nome']} {$student['cognome']}</h4>
            <p>Voto Medio: $voto</p>
            </div>";
        }
    ?>
</body>
</html>