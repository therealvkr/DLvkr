<?php error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("?sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);

if(stripos($video_id,'://')==true) 
{
    header("Location: /info/?sdl=$lloc");
    exit();
  } 


   else {
    header("Location: /info/search.php?sdl=$lloc");
    exit();
  } 