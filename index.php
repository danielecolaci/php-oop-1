<?php

class Production{
    public $title;
    public $language;
    public $rating;

    public function __construct($title, $language, $rating){
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

}

$production1 = new Production("Avatar", "English", 8);
$production2 = new Production("C'è ancora Domani", "Italian", 7);

var_dump($production1);
var_dump($production2);

?>