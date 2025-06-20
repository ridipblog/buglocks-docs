<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?? 'Default title' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="resources/css/main.css?version=<?= time(); ?>" rel="stylesheet" />
    <link href="resources/css/sidebar.css?version=<?= time(); ?>" rel="stylesheet" />
    <link href="resources/css/media.css?version=<?= time(); ?>" rel="stylesheet" />

<body >
    <!-- *** Install Sidebar *** -->
    <?php
    include_once "resources/views/sections/sidebar.php";
    ?>

    <!-- *** Install Body Content *** -->
    <div class="content main-content hidden">
        <div class="container-fluid page-content">
            <?= $content ?? '' ?>
        </div>
    </div>

    <!-- *** Install Loader *** -->
    <div class="content main-load">
        <div class="container-fluid loader-container">
            <div class="rotating-box"></div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- *** Install Extra Js *** -->
     
    <?=
    $extraJs ?? '';
    ?>

</body>

</html>