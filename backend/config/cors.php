<?php

return [
    // Allow API routes and Sanctum's CSRF cookie
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    // Important: Put your React URL here (e.g., http://localhost:3000)
    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // Set this to true if you are using Sanctum for authentication
    'supports_credentials' => true,
];