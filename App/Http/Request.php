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
        $request_path = parse_url($request_uri, PHP_URL_PATH);
        $segments = explode('/', trim($request_path, '/'));
        $this->request_route = end($segments);
        return $this;
    }

    
}
