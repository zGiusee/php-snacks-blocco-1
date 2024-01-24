<?php

// Variabile di risposta
$accesso = 'Inserisci i tuoi dati';

// Eseguo il controllo per vedere se le informazioni sono state ricevute
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {

    // Definisco le variabili che recupereranno i valori dalla form
    $userName = $_GET['name'];
    $userEmail = $_GET['mail'];
    $userAge = $_GET['age'];

    // Definisco le condizioni per l'inserimento dei dati
    if(strlen($userName) < 3){
        
        $accesso = 'Accesso negato, il tuo username non puoi essere più corto di 3 caratteri!';

    }elseif (is_numeric($userAge) == false){

        $accesso ="Accesso negato, l'età che hai inserito non è un numero!";
        
    }elseif(!str_contains($userEmail, '.') && !str_contains($userEmail, '@')){

        $accesso ='Accesso negato, la mail che hai inserito non è scritta correttamente!';

    }else{

        $accesso ='Accesso riuscito!';
    }

}

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
    <div>

        <div class="container">
            <form action="./snack2.php" method="GET">
                <div class="row py-5">

                    <!-- Name and Mail -->
                    <div class="col-6 py-2">
                        <div class=" py-2">
                            <label for="my_name" class="text-white py-2">Name:</label>
                            <input type="text" name="name" id="my_name" class="form-control w-75">
                        </div>
                        <div class=" py-2">
                            <label for="my_mail" class="text-white py-2">Email:</label>
                            <input type="text" name="mail" id="my_mail" class="form-control w-75 ">
                        </div>
                    </div>

                    <!-- Submit button and Age -->
                    <div class="col-6 py-2">
                        <div class=" py-2">
                            <label for="my_age" class="text-white py-2">Eta:</label>
                            <input type="text" name="age" id="my_age" class="form-control w-25">
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-danger py-2">Invia i dati</button>
                        </div>

                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-12">
                    <h2 class="text-white"><?php echo $accesso ?></h2>
                </div>
            </div>
        </div>



    </div>
</body>

</html>