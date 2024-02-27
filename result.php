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

<table class="container table table-success table-striped mt-5 text-center">
<thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Voto</th>
      <th scope="col">Dist. dal Centro</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($hotels as $hotel): ?>
      <tr>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?= $hotel['vote'] ?></td>
        <td><?= $hotel['distance_to_center'] ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>


</body>
</html>