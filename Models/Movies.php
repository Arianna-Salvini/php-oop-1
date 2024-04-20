<?php
// Add class Movie with property profit and duration
class Movie extends Production
{
    public function __construct(public float $profit, public float $duration, public float $rating)
    {
    }
}
