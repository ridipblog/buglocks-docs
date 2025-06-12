<?php
namespace App\Middleware;

session_start();
class CSRFSecurity
{

    // *** Generate CSRF Token with Cryptographically  *** 
    private function generateCSRFToken()
    {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }

    // *** Validate CSRF Token ***
    public function validateCSRF()
    {
        $this->generateCSRFToken();

        $client_token = $_SESSION['HTTP_X_CSRF_TOKEN'] ?? null;
        $server_token = $_SESSION['csrf_token'] ?? null;

        if (!$client_token !== $server_token) {
            http_response_code(403);
            echo "CSRF token mismatch";
            exit;
        }
    }
}
