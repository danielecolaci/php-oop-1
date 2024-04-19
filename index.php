<?php

require_once "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    <h1>Movies</h1>
    <?php foreach($productions as $production): ?>
        <?php if ($production instanceof Movie): ?>
    <div>
        <h2><?php echo $production->title ?></h2>
        <p><?php echo $production->language ?></p>
        <h4><?php echo $production->rating ?>/10</h4>
        <h5><?php echo $production->genre->name ?></h5>
        <h6><?php echo $production->duration ?> minutes</h6>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <h1>TVSeries</h1>
    <?php foreach($productions as $production): ?>
        <?php if ($production instanceof TVSerie): ?>
    <div>
        <h2><?php echo $production->title ?></h2>
        <p><?php echo $production->language ?></p>
        <h4><?php echo $production->rating ?></h4>
        <h5><?php echo $production->genre->name ?></h5>
        <h6><?php echo $production->seasons ?> seasons</h6>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>