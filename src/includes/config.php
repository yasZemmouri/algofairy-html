<?php
//This file is for dependency links and global variables.
//Language
$language = 'en';
//Website Name
$siteName="AlgoCourses";
//

$distPath = "../../dist/";
$imgPath_src = "../assets/img/selected/";
$imgPath_dist_in_dist = 'assets/img/';
$imgPath_dist_from_src=$distPath . $imgPath_dist_in_dist;
$faviconIco = "favicon-32-2.ico";
$appleTouchImg = "favicon-160.png";
//Favicons & Icons
$faviconUrl=$imgPath_src . $faviconIco;
$appleTouchIconUrl = $imgPath_src . $appleTouchImg;
//What do I need this for?
$bootstrapIconsUrl = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css";
//CSS 
$bootstrapCSS= "../assets/vendor/bootstrap/css/bootstrap.min.css";
$mainCSS_in_dist= "assets/css/main.css";
$mainCSS_from_src = $distPath . $mainCSS_in_dist;
//JS
$bootstrapJS = "../assets/vendor/bootstrap/js/bootstrap.min.js";
$mainJS= "../assets/js/main.js"; 
// Do I really need it for Bootstrap?
// $jqueryUrl = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js";
    
?>