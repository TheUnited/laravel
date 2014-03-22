<html lang="fr"><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
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
          <li class="active"><a href="#">Active</a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdown header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
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

              <a href="#">Action</a><br>
              <a href="#">Another action</a><br>
              <a href="#">Something else here</a><br>
              <a href="#">Separated link</a><br>

            </div>
          </div>
        </div>
      </div>
    </div>
   
  
   
  </body>
</html>