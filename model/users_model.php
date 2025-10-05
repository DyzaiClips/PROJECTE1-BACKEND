<?php
$users = [ [
         "id"=> 0,
         "name"=> "DanAdmin",
         "username" => "Admin",
         "password" => "password",
         "mail" => "dancastany06@gmail.com",
         "rol" => "admin"
     ],[
         "id"=> 1,
         "name"=> "DanUser",
         "username" => "Dan",
         "password" => "password",
         "mail" => "dan.fernandez@cirvianum.cat",
         "rol" => "user" ]
];
$_SESSION['users']=$users;



?>