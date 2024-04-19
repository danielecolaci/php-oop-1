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
    <?php foreach($productions as $production): ?>
    <div>
        <h2><?php echo $production->title ?></h2>
        <p><?php echo $production->language ?></p>
        <h4><?php echo $production->rating ?></h4>
        <h5><?php echo $production->genre->name ?></h5>
    </div>
    <?php endforeach; ?>
</body>
</html>