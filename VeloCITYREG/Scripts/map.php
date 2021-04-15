<?php

$id = $_COOKIE['id'];
$mysql = new mysqli("localhost" , "root", "root", "velo-db");

$result = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
$user = $result->fetch_assoc();
$name = $user['name'];
$pass = $user['pass'];
$email = $user['email'];
echo $name;
echo $pass;
echo $email;


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE", "velo-db");

  $mysql = new mysqli("localhost" , "root", "root", "velo-db");
  $mysql->query("INSERT INTO `map` (`email`, `pass`, `name`) VALUES('$email','$pass','$name')");

    $mysql->close();
header('Location: /VeloCITYREG/')
 ?>
