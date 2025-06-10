<!-- *** declare app layout *** -->
<?php
// *** Set title ***
$title="Index Page";

// *** Set Content ***
ob_start();
include_once  'pages/introduction.php';
$content=ob_get_clean();

// *** Set Extra Js ***
$extraJs ='<script src="js/Request.js"></script>';

include_once  "layouts/app.php";
?>

