<?php
  $main = trim($_POST['main']);
  $name = $_COOKIE['user'];
  $text = trim($_POST['text']);

  if(mb_strlen($main) < 5 || mb_strlen($main) > 90) {
    echo"Недопустимая длина заглоловка";
    exit();
  }  else if (mb_strlen($text) < 20 || mb_strlen($text) > 100000) {
    echo"Недопустимая длина новости";
    exit();
  }


  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "root");
  define("DB_DATABASE", "velo-db");

    $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
    $mysql->query("INSERT INTO `news` (`name`, `main`, `text` , `data`) VALUES('$name','$main','$text',NOW())");

    $mysql->close();
      header('Location: /VeloCITYREG/новости.php')
?>
