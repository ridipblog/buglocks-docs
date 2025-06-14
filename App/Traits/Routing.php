<?php

declare(strict_types=1);

namespace App\Traits;

trait Routing
{
    private array $routes = [];
    private function initRoutes(): void
    {

        require './route/routes.php';
        $this->routes = $routes;
    }
    //  *** Check Route Valid or Not ***
    private function isValidRoute(string $route = null)
    {
        $request_route = $route ?? $this->request_route;
        if (!in_array(($route ?? $this->request_route), $this->routes)) {
            http_response_code(404);
            echo "Route not found";
            exit(1);
        }
    }
}
