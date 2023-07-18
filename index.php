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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
</head>

<body>
    <div class="container mt-2">
        <h1 class="text-white text-center">Hotel</h1>
        <div class="separator"></div>
        <ul>
            <?php foreach ($hotels as $hotel) : ?>
                <li class="text-white">
                    <p><? echo $hotel['name']  ?></p>
                    <p><? echo $hotel['description']  ?></p>
                    <?php if ($hotel['parking'] === true) : ?>
                        <p>yes</p>
                    <?php else : ?>
                        <p>no</p>
                    <?php endif ?>
                    <p><? echo $hotel['vote']  ?></p>
                    <p><? echo $hotel['distance_to_center']  ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>