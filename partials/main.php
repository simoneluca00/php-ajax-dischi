<main class="overflow-auto">
    <div class="container py-5">

        <h1 class="text-white text-center text-decoration-underline">
            Stampa tramite PHP
        </h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            <?php foreach ($filteredByGenre as $album) { ?>

            <div class="col text-center g-3">

                <div class="sz_card bg-card rounded-3 p-3">
                    <img src="<?php echo $album['poster']; ?>" alt="<?php echo 'copertina di ' . $album['title']; ?>"
                        class="p-3 img-fluid w-100 mb-3">
                    <div class="">
                        <h5 class="text-white fw-bold text-uppercase mb-3">
                            <?php echo $album['title']; ?>
                        </h5>
                        <h5 class="text-secondary">
                            <?php echo $album['author']; ?>
                        </h5>
                        <h5 class="text-secondary">
                            <?php echo $album['year']; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <h1 class="text-white text-center mt-5 text-decoration-underline">
            Stampa tramite Vue e Axios
        </h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            <div class="col text-center g-3" v-for="(elm, i) in albums" :key="i">

                <div class="sz_card bg-card p-3">
                    <img :src="elm.poster" :alt="'copertina di ' + elm.title" class="p-3 img-fluid w-100 mb-3">
                    <div class="">
                        <h5 class="text-white fw-bold text-uppercase mb-3">
                            {{elm.title}}
                        </h5>
                        <h5 class="text-secondary">
                            {{elm.author}}
                        </h5>
                        <h5 class="text-secondary">
                            {{elm.year}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>