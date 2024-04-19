<?php

class Production
{
    // public $title;
    // public $language;
    // public $rating;

    public function __construct(public string $title, public string $language, public int $rating)
    {
        //     $this->title = $title;
        //     $this->language = $language;
        //     $this->rating = $rating;
    }

    //Setters 🐶
    public function setTitle($title)
    {
        $this->title;
    }

    public function setLanguage($language)
    {
        $this->language;
    }

    public function setRating($rating)
    {
        $this->rating;
    }

    // Getters
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
