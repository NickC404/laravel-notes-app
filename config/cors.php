<?php

return [

'paths' => [
'api/*',
'sanctum/csrf-cookie',
'login',
'logout',
'register',
// Add other auth or custom routes here as needed
],

'allowed_methods' => ['*'], // Allow all HTTP methods

'allowed_origins' => [
'http://localhost:5173', // Vue's default Vite dev server
],

'allowed_origins_patterns' => [],

'allowed_headers' => ['*'],

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => true, // Crucial: allow cookies/session
];
