<!-- *** declare app layout *** -->
<?php

// *** Set title ***
$title="Index Page";

// *** Set Content ***
// ob_start();
// include_once  'pages/introduction.php';
// $content=ob_get_clean();

// *** Set Extra Js ***
ob_start();

echo '<script type="module" src="resources/js/Execute/page.js?version=' . time() . '"></script>';

$extraJs=ob_get_clean();

include_once  "resources/views/layouts/app.php";
?>

