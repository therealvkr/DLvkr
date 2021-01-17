<?php 
error_reporting(0); 
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("?sdl=", $urlx);
$video_id = $video_id[1];
$llock = urldecode($video_id);
$lloc= strtok(urldecode($video_id), '?');

$llocf = urlencode($video_id);
preg_match("/([\?&\/]vi?|embed|\.be)[\/=]([\w-]+)/",$lloc,$matches);
?> 
 <html lang="en">
<head>
  <title> DLvkr : Download <?php echo $lloc; ?> in All available Quality and Formats ..</title>
    <link rel="icon" href="/logo.png" type="image/png">
    <meta name="author" content="itsmethevkr" />
    <meta name="keywords"  content="DLvkr : Download <?php echo $lloc; ?> in All available Quality and Formats .." />
<meta name="description" content="DLvkr : Download <?php echo $lloc; ?> in All available Quality and Formats ..">

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
      <a class="navbar-brand" href="/">
   <p style="text-align:center;color:black;margin-top:-5px;"class="lead"> DLvkr</p>
      </a>
    </div>
	<form  id="headerform" method="GET" action="/sf.php" style="border:none;border-shadow:none;" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input required type="text" autofocus name="sdl"class="form-control" placeholder="Search or Video Link">
  </div>
  <button type="submit"class="btn btn-default">Submit</button>
</form> 
  </div>
</nav>

<div class="container">

  <div class="jumbotron">
   
   
   
   
   
   
<script src="http://dlvnow.herokuapp.com/api/js/sv.js"></script> 
<style>
    #popup { display: none; position: fixed; top: 5%; left: 5%; width: 90%; height: 80%; background-color: white; z-index: 10; }
#popup iframe { width: 100%; height: 100%; border: 0; }
#popupdarkbg { position: fixed; z-index: 5; left: 0; top: 0; width: 100%; height: 100%; overflow: hidden; background-color: rgba(0,0,0,.75); display: none; }
.buttonz {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  width:100%;
  padding: 55px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
}.buttonz2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>


<center>
    	<form  id="headerform" method="GET" action="/sf.php" style="border:none;border-shadow:none; width:100%;" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input required type="text" autofocus name="sdl"class="form-control" placeholder="Search or Video Link">
  </div>
 
  <br>
  <input type="submit" class="btn btn-default" value="Submit" >
</form>
<br><h2> Download <?php echo $lloc; ?> ..</h2></center>


<div id="main">


<a href="#" id="link"><button class="buttonz buttonz2"> Click Here to GET info </button></a><br>
</div>




<br><br>

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

        <p><a href="https://instagram.com/theofficialvkr"><button class="button">instagram</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>











<div id="popup"><iframe id="popupiframe"></iframe></div>
<br><br><br><br>
<div id="popupdarkbg"></div><script src="https://dlvnow.herokuapp.com/api/js/sv.js"></script><script src="//dlvnow.herokuapp.com/api/js/sv.js"></script>

   
   
   
   
   
   
   
  </div>

<footer>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
   z-index:9999999999999999999999999;
}
</style>
<div class="footer">
  <p>Powered By <a href="https://instagram.com/theofficialvkr">Vijay Kumar</a> &copy; All Right Reserved <?php echo date("Y");?> </p>
</div>
</footer>
</div>

</body>

</html>