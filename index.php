<!-- *** declare app layout *** -->
<?php
require_once  './vendor/autoload.php';

use App\Http\Request;

$request=new Request();

// *** Current Route Name With Check Valid Route ***
$request->route()
->isValidRoute(); 

$route=$request->request_route;
$time=time();

// *** Set title ***
$title="Index Page";

// *** Set Content ***
// ob_start();
// include_once  'pages/introduction.php';
// $content=ob_get_clean();

// *** Set Extra Js ***
ob_start();
// echo '<script type="module" src="resources/js/Execute/page.js?version=' . time() . '"></script>';

echo <<<EOT
<script type="module">
    import "./resources/js/Execute/page.js?version=$time";
    window.buglocks=window.buglocks || {};
    window.buglocks.route="$route";
</script>
EOT;

$extraJs=ob_get_clean();

include_once  "resources/views/layouts/app.php";
?>
