<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // filtro per parcheggio
    $parking_filter  = isset($_GET['check-parking']) ? true : false;
  if ($parking_filter) {
    $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);
  }

    // filtro per voto
    // $vote_filter  = $_GET['hotel-vote'];

    // $form_sent = !empty($_GET);



    // if ($form_sent) {
    //     $parking_filter  = $_GET['hotel-parking'] ?? '' && $vote_filter  = $_GET['hotel-vote'] ?? '';

    //     $hotel_filter = [];

    //     foreach ($hotels as $hotel) {
    //         if (
    //             $parking_filter[value]
    //         )
    //     },
    // }
?>


