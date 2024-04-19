<?php

require_once "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1 class="my-3">Movies</h1>
        <div class="row">
            <?php foreach($productions as $production): ?>
                <?php if ($production instanceof Movie): ?>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $production->title ?></h2>
                        <p><?php echo $production->language ?></p>
                        <h4><?php echo $production->rating ?>/10</h4>
                        <h5><?php echo $production->genre->name ?></h5>
                        <h6><?php echo $production->duration ?> minutes</h6>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <h1 class="my-3">TVSeries</h1>
        <div class="row">
            <?php foreach($productions as $production): ?>
                <?php if ($production instanceof TVSerie): ?>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $production->title ?></h2>
                        <p><?php echo $production->language ?></p>
                        <h4><?php echo $production->rating ?>/10</h4>
                        <h5><?php echo $production->genre->name ?></h5>
                        <h6><?php echo $production->seasons ?> seasons</h6>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>