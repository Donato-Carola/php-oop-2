<?php

require_once __DIR__ . './models/Product.php';
require_once __DIR__ . './models/Cibo.php';


$products = [
    new Product('aaaaa', 'cane', 'cibo','https://www.canibo.it/wp-content/uploads/2017/07/dog-food-300x200.jpg'),
    new Cibo('felix','cibo buonissimo per il tuo fedele amico a 4 zampe'    ,  '50kg', 'carota', 12.50),

]


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
                    <div class="card" >
                        <img src="<?php echo $product->img ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">adatto per: <?php echo $product->animalCategory ?></h5>
                            <p class="card-text"><?php echo $product->description ?> </p>
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