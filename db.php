<?php
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Production.php';

$movies = [
    new Production("Interstellar", "English", 8.7, new Genre("Sci-fi/Avventura", "Sci-fi/Avventura description")),
    new Production("Parasite", "Korean", 9, new Genre("Thriller/Commedia", "Thriller/Commedia description")),
    new Production("Inception", "English", 9, new Genre("Sci-fi/Azione", "Sci-fi/Azione description")),
    new Production("Pulp Fiction", "English", 9, new Genre("Giallo/Thriller", "Giallo/Thriller description")),
    new Production("Kill Bill: Volume 1", "English", 10, new Genre("Azione/Giallo", "Azione/Giallo description")),
    new Production("Kill Bill: Volume 2", "English", 8, new Genre("Azione/Giallo", "Azione/Giallo description")),
    new Production("Django Unchained", "English", 8.5, new Genre("Western/Azione", "Western/Azione description")),
    new Production("Povere Creature", "English", 8.5, new Genre("Commedia", "Commedia description")),
    new Production("Quarto Potere", "English", 10, new Genre("Mystery", "Mystery description")),
    new Production("Memorie di una Geisha", "English", 7, new Genre("Romantico/Drammatico", "Romantico/Drammatico description")),
    new Production("Your Name", "Japanese", 8, new Genre("Animazione/Romantico", "Animazione/Romantico description")),
    new Production("La Principessa Mononoke", "Japanese", 9, new Genre("Romantico/Drammatico", "Romantico/Drammatico description")),
    new Production("Il Giardino delle Parole", "Japanese", 8, new Genre("Romantico/Drammatico", "Animazione Romantico/Drammatico description")),
    new Production("Il Ragazzo e l'Airone", "Japanese", 9.5, new Genre("", "Genre description")),
    new Production("C'è Ancora Domani", "Italian", 9, new Genre("Animazione/Avventura", "Animazione/Avventura description")),
    new Production("Tàr", "English", 8, new Genre("Musical/Drammatico", "Musical/Drammatico description")),
];
