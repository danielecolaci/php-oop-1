<?php

require_once 'Production.php';

class Movie extends Production {
    public $profits;
    public $duration;

    public function __construct(string $title, string $language, int $rating, Genre $genre, int $profits, int $duration){
        parent::__construct($title, $language, $rating, $genre);
        $this->profits = $profits;
        $this->duration = $duration;
    }
}

?>