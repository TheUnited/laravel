<html lang="fr"><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
  
  <body>
   <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
   
       <a class="navbar-brand" href="#">MoufletteFamily</a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#"><i class="fa fa-file-text-o"></i> News</a></li>
          <li><a href="#"><i class="fa fa-film"></i> Vidéos</a></li>
          <li><a href="#"><i class="fa fa-users"></i> Player</a></li>
          <li><a href="#"><i class="fa fa-list-alt"></i> Forum</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon-glass"></i>Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Vidéos</a></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  
  
  <!-- container-->
   
  
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default">          
     
            @yield('content')
          
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">Menu</div>
            <div class="panel-body">

              <a href="#"><i class="fa fa-home"></i> Home</a><br>
              <a href="#"><i class="fa fa-file-text-o"></i> News</a><br>
              <a href="#"><i class="fa fa-film"></i> Vidéos</a><br>
              <a href="#"><i class="fa fa-users"></i> Player</a><br>
              <a href="#"><i class="fa fa-list-alt"></i> Forum</a><br>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="navbar-header">
 
       <a class="navbar-brand" href="#">© MoufletteFamily.com | All right reserved.</a>
      </div>
   
  </body>

</html>