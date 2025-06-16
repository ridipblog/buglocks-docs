<?php

declare(strict_types=1);

namespace App\Traits;

trait Routing
{
    public array $routes = [];
    private function initRoutes(): void
    {

        require './route/routes.php';
        $this->routes = $routes;
    }
    //  *** Check Route Valid or Not ***
    public function isValidRoute(string $route = null)
    {
        $request_route = $route ?? $this->request_route;
        // if($this->request_route==''){
        //     $this->request_route='introduction';
        // }
        if (!in_array(($route ?? $this->request_route), $this->routes)) {
            // http_response_code(404);
            // require __DIR__. '../../../resources/views/pages/404.php';
            // exit(1);
            $this->request_route='404';
        }
    }
}
