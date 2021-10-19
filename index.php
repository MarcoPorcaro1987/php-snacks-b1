<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

<?php 

$partite = [
    [
        "squadraCasa" => "Boston Celtics",
        "squadraOspite" => "Chicago Bulls" ,
        "puntiCasa" => 53,
        "puntiOspite" => 64
    ],
    [
        "squadraCasa" => "Indiana Pacers",
        "squadraOspite" => "San Antonio Spurs" ,
        "puntiCasa" => 80,
        "puntiOspite" => 59,
    ],
    [
        "squadraCasa" => "Los Angeles Lakers",
        "squadraOspite" => "Miami Heat" ,
        "puntiCasa" => 48,
        "puntiOspite" => 72,
    ],
];

for($i = 0; $i < count($partite); $i++){
    echo $partite[$i]["squadraCasa"] . " " . "-" . " " . $partite[$i]["squadraOspite"] . " " . "|" . " " . $partite[$i]["puntiCasa"] . " " . "-" . " " . $partite[$i]["puntiCasa"] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->