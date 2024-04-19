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


    // getting
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
