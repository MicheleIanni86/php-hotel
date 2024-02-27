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
    <div class="container d-flex">

        <form method="GET" class="container text-center mt-5">
            <select class="form-select" name="hotel-parking">
            <option selected>Cerchi Hotel con Parcheggio?</option>
            <option value="si">Si</option>
            <option value="no">No</option>
            </select>
        </form>
        <form method="GET" class="container text-center mt-5">
            <label for="hotel-vote" class="form-label">Inserisci il voto dell'hotel </label>
            <input type="text" name="hotel-vote" id="hotel-vote">
            <button>Cerca</button>
        </form>
    </div>

<table class="container table table-success table-striped mt-5 text-center">
<thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Voto</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Dist. dal Centro</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($hotels as $hotel): ?>
      <tr>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?= $hotel['vote'] ?></td>
        <td><?php echo $hotel['parking'] ? "Si" : "No" ?></td>
        <td><?= $hotel['distance_to_center'] ?>  Km</td>
    </tr>
    <?php endforeach; ?>
</tbody>


</body>
</html>