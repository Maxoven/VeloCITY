<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
  $messege = trim($_POST['messedge']);
  $name = $_COOKIE['user'];
  $data = '';

  if(mb_strlen($messege) < 5 || mb_strlen($login) > 4000) {
    echo"Недопустимая длина сообщения";
    exit();
  }



  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "root");
  define("DB_DATABASE", "forum");

    $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
    $mysql->query("INSERT INTO `forum1` (`name`, `mess`, `data`) VALUES('$name','$messege','$data')");

    $mysql->close();


    $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
  $result_set = $mysql->query('SELECT * FROM forum1');
  while ($row = $result_set->fetch_assoc()) {
    foreach($row as $v=>$k) {
        echo $k.': '.$v.'<br>';
    }
  }
  $result_set->close();
  $mysql->close();
?>
