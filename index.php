<?php

class Production
{
    public $title;
    public $language;
    public $rating;
}

$movie1 = new Production();
$movie1->title = 'Kill Bill - Volume 1';
$movie1->language = 'English';
$movie1->rating = 10;

$movie2 = new Production();
$movie2->rating = 9;
$movie2->title = 'Povere creature';
$movie2->language = 'English';
var_dump($movie1);
var_dump($movie2);
