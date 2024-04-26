<?php
    
    $uri = $_SERVER['REQUEST_URI'];
    
    // place to store all routes
    $routes = [
        '/' => 'controllers/pages/home.php',
        '/userposts' => 'controllers/pages/userposts.php',
        '/books' => 'controllers/pages/books.php',
        '/register' => 'controllers/auth/register.php',
        '/login' => 'controllers/auth/login.php',
        '/logout' => 'controllers/auth/logout.php',
    ];
    
    // abort function
    function abort($code = 404) {
        http_response_code($code);
        die();
    }
    
    // check if the route exists
    function routeToController($uri, $routes) {
        if(array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }
    
    routeToController($uri, $routes);