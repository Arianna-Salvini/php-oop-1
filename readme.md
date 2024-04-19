# Descrizione
create un file `index.php` in cui è definita una classe `Production`

All'interno della classe dovrete gestire:
- un titolo
- una lingua
- un voto (su una scala da 1 a 10). 

La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.

Istanziate poi almeno due oggetti `Production` e stampate a schermo i loro valori.

## BONUS 1 
Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. 

Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare `db.php`

mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare `Models`
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

## BONUS 2 
Create una classe `Genre` (gli attributi potrebbero essere nome e descrizione) e fate in modo che la classe Production accetti un genere nel costruttore. 

Aggiornate le informazioni stampate a schermo con il genere.


**MOVIES**

movies = [
    [
        "title" => "Interstellar",
        "language" => "English",
        "rating" => 8.7,
        "genre" =>  "Sci-fi/Avventura",
        "genre_description" => "Sci-fi/Avventura description ",
    ],
    [
        "title" => "Parasite",
        "language" => "Korean",
        "rating" => 9,
        "genre" =>  "Thriller/Commedia ",
        "genre_description" => "Thriller/Commedia description ",

    ],
    [
        "title" => "Inception",
        "language" => "English",
        "rating" => 9,
        "genre" =>  "Sci-fi/Azione",
        "genre_description" => "Sci-fi/Azione description ",

    ],
    [
        "title" => "Pulp Fiction",
        "language" => "English",
        "rating" => 9,
        "genre" =>  "Giallo/Thriller",
        "genre_description" => "Giallo/Thriller description ",

    ],
    [
        "title" => "Kill Bill: Volume 1",
        "language" => "English",
        "rating" => 10,
        "genre" =>  "Azione/Giallo",
        "genre_description" => "Azione/Giallo description ",

    ],
    [
        "title" => "Kill Bill: Volume 2",
        "language" => "English",
        "rating" => 8,
        "genre" =>  "Azione/Giallo",
        "genre_description" => "Azione/Giallo description ",

    ],
    [
        "title" => "Django Unchained",
        "language" => "English",
        "rating" => 8.5,
        "genre" =>  "Western/Azione",
        "genre_description" => "Western/Azione description ",

    ],
    [
        "title" => "Povere Creature",
        "language" => "English",
        "rating" => 8.5,
        "genre" =>  "Commedia",
        "genre_description" => "Commedia description ",

    ],
    [
        "title" => "Quarto Potere",
        "language" => "English",
        "rating" => 10,
        "genre" =>  "Mystery",
        "genre_description" => "Mystery description ",

    ],
    [
        "title" => "Memorie di una Geisha",
        "language" => "English",
        "rating" => 7,
        "genre" =>  "Romantico/Drammatico",
        "genre_description" => "Romantico/Drammatico description ",

    ],
    [
        "title" => "Your Name",
        "language" => "Japanese",
        "rating" => 8,
        "genre" =>  "Animazione/Romantico",
        "genre_description" => "Animazione/Romantico description ",

    ],
    [
        "title" => "La Principessa Mononoke",
        "language" => "Japanese",
        "rating" => 9,
        "genre" =>  "Romantico/Drammatico",
        "genre_description" => "Romantico/Drammatico description ",

    ],
    [
        "title" => "Il Giardino delle Parole",
        "language" => "Japanese",
        "rating" => 8,
        "genre" =>  "Romantico/Drammatico",
        "genre_description" => "Animazione Romantico/Drammatico description ",

    ],
    [
        "title" => "Il Ragazzo e l'Airone",
        "language" => "Japanese",
        "rating" => 9.5,
        "genre" =>  "",
        "genre_description" => "Genre description ",

    ],
    [
        "title" => "C'è Ancora Domani",
        "language" => "Italian",
        "rating" => 9,
        "genre" =>  "Animazione/Avventura",
        "genre_description" => "Animazione/Avventura description ",

    ],
    [
        "title" => "Tàr",
        "language" => "English",
        "rating" => 8,
        "genre" =>  "Musical/Drammatico ",
        "genre_description" => "Musical/Drammatico  description ",

    ],
    
];