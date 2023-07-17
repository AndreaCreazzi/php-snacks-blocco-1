<!-- # Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$result = "";

$color = "";

$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

if (strlen($name) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age)) {
    $color = "green";
    $result = "Accesso riuscito";
} else {
    $color = "red";
    $result = "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h1 style="color: <? echo $color ?>"><? echo $result ?></h1>
</body>

</html>