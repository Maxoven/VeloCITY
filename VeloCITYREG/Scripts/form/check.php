<?php
  $email = trim($_POST['email']);
  $name = trim($_POST['name']);
  $pass = trim($_POST['pass']);

  if(mb_strlen($email) < 7 || mb_strlen($login) > 90) {
    echo"Недопустимая длина email";
    exit();
  } else if(mb_strlen($name) < 3 || mb_strlen($name) > 90) {
    echo"Недопустимая длина имя";
    exit();
  } else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 25) {
    echo"Недопустимая длина пароля";
    exit();
  } else if ($name == "admin") {
    echo "Имя admin недоступно для регистрации";
    exit();
  }

  $pass = md5($pass."asjdasdjsadjashd");

  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "root");
  define("DB_DATABASE", "velo-db");

    $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
    $mysql->query("INSERT INTO `users` (`email`, `pass`, `name`) VALUES('$email','$pass','$name')");

    $mysql->close();
      header('Location: /VeloCITYREG/Scripts/login.html')
?>
