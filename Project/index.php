<?php 

spl_autoload_register(function($classname){
    include "classes/$classname.php";
});

$command = "homepage";
if (isset($_GET["command"])){
    $command = $_GET["command"];
}

// if (!isset($_SESSION["email"])) {
//     // they need to see the login
//     $command = "login";
// }

$moves = new UvaMoves($command);
session_start();
$moves->run();