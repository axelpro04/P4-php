<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 3 p4</title>
</head>

<body>
    <p>
        <?php
        function Compare($firstNumber, $secondNumber)
        {
            if ($firstNumber > $secondNumber) {
                echo 'Le premier nombre est plus grand';
            } else if ($firstNumber < $secondNumber) {
                echo 'Le premier nombre est plus petit';
            } else {
                echo 'Les deux nombres sont identiques';
            }
        }
        Compare(20, 15);
        ?>
    </p>
</body>

</html>