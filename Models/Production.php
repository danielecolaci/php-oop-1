<?php

class Production{
    public $title;
    public $language;
    public $rating;
    public $genre;

    public function __construct(string $title, string $language, int $rating, Genre $genre){
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
    }

}

?>