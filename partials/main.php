<main class="overflow-auto">
    <div class="container py-5">
        <h1 class="text-white text-center">Stampa tramite PHP</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php foreach ($database as $album) { ?>

                <div class="col text-center g-3">

                    <div class="sz_card bg-card p-3">
                        <img src="<?php echo $album['poster']; ?>"  alt="<?php echo 'copertina di ' . $album['title']; ?>" class="p-3 img-fluid w-100 mb-3" >
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
        





    </div>
</main>