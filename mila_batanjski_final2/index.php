<?php
    
    // this file will be the entry point of the application
    
    // start the session when the application starts
    session_start();
    
    require('functions.php');
    require ('Database.php');
    require ('Response.php');
    require('router.php');