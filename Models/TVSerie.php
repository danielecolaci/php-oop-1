<?php

require_once 'Production.php';

class TVSerie extends Production {
    public $seasons;

    public function __construct(string $title, string $language, int $rating, Genre $genre, int $seasons){
        parent::__construct($title, $language, $rating, $genre);
        $this->seasons = $seasons;
    }
}

?>