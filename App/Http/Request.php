<?php

namespace App\Http;

use App\Traits\Routing;

class Request
{
    use Routing;

    public $request_route=null;
    public function __construct()
    {
        $this->initRoutes();
    }
    // *** Access Route Name ***
    public function route()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        $this->dd($request_uri);
        $request_path = parse_url($request_uri, PHP_URL_PATH);
        $segments = explode('/', trim($request_path, '/'));
        $this->request_route = end($segments);
        return $this;
    }

    // *** Dump DIE ***
    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }
}
