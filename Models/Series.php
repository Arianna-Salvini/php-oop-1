<?php
// Add class Series with property for seasons' number
class Movie extends Production
{
    public function __construct(public float $seasonN)
    {
    }
}
