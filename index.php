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
    $filteredHotels = [];

    if(isset($_GET['parking'])){
        foreach($hotels as $hotel)
            if($hotel['parking']){
                $filteredHotels[] = $hotel;
            }
    }else{
        $filteredHotels = $hotels;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>

<!-- STAMPA SEMPLICE  -->
    <!-- <ul>
        <?php foreach($hotels as $hotel): ?>
        <li>
            <?php echo $hotel['name'] ?> -
            <?php echo $hotel['description'] ?> -
            <?php echo ($hotel['parking'] === true) ? "yes" : "no"; ?> -
            <?php echo $hotel['vote'] ?> -
            <?php echo $hotel['distance_to_center'] ?>
        </li>
        <?php endforeach; ?>
    </ul> -->

<!-- TABELLA  -->
<div class="container py-5">
    <table class="table bg-warning">
        <h1 class="text-center text-danger">Hotels</h1>
        <thead>
            <tr class="bg-danger">
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to Centre</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($filteredHotels as $hotel): ?>
            <tr>
                <td><?php echo $hotel['name'] ?></td>
                <td><?php echo $hotel['description'] ?></td>
                <td><?php echo ($hotel['parking'] === true) ? "yes" : "no"; ?></td>
                <td><?php echo $hotel['vote'] ?></td>
                <td><?php echo $hotel['distance_to_center'] ?> km</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<!-- FORM  -->
<div class="container py-5 ">
    <form action="index.php" method="GET">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="parking" name="parking">
        <label class="form-check-label" for="parking">
        Parking
        </label>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
    </form>
</div>    
</body>
</html>