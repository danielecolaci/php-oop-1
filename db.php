<?php

require_once "Models/Genre.php";
require_once "Models/Production.php";


$genres = [
    new Genre("Action", "The plot is told while one or more protagonists find themselves having to face a series of challenges that require courage and physical prowess."),
    new Genre("Drama", "It is based on the development of the characters, the interaction between them and deals with themes of emotional impact.")
];

$productions = [
    new Production("Avatar", "English", 8, $genres[0]),
    new Production("C'è ancora Domani", "Italian", 7, $genres[1])
];