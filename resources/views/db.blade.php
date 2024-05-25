<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion DB</title>
</head>

<body>
    <div>
        <?php
        if (DB::connection()->getPdo()) {
            echo 'Connexion réussi à la base de données. =>' . DB::connection()->getDatabaseName();
        }
        ?>
    </div>
</body>

</html>
