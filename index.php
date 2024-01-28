<?php

require_once __DIR__ . './models/Product.php';
require_once __DIR__ . './models/Cibo.php';
require_once __DIR__ . './models/Category.php';
require_once __DIR__ . './models/Cuccia.php';
require_once __DIR__ . './models/Gioco.php';



$prodottiCibo =  new Cibo(' Bontà', ' cibo', new Category('dog', 'https://www.canibo.it/wp-content/uploads/2017/07/dog-food-300x200.jpg'), ' Fwelix', 'cibo migliore del mondo per il tuo amico a 4 zampe', '20kg', 'manzo', 12.99);

$prodottoCuccia = new Cuccia(
    ' Sicur',
    ' cuccia',
    new Category(' Cat', 'https://www.keblog.it/wp-content/uploads/2017/01/cuccia-gatto-feltro-colorata-yuliya-kosata-02.jpg'),
    'CATBAD',
    'la cuccia che fa viaggiare il tuo gatto',
    '50kg',
    '50x70',
    45,
    99
);

$productGame = new Gioco(
    'GameDog',
    ' Gioco',
    new Category('dog', 'https://m.media-amazon.com/images/I/71cE9M+kziL._AC_UF1000,1000_QL80_.jpg'),
    'talking dog',
    'da oggi il tuo cane parlerà grazie a questo dispositivo',
    '4kg',
    'interattivo',
    50,00 
   
);


$products = [$prodottiCibo, $prodottoCuccia, $productGame, $prodottiCibo, $prodottoCuccia, $productGame]


?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <header>

        <h1 class="text-center text-uppercase pt-4 pb-4">felixzon</h1>

    </header>

    <main>
        <div class="container">
            <section class="row">
                <?php foreach ($products as $product) { ?>
                    <div class=" col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="card h-100 " id='My_Font'>
                            <img src="<?php echo $product->category->img ?>" class="card-img-top" alt="...">
                            <div class="card-body ">


                                <h5 class="card-title">adatto per: <?php echo $product->category->animalCategory ?></h5>
                                <h5>prodotto:<?php echo $product->tipo ?> </h5>
                                <h5> <?php echo $product->nameBrand ?></h5>


                                <ul class="list-group list-group-flush">
                                    <?php foreach ($product as $chiave => $valore) {

                                        if (is_a($valore, 'Category')) { ?>
                                            <li>
                                                <?php echo  $chiave;  ?> : <?php echo $valore->animalCategory ?>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                               
                                                <?php echo $chiave === 'price' ? $valore . ' &#8364;' : $valore; ?>
                                            </li>



                                    <?php }
                                    } ?>
                                </ul>






                                <!-- PRIMA PROVA Ddove volevo stampare ogni singolo dato , ma visto che stavo scrivendo ogni singolo li ho provato con in foreach come fatto sopra ^^^^^^ -->


                                <!--<?php if ($product instanceof Cibo || $product instanceof Cuccia || $product instanceof Gioco) { ?>
                                <ul class="list-group list-group-flush">
                                    <?php if ($product instanceof Cibo) { ?>
                                        <li> <?php echo $product->nameBrand ?></li>
                                        <li> <?php echo $product->description ?></li>
                                        <li><?php echo $product->weight ?></li>
                                        <li> <?php echo $product->taste ?></li>
                                        <li> <?php echo $product->price ?> &#8364;</li>
                                        
                                    <?php } elseif ($product instanceof Cuccia) { ?>
                                        <li>Dimensioni: <?php echo $product->dimensione ?></li>
                                        <li>prezzo: <?php echo $product->price ?></li>
                                    <?php } elseif ($product instanceof Gioco) { ?>
                                        <li>descrizione: <?php echo $product->description ?></li>
                                        <li>prezzo: <?php echo $product->price ?></li>
                                        <?php } ?>
                                </ul>
                            <?php } ?>-->



                                <a href="#" class="btn btn-primary text-uppercase mb-2 mt-2">compra</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>


</body>

</html>