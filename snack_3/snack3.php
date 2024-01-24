<?php
// Dfinisco l'array degli articoli
$articles = [

    '23/04/2024' => [
        [
            'fonte' => 'TGCOM 24',
            'title' => 'Maxi arresto!',
            'author' => 'Michele Giagiugi',
            'text' => 'Incredibile arrestati tutti quelli che lasciano il visualizzato su WhatsApp!'
        ],
        [
            'fonte' => 'TGCOM 25',
            'title' => 'Guerra nel villagio della Foglia!',
            'author' => 'Naruto',
            'text' => 'Testo post 2'
        ],
    ],
    '24/04/2024' => [
        [
            'fonte' => 'TGCOM 24',
            'title' => 'Limiti di velocità, interviene il ministero: "È arbitrario generalizzarli in città" ',
            'author' => 'Ricky Mattei',
            'text' => 'Dopo le ordinanze del Comune di Bologna che istituiscono in città il limite di 30 km/h, la direttiva precisa che l abbassamento può essere deciso solo in aree limitate e per specifici motivi'
        ],
        [
            'fonte' => 'TGCOM 24',
            'title' => 'Limiti di velocità, interviene il ministero: "È arbitrario generalizzarli in città" ',
            'author' => 'Ricky Mattei',
            'text' => 'Dopo le ordinanze del Comune di Bologna che istituiscono in città il limite di 30 km/h, la direttiva precisa che l abbassamento può essere deciso solo in aree limitate e per specifici motivi'
        ]
    ],
    '25/04/2024' => [
        [
            'fonte' => 'TGCOM 24',
            'title' => 'Fleximan colpisce ancora in Veneto, i sindaci si arrendono: "Non ripareremo gli autovelox abbattuti"',
            'author' => 'V per Vendetta',
            'text' => 'Questa volta è comparsa anche la firma: un cartello con la scritta a caratteri cubitali "Fleximan sta arrivando"'
        ],
        [
            'fonte' => 'TGCOM 26',
            'title' => 'Una super-telecamera "vede" i colori con gli occhi degli animali ',
            'author' => 'Leone il cane fifone',
            'text' => 'Boh ok, ci sta.'
        ],
        [
            'fonte' => 'TGCOM 24',
            'title' => 'Sinner supera Rublev: semifinale con Djokovic ',
            'author' => 'Marco Cangelli',
            'text' => 'Il 22enne di Sesto Pusteria si è imposto per 6-4 7-6 6-3 al termine di una sfida durata quasi tre ore ritrovando così il serbo al prossimo turno'
        ],
        [
            'fonte' => 'TGCOM 23',
            'title' => 'Matera: arrestato un 57enne! Ecco che cosa ha scoperto la Polizia',
            'author' => 'Seth Rollins',
            'text' => 'Non gli piacevano i sassi.'
        ]
    ],
];
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
        <div class="container mt-5">
            <?php foreach ($articles as $index => $article) {  ?>
                <!-- Data delle notizie  -->
                <h1 class="text-white fw-bold">Notizie del: <?php echo $index ?></h1>
                <div class="row pb-5">

                    <?php foreach ($article as $article_info) {  ?>
                        <div class="col-6">

                            <div class="article_container mt-3">
                                <!-- Fonte notizia -->
                                <p class="fw-blod py-2">Fonte: <?php echo $article_info['fonte']; ?> </p>

                                <!-- Titolo notizia -->
                                <h2 class=" text-center fw-bold py-2  "><?php echo $article_info['title'];  ?></h2>

                                <!-- Testo notizia -->
                                <p class=" text-center py-2"><?php echo $article_info['text'];  ?></p>

                                <!-- Autore -->
                                <p class="text-end py-2">Autore: <?php echo $article_info['author'];  ?></p>
                            </div>

                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>