<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$dailyGames = 

[
    [
        'homeTeam' => 'Olimpia Milano',
        'visitingTeam' => "Biella",
        'homeScore' => 40,
        'visitingScore' => 56,
    ],
    [
        'homeTeam' => 'Trento',
        'visitingTeam' => "Venezia",
        'homeScore' => 80,
        'visitingScore' => 96,
    ],
    [
        'homeTeam' => 'Varese',
        'visitingTeam' => "Dinamo Sassari",
        'homeScore' => 78,
        'visitingScore' => 76,
    ],
    [
        'homeTeam' => 'Brindisi',
        'visitingTeam' => "Virtus Bologna",
        'homeScore' => 53,
        'visitingScore' => 46,
    ],

];

var_dump($dailyGames);



// $visitingTeamScore = rand(1, 100);
// $homeTeamScore = rand(1, 100);

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
    <ul>
        <?php
        for($i = 0; $i < count($dailyGames); $i++){
            $match = $dailyGames[$i];
            $testoFinale = '';
            //variabili nomi squadre
            $nomiSquadre = $match['homeTeam'] . "-" . $match['visitingTeam'];
            //variabili risultati
            $scoreSquadre = $match['homeScore'] . "-" . $match['visitingScore'];
            $testoFinale = $nomiSquadre . "|" . $scoreSquadre;
        ?>
            <li>
                <?php echo $testoFinale ?>
            </li>
        <?php
        }
        ?>
    </ul>
</body>
</html>