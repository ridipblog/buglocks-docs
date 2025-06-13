<?php

namespace App\Http;

class Request
{
    // *** Access Route Name ***
    public function route()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        $request_path = parse_url($request_uri, PHP_URL_PATH);
        $segments = explode('/', trim($request_path, '/'));
        $route = end($segments);
        return $route;
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
