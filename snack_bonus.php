<?php

$paragrafo_lungo = "Questo è un paragrafo abbastanza lungo. Esso contiene diverse frasi. Prendiamo il paragrafo e suddividiamolo in tanti paragrafi. Ogni punto segna l'inizio di un nuovo paragrafo. Questa è un'altra frase che fa parte del paragrafo.";

$frasi = explode('.', $paragrafo_lungo);

$frasi_pulite = array_map('trim', $frasi);

$frasi_non_vuote = array_filter($frasi_pulite);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bonus</title>
</head>

<body>
    <?php foreach ($frasi_non_vuote as $frase) : ?>
        <p><? echo $frase ?></p>
    <?php endforeach ?>
</body>

</html>