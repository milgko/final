<?php

require ('Validator.php');
$config = require('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // validation

    $db->query('insert into users(name, email, password) values(:name, :email, :password)', [
       'name' => $_POST['name'],
       'email' => $_POST['email'],
       'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
    ]);


    header('location: /');

    exit;

}



require './views/auth/register.view.php';