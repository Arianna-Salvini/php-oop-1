<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>

    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class='bg_darkblue'>
    <header>
        <h5 class="page_name">Production Ent.</h5>
    </header>
    <div class="container ">
        <h1 class="text_color_section py-3">Production List</h1>
        <div class="row row-cols-4">
            <?php foreach ($movies as $movie) : ?>
                <div class="p-3">
                    <div class=" bg_card ratio ratio-1x1 rounded-2 shadows">
                        <div class="card-body text-center align-middle  d-flex flex-column justify-content-center">
                            <h3 class=" text_color_titles"> <?= $movie->getTitle() ?> </h3>
                            <div class="card-text align-center text_color_description">
                                <strong>Language: </strong> <?= $movie->getLanguage()  ?>
                            </div>
                            <div class="card-text text_color_description">
                                <strong>Rating: </strong> <?= $movie->getRating() ?>

                                <!-- Add genre and genre description -->
                            </div>

                            <div class="card-text text_color_description">
                                <strong>Genre: </strong> <?= $movie->genre->type ?>
                            </div>
                            <div class="card-text text_color_description">
                                <?= $movie->genre->description_genre  ?>
                            </div>

                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            <?php endforeach ?>
        </div>
        <!-- /.row row-cols-4 -->
    </div>
    <!-- /.container -->
    <footer>
        <div class="text-center">Production Entertaiment ©</div>
    </footer>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac8f8c0862.js" crossorigin="anonymous"></script>
</body>

</html>