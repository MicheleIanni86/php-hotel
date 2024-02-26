<?php require_once "./init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <ul>

        <?php foreach($hotels as $hotel): ?>
            <li>
                <?= $hotel['name'] ?>
                <?= $hotel['description'] ?>
                <?= $hotel['parking'] ?>
                <?= $hotel['vote'] ?>
                <?= $hotel['distance_to_center'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>