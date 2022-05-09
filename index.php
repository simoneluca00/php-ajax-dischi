<!-- file contenente l'array multidimensionale -->
<?php include __DIR__ . '/api/database.php'; ?>

<?php
    // link + meta + tag di apertura HTML
    include  __DIR__ . '/partials/meta-open.php';
?>

<div id="app">
    <?php
        //header
        include  __DIR__ . '/partials/header.php';

        // main
        include  __DIR__ . '/partials/main.php';
    ?>

</div>

<?php
    // script CDN + tag di chiusura HTML
    include  __DIR__ . '/partials/cdn-close.php';
?>