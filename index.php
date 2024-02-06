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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Hotel</title>
</head>
<body>
       <div class="container">
         <h1 class="text-center mt-5 display-1 fw-bold title">Hotel</h1>
            <h5 class="text-center mt-3 mb-5">Trova il tuo hotel</h5>
            <div class="my-5 d-flex justify-content-center">
                <form action="script.php" method="POST">
                    <div class="d-flex">
                        <div class="me-5">
                            <label for="parking">Vuoi il parcheggio?</label>
                            <select name="parking" class="form-select" id="parking">
                                <option value="">Scegli</option>
                                <option value="si">Con parcheggio</option>
                                <option value="no">No parcheggio</option>
                            </select>
                        </div>
                        <div>
                            <label for="vote">Seleziona un voto da 1 a 5</label>
                            <select name="vote" class="form-select" id="vote">
                                <option value="">Scegli</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 w-100">Invia</button>
                </form>
            </div>

            <div class='d-flex flex-wrap justify-content-center'>
                <h3 class="mt-4 mb-4">Hotel</h3>
                <table class='table text-capitalize'>
                    <thead>
                        <tr>
                            <th class='col text-center '>Name</th>
                            <th class='col text-center '>Description</th>
                            <th class='col text-center '>Parking</th>
                            <th class='col text-center '>vote</th>
                            <th class='col text-center '>distance of center</th>
                        </tr>
                    </thead>
                    <?php foreach($hotels as $hotel) { 
                        $park=$hotel['parking']? 'si':'no';
                    ?>
                    <tr>
                        <td class="text-center "><?php echo $hotel['name']; ?></td>
                        <td class="text-center "><?php echo $hotel['description']; ?></td>
                        <td class="text-center "><?php echo $park; ?></td>
                        <td class="text-center "><?php echo $hotel['vote']; ?></td>
                        <td class="text-center "><?php echo $hotel['distance_to_center']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>       
</body>
</html>
