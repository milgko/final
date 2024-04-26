<?php
    function routeIs($uri) {
        return $_SERVER['REQUEST_URI'] === $uri;
    }
    
    function dd($var) {
        
        echo "<pre>";
            var_dump($var);
        echo "</pre>";
        
        die();
    }

    function authorize($condition, $status = Response::FORBIDDEN) {

        if(! $condition) {
            abort($status);
        }

    }