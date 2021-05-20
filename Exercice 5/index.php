<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 p4</title>
</head>

<body>
    <?php $number = 1;
    while ($number < 300) { ?>
        <p> <?= $number ?> </p>
    <?php $number += 2;
    } ?>
</body>

</html>