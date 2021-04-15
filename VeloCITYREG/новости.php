<!DOCTYPE html>
<html lang=rus dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2018.1.1.386"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript">
     // Update the 'nojs'/'js' class on the html node
    document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

    // Check that all required assets are uploaded and up-to-date
    if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "_____1.css"], "outOfDate":[]};
    </script>

    <title>Новости</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
    <link rel="stylesheet" type="text/css" href="css/_____1.css?crc=3866658396" id="pagesheet"/>
    <meta charset="utf-8">
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
  <body>
    <style>
    body{
        margin: 30px;
      }
    </style>
  </head>
  <body style="background : white">
    <img style="margin-left: 400px" src="assets/imgonline-com-ua-Transparent-backgr-WvNDGtZNWICi66.png" alt="no img:(">
    <div style="margin-left: 150px; max-width: 250px;" class="pointer_cursor rounded-corners clearfix grpelem" id="u670"><!-- group -->
     <a class="block" href="index.html"><!-- Block link tag --></a>
     <a class="nonblock nontext clearfix grpelem" id="u671-4" href="index.html"><!-- content --><p>ГЛАВНАЯ</p></a>
    </div>
    <?php

        if($_COOKIE['user'] == "admin"):

     ?>

     <form action="новости.php" method="post">
       <input type="text" class="form-control" name="main"
       id="main" placeholder="Введите заглавие"><br>
       <textarea style="border: 1px solid #999" rows="7" cols="62" name="text" id="text" type="text">Введите тест новости</textarea><br>
       <button class="btn btn-success"
       type="submit">Добавить новость</button>
     </form>




     <?php
     $main = trim($_POST['main']);
     $name = $_COOKIE['user'];
     $text = trim($_POST['text']);

     if(mb_strlen($main) < 5 || mb_strlen($main) > 90) {
       echo"";
       exit();
     }  else if (mb_strlen($text) < 20 || mb_strlen($text) > 100000) {
       echo"";
       exit();
     }


     define("DB_SERVER", "localhost");
     define("DB_USER", "root");
     define("DB_PASSWORD", "root");
     define("DB_DATABASE", "velo-db");

       $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
       $mysql->query("INSERT INTO `news` (`name`, `main`, `text` , `data`) VALUES('$name','$main','$text',NOW())");

       $mysql->close();
       $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
       $result_set = $mysql->query('SELECT * FROM news order by data desc');
       while ($row = $result_set->fetch_assoc()) {
         foreach($row as $v=>$k) {
             if ($v == "main"){
               echo "<h1><big>".$k."</big></h1>"."<br>";
             } else if ($v == "text"){
                 echo "<p>".$k."</p>"."<br>";
             }else if ($v == "data"){
                 echo $k."<hr>";
             }
         }
       }
      ?>

   <?php else: ?>
      <p style="color:#32CD32"><big><big>Привет, <?=$_COOKIE['user']?>. Специально для тебя все новости нашего сайта<br> находятся на данной страничке.</big></big></p>
      <?php
      define("DB_SERVER", "localhost");
      define("DB_USER", "root");
      define("DB_PASSWORD", "root");
      define("DB_DATABASE", "velo-db");



      $mysql = new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
      $result_set = $mysql->query('SELECT * FROM news order by data desc');
      while ($row = $result_set->fetch_assoc()) {
        foreach($row as $v=>$k) {
            if ($v == "main"){
              echo "<h1><big>".$k."</big></h1>"."<br>";
            } else if ($v == "text"){
                echo "<p>".$k."</p>"."<br>";
            }else if ($v == "data"){
                echo $k."<hr>";
            }
        }
      }
      $result_set->close();
      $mysql->close();
    ?>
   <?php endif;?>


  </body>
</html>
