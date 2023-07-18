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

$showOnlyParking = isset($_GET['parkingFilter']) && $_GET['parkingFilter'] === 'on';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <link rel="stylesheet" href="./css/style.css">
</head>
</head>

<body class="bg-dark">
    <div class="container mt-2">
        <h1 class="text-white text-center mb-4">Hotel</h1>
        <form class="mb-4">
            <div class="form-check form-switch d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" id="parkingFilter" name="parkingFilter">
                <label class="form-check-label text-white me-2" for="parkingFilter">Show only hotels with parking</label>
                <button type="submit" class="btn btn-success">Filter</button>
            </div>
        </form>
        <div class="separator mb-4"></div>
        <table class="table text-white">
            <thead>
                <tr class="text-center">
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PARKING</th>
                    <th scope="col">VOTE</th>
                    <th scope="col">DISTANCE TO CENTER</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) :
                    if ($showOnlyParking && !$hotel['parking']) {
                        continue;
                    } ?>
                    <tr class="text-center">
                        <th scope="row"><? echo  $hotel['name'] ?></th>
                        <td><? echo $hotel['description'] ?></td>
                        <?php if ($hotel['parking'] === true) : ?>
                            <td><i class="fa-solid fa-circle-check text-success"></i></td>
                        <?php else : ?>
                            <td><i class="fa-solid fa-circle-xmark text-danger"></i></td>
                        <?php endif ?>
                        <td>
                            <p class="mb-0"><? echo $hotel['vote'] ?><i class="fa-solid fa-star text-warning ms-1"></i></p>
                        </td>
                        <td>
                            <p class="mb-0"><?php echo $hotel['distance_to_center'] ?> Km</p>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>