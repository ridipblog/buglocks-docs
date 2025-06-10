<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?? 'Default title' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/main.css" rel="stylesheet" />
    <link href="css/sidebar.css" rel="stylesheet" /> 
    <link href="css/media.css" rel="stylesheet" />

    <!-- *** Install Sidebar *** -->
    <?php
    include_once "sections/sidebar.php";
    ?>

    <!-- *** Install Body Content *** -->
    <div class="content">
        <div class="container-fluid">
            <?= $content ?? '' ?>
        </div>
    </div>

    <!-- *** Install Extra Js *** -->
     <?= 
     $extraJs ?? '';
     ?>
    </body>

</html>