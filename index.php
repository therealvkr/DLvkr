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
  <title>DLvkr : PHP video & audio downloader from youtube and 1000+ sites ..</title>
    <link rel="icon" href="/logo.png" type="image/png">
    <meta name="author" content="theofficialvkr" />
    <meta name="keywords"  content="DLvkr" />
<meta name="description" content="DLvkr : PHP video & audio downloader from youtube and 1000+ sites ..">

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
   <p style="text-align:center;color:black;margin-top:-5px;"class="lead"> DLvkr</p>
      </a>
    </div>
    <form  id="headerform" method="GET" action="/info" style="border:none;border-shadow:none;" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" autofocus name="sdl"class="form-control" placeholder="Search or Video Link">
  </div>
  <button type="submit"class="btn btn-default">Submit</button>
</form> 
  </div>
</nav>

<div class="container">

  <div class="jumbotron">
    <h1 style=" text-align:center;"><i style="color:#d9534f;"class="fa  fa-2x fa-vimeo" aria-hidden="true"></i> Downloader</h1>
    <p align="center" class="lead">Get Any videos to your Devices !</p> <br>
        <form  role="search" method="GET" action="/info">
  <div class="form-group">
    <input type="text"  class="form-control" name="sdl"placeholder="Search or Paste a Video Link">
  </div>
  <button type="submit"class="btn btn-danger btn-block">Submit</button>
</form>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://dlvnow.herokuapp.com/logo.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>AnyThing</h2>
        <p class="title">AnyThing</p>
        <p>Put AnyThing Here.</p>
        <p>example@example.com</p>
        <p><a href="https://facebook.com/theofficialvkr"><button class="button">Facebook</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://dlvnow.herokuapp.com/logo.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>AnyThing</h2>
        <p class="title">AnyThing</p>
        <p>Put AnyThing Here.</p>
        <p>example@example.com</p>
        <p><a href="https://twitter.com/theofficialvkr"><button class="button">Twitter</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://dlvnow.herokuapp.com/logo.png" alt="John" style="width:100%">
      <div class="container">
        <h2>AnyThing</h2>
        <p class="title">AnyThing</p>
        <p>Put AnyThing Here.</p>
        <p>example@example.com</p>
        <p><a href="https://instagram.com/theofficialvkr"><button class="button">instagram</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
  </div>

<footer style=" height:30px; margin-top:10px;background-color:#F8F8F8;width: 100%;">
<p style="padding-top:5px;" align="center">Powred By - <a href="https://www.facebook.com/theofficialvkr"> Vijay Kumar </a> </p>
</footer>
</div>

</body>

</html>';}
else header("Location:/info?sdl=$llocf");
?>
