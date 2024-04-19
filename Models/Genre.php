
<?php
class Genre extend class Production{
    public function __construct( public string $genre, public string $description_genre)
    {
        
    }
}
?>