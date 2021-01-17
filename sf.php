<?php error_reporting(0); ?>
<?php
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("?sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urldecode($video_id);  
 if(stripos($lloc,'://')===false)  {
      header("Location: /info/search.php/?sdl=$lloc");
          exit();
           
            }
               else header("Location: /info/?sdl=$lloc");
                   exit();
                   ?>