<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2018.1.1.386"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript">
     // Update the 'nojs'/'js' class on the html node
  document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

  // Check that all required assets are uploaded and up-to-date
  if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "_______.css"], "outOfDate":[]};
  </script>

    <title>Форум</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
    <link rel="stylesheet" type="text/css" href="css/_______.css?crc=282469115" id="pagesheet"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форум</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/VeloCITYREG/css/style.css">
    <style>
    hr{
    border: none;
    background-color: red;
    color: black;
    height: 3px;
    }
    </style>
  </head>

  <style>
  body{
      margin: 30px;
    }
  </style>
  <img style="margin-left: 400px" src="assets/imgonline-com-ua-Transparent-backgr-WvNDGtZNWICi66.png" alt="no img:(">
  <div style="max-width: 250px;"class="pointer_cursor rounded-corners clearfix grpelem" id="u605"><!-- group -->
   <a class="block" href="index.html"><!-- Block link tag --></a>
   <a class="nonblock nontext clearfix grpelem" id="u608-4" href="index.html"><!-- content --><p>ГЛАВНАЯ</p></a>
  </div>
  <div class="container mt-4">
    <h1 style="color:#7CFC00">Форум для пользователей сайта</h1>
    <form action="forum.php" method="post">
      <input type="text" class="form-control" name="messedge"
      id="messedge" placeholder="Введите ваше сообщение"><br>
      <button class="btn btn-success"
      type="submit">Отправить сообщение</button>
    </form>
  </div>

  <body>
    <?php

        if($_COOKIE['user'] != ''):

     ?>

     <?php
     $id = $_COOKIE['id'];
     $mysql = new mysqli("localhost" , "root", "root", "velo-db");

     $result = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
     $user = $result->fetch_assoc();
     $name = $user['name'];
       $messege = trim($_POST['messedge']);
       $data = '';

       if(mb_strlen($messege) < 1 || mb_strlen($login) > 4000) {
         //echo"Недопустимая длина сообщения";
         exit();
       }



       define("DB_SERVER", "localhost");
       define("DB_USER", "root");
       define("DB_PASSWORD", "root");
       define("DB_DATABASE", "velo-db");

         $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
         $mysql->query("INSERT INTO `forum1` (`name`, `mess`, `data`) VALUES('$name','$messege', NOW())");//'$data')"); //'$data' —> '$datatime'

         $mysql->close();


         $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
       $result_set = $mysql->query('SELECT * FROM forum1 order by data desc');
       while ($row = $result_set->fetch_assoc()) {
         foreach($row as $v=>$k) {
             if ($v == "name"){
                 echo "Пользователь ".$k." "."сообщает : ";
             }else if ($v == "mess"){
                 echo $k."<br>";
             }else if ($v == "data"){
               echo "(".$k.")"."<br>";
             }
         }
       }
       $result_set->close();
       $mysql->close();
     ?>



  <?php else: ?>
    <p style="margin-left: 480px"><big>Пожалуйста <a href="регистрация.php">авторизуйтесь</a> на сайте для использования форума</big></p>
  <?php endif;?>
  </body>
</html>
