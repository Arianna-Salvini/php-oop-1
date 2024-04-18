<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct(string $title, string $language, int $rating)
    {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getRating(): string
    {
        return $this->rating;
    }
}

$movie1 = new Production('Kill Bill - Volume 1', 'English', 10);
// $movie1->title = 'Kill Bill - Volume 1';
// $movie1->language = 'English';
// $movie1->rating = 10;

$movie2 = new Production('Povere creature', 'English', 9);
// $movie2->title = 'Povere creature';
// $movie2->language = 'English';
// $movie2->rating = 9;

var_dump($movie1);
var_dump($movie2);
