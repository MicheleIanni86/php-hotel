<?php require_once "./init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#8226; PHP HOTEL &#8226;</title>
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-5 text-center mt-5 fw-bold">&#8226; PHP HOTELS &#8226;</h1>
    <div class="container d-flex justify-content-center gap-5">
        <!-- FORM PER RICHIESTA PARCHEGGIO -->
        <form method="GET" class="mt-5">
            <div class="form-check d-flex align-items-center gap-4" >
                 <input 
                 class="form-check-input" 
                 type="checkbox" 
                 id="check-parking" 
                 name="check-parking"
                 <?= $parking_filter ? "checked" : "" ?>
                 >
                 <label class="form-check-label" for="check-parking" >
                    Parcheggio
                 </label>
                <button class="btn btn-primary"> Filtra</button>
            </div>
        </form>
       
        <!-- FORM PER RICHIESTA VOTO -->
        <form method="GET" class="text-center mt-5">
            <label for="hotel-vote" class="form-label">Inserisci il voto dell'hotel </label>
            <input type="number" min="0" max="5" name="hotel-vote" id="hotel-vote">
            <button>Cerca</button>
        </form>
    </div>

<!-- TABELLA HOTELS -->
<table class="container table table-success table-striped mt-5 text-center">
<thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Dist. dal Centro</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($hotels as $hotel):?>
        
      <tr>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?php echo $hotel['parking'] ? "Si" : "No" ?></td>
        <td><?= $hotel['vote'] ?></td>
        <td><?= $hotel['distance_to_center'] ?>  Km</td>
    </tr>
    <?php endforeach; ?>
</tbody>


</body>
</html>