<?php

// Dfinisco l'array delle partite disputate
$matches = [
    [
        'home' => 'Atlanta Hawks',
        'guest' => 'Oklahoma City Thunder',
        'home_points' => 103,
        'guest_points' => 106
    ],
    [
        'home' => 'Chicago Bulls',
        'guest' => 'Charlotte Hornets',
        'home_points' => 113,
        'guest_points' => 127
    ],
    [
        'home' => 'Cleveland Cavaliers',
        'guest' => 'Denver Nuggets',
        'home_points' => 98,
        'guest_points' => 132
    ],
    [
        'home' => 'Golden State Warriors',
        'guest' => 'Los Angeles Clippers',
        'home_points' => 124,
        'guest_points' => 110
    ],
    [
        'home' => 'Los Angeles Lakers',
        'guest' => 'Phoenix Suns',
        'home_points' => 112,
        'guest_points' => 112
    ],
    [
        'home' => 'Sacramento Kings',
        'guest' => 'New Orleans Pelicans',
        'home_points' => 133,
        'guest_points' => 131
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Doc title -->
    <title>php-snacks-blocco-1</title>
    <!-- Main style -->
    <link rel="stylesheet" href="../style/style.css">
    <!-- Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="my-bg-black">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white fw-bold pt-3">Risultati delle partite della 4' Giornata:</h1>
                </div>
                <!--CICLO (PER CICLARE GLI OGGETTI DENTRO L'ARRAY) -->
                <?php foreach ($matches as $match) {  ?>

                    <div class="col-6 py-5">

                        <div class="match_info_container">
                            <h4 class=" text-center fw-bold   "><?php echo $match['home']." - ".$match['guest'];  ?></h4>
                            <h5 class="text-center fw-bold py-1"> Finale: </h5>
                            <p class=" text-center"><?php echo $match['home_points']." - ".$match['guest_points'];  ?></p>
                        </div>

                    </div>

                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>