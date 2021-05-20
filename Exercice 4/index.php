<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 p4</title>
</head>

<body>
    <p>
        <?php
        function Identity($lastName, $firstName, $age)
        {
            echo 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
        }
        Identity('zindedine', 'Thomas', 99);
        ?>
    </p>
</body>

</html>