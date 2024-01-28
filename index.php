<?php

require_once __DIR__ . './models/Product.php';
require_once __DIR__ . './models/Cibo.php';
require_once __DIR__ . './models/Category.php';
require_once __DIR__ . './models/Cuccia.php';
require_once __DIR__ . './models/Gioco.php';



  $prodottiCibo=  new Cibo(' Bontà', ' cibo', new Category( 'dog','https://www.canibo.it/wp-content/uploads/2017/07/dog-food-300x200.jpg'), ' Fwelix', 'cibo migliore del mondo per il tuo amico a 4 zampe', '20kg', 'manzo', 12.99 );

  $prodottoCuccia = new Cuccia(' Sicur', ' cuccia', 
  new Category( ' Cat', 'https://www.keblog.it/wp-content/uploads/2017/01/cuccia-gatto-feltro-colorata-yuliya-kosata-02.jpg'),'CATBAD', 'la cuccia che fa viaggiare il tuo gatto','50kg','50x70', 45,99 );
  
  $productGame = new Gioco('GameDog', ' Gioco', new Category( 'dog','https://m.media-amazon.com/images/I/71cE9M+kziL._AC_UF1000,1000_QL80_.jpg'),'talking dog','da oggi il tuo cane parlerà grazie a questo dispositivo',
                           '4kg','interattivo',50,00);


$products=[$prodottiCibo,$prodottoCuccia,$productGame]


?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>

        <h1 class="text-center text-uppercase">felixzon</h1>

    </header>

    <main>
        <div class="container">
            <section class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-3">
                    <div class="card h-100" >
                        <img src="<?php echo $product->category->img ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                            <h3><?php echo $product->name ?> </h3>   
                            <h5 class="card-title">adatto per: <?php echo $product->category->animalCategory ?></h5>   
                            <h5>prodotto:<?php echo $product->tipo ?> </h5> 
                            <h5> <?php echo $product->nameBrand ?></h5>
                             
                            <?php if ($product instanceof Cibo || $product instanceof Cuccia || $product instanceof Gioco) { ?>
                                <ul>
                                    <?php if ($product instanceof Cibo) { ?>
                                        <li>Peso: <?php echo $product->weight ?></li>
                                        <li>Gusto: <?php echo $product->taste ?></li>
                                    <?php } elseif ($product instanceof Cuccia) { ?>
                                        <li>Dimensioni: <?php echo $product->dimensione ?></li>
                                        <li>prezzo: <?php echo $product->price ?></li>
                                    <?php }elseif ($product instanceof Gioco) { ?>
                                        <li>descrizione: <?php echo $product->description ?></li>
                                        <li>prezzo: <?php echo $product->price ?></li>
                                        <?php } ?>
                                </ul>
                            <?php } ?>



                            <a href="#" class="btn btn-primary text-uppercase">compra</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>
        </div>
    </main>


</body>

</html>