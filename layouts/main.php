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