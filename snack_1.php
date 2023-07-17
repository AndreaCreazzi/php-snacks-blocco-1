<!-- # Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
$games = [
    [
        'Game' => 1,
        'Team1' => 'Olimpia Milano',
        'Team2' => 'Cantù',
        'Points-Home' => 55,
        'Points-Away' => 60
    ],
    [
        'Game' => 2,
        'Team1' => 'Pisa Destroyer',
        'Team2' => 'Livorno Budello',
        'Points-Home' => 70,
        'Points-Away' => 70
    ],
    [
        'Game' => 3,
        'Team1' => 'Roma Nord',
        'Team2' => 'Roma Sud',
        'Points-Home' => 81,
        'Points-Away' => 45
    ],
    [
        'Game' => 4,
        'Team1' => 'Arancino',
        'Team2' => 'Arancina',
        'Points-Home' => 32,
        'Points-Away' => 46
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h1>Basket Serie A</h1>
    <ul>
        <?php foreach ($games as $game) : ?>
            <li>
                <h2>Partita : <? echo $game['Game'] ?></h2>
                <p><? echo $game['Team1'] ?> - <? echo $game['Team2'] ?> | <? echo $game['Points-Home'] ?> - <? echo $game['Points-Away'] ?></p>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>