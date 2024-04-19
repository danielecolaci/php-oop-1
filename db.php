<?php

require_once "Models/Genre.php";
require_once "Models/Production.php";
require_once "Models/Movie.php";
require_once "Models/TVSerie.php";


$genres = [
    new Genre("Action", "The plot is told while one or more protagonists find themselves having to face a series of challenges that require courage and physical prowess."),
    new Genre("Drama", "It is based on the development of the characters, the interaction between them and deals with themes of emotional impact.")
];

$productions = [
    new Movie("Avatar", "English", 8, $genres[0], 531.7, 2.42),
    new Movie("C'è ancora Domani", "Italian", 7, $genres[1], 36.6, 1.58),
    new TvSerie("Lost", "English", 9, $genres[0], 6)
];

var_dump($productions);

?>