<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
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

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
   <link rel="stylesheet" type="text/css" href="css/_______.css?crc=282469115" id="pagesheet"/>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.1.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "___________.css"], "outOfDate":[]};
</script>

  <title>Регистрация</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
  <link rel="stylesheet" type="text/css" href="css/___________.css?crc=3982893886" id="pagesheet"/>
   </head>
 <body>
  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="clip_frame colelem" id="u569"><!-- image -->
    <img class="block" id="u569_img" src="images/velocityline1-crop-u569.jpg?crc=78269612" alt="" data-heightwidthratio="0.1553398058252427" data-image-width="412" data-image-height="64"/>
   </div>
   <br>
   <div style="max-width: 250px; margin-right: 25px; "class="pointer_cursor rounded-corners clearfix grpelem" id="u605"><!-- group -->
    <a class="block" href="index.html"><!-- Block link tag --></a>
    <a class="nonblock nontext clearfix grpelem" id="u608-4" href="index.html"><!-- content --><p>ГЛАВНАЯ</p></a>
   </div>
   <div class="colelem" id="u583"><!-- custom html -->
     <!DOCTYPE html>
     <html lang="rus">
     	<head>
     		<meta charset="utf-8">
     		<meta name="viewport" content="width=device-width, initial scale = 1.0">
     		<meta http-equiv="X-UA-Compatible" content="ie=edge">
     		<title>Форма регистрации и входа в аккаунт</title>
     		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
     		<div class="container mt-4">
     			<?php

     					if($_COOKIE['user'] == ''):

     			 ?>
     		<h1 style="color:#7CFC00">Форма регистрации</h1>
     		<hr>
     		<h3><a href="/VeloCITYREG/Scripts/login.html">Авторизоваться</a><br></h3>
     		<hr>
     		<h3><a href="/VeloCITYREG/Scripts/signupnew.html"><h3>Регистрироваться</h3></a></h3>
     		<hr>
     	<?php else: ?>
     		<h1>Привет <?=$_COOKIE['user']?>. Чтобы выйти на главную нажмите <a href="/VeloCITYREG/"> здесь </a>.</h1>
        <h1><a href = "Scripts/logout.php">Выйти из аккаунта</a></h1>
     	<?php endif;?>
     	</body>
     </html>


   </div>
   <div class="verticalspacer" data-offset-top="423" data-content-above-spacer="423" data-content-below-spacer="77" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4177726516" type="text/javascript" async data-main="scripts/museconfig.js?crc=128606099" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
