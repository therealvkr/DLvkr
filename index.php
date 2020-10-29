<?php 
 error_reporting(0);
$urlx = $_SERVER[REQUEST_URI];
$video_id = explode("?sdl=", $urlx);
$video_id = $video_id[1];
$lloc = urlencode($video_id);
$llocf = urlencode($video_id);
  if (empty($llocf)){
  echo '<html lang="en">
<head>
  <title>DLvkr</title>
    <link rel="icon" href="suramshivareddy.com/photo.png" type="image/gif">
    <meta name="author" content="Suram ShivaReddy" />
    <meta name="keywords"  content="DLvkr" />
<meta name="description" content="Im Suram ShivaReddy a Webdeveloper from India (Hyderabad). If you are looking for a
good looking Responsive website, I can help you with it">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/951d746165.js"></script>
  <style>
  @media only screen and (max-width: 770px) {
  #headerform input{
  margin-top:-20px;
  }
  #headerform button{
  display:none;
  }
  }
#related:hover{
cursor:pointer;
}
#searchdiv:hover{
cursor:pointer;
}
  </style>
</head>
  
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
   <p style="text-align:center;color:black;margin-top:-5px;"class="lead"> Youtube Downloader</p>
      </a>
    </div>
    <form  id="headerform" method="GET" action="/info" style="border:none;border-shadow:none;" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" autofocus name="sdl"class="form-control" placeholder="Search or Youtube Link">
  </div>
  <button type="submit"class="btn btn-default">Submit</button>
</form> 
  </div>
</nav>

<div class="container">

  <div class="jumbotron">
    <h1 style=" text-align:center;"><i style="color:#d9534f;"class="fa  fa-2x fa-youtube" aria-hidden="true"></i> Downloader</h1>
    <p align="center" class="lead">Get Youtube videos to your Devices !</p> <br>
        <form  role="search" method="GET" action="/info">
  <div class="form-group">
    <input type="text"  class="form-control" name="sdl"placeholder="Search or Paste a Youtube Link">
  </div>
  <button type="submit"class="btn btn-danger btn-block">Submit</button>
</form>
  </div>

<footer style=" height:30px; margin-top:10px;background-color:#F8F8F8;width: 100%;">
<p style="padding-top:5px;" align="center">Production - <a href="https://www.facebook.com/shivareddy0">Shiva Rdy</a> </p>
</footer>
</div>

</body>

</html>';}
else header("Location:/info?sdl=$llocf");
?>
