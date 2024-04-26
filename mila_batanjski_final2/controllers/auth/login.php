<?php

require ('Validator.php');
$config = require('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $db->query('select * from users where email = :email', [
        'email' => $_POST['email']
    ])->find();


   if($user) {

       if(password_verify($_POST['password'], $user['password'])) {

           $_SESSION['user'] = [
               'email' => $user['email'],
               'name' => $user['name']
           ];

           header('location: /');


       }

   }

}




require './views/auth/login.view.php';