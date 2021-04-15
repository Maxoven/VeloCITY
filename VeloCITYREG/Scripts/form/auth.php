<?php
$name = trim($_POST['name']);
$pass = trim($_POST['pass']);
$pass = md5($pass."asjdasdjsadjashd");

  $mysql = new mysqli("localhost" , "root", "root", "velo-db");

  $result = $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
  }

    setcookie('user', $user['name'], time() + 3600, "/");
    setcookie('id',$user['id'], time() + 3600, "/");

  $mysql->close();
      header('Location: /VeloCITYREG/')
 ?>
