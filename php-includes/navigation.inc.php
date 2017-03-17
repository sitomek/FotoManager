<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Grupowanie "marki" i przycisku rozwijania mobilnego menu -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Rozwiń nawigację</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="#"><i class="fa fa-camera-retro fa-fw"></i>Foto Manager</a>
        </div>
    
        <!-- Grupowanie elementów menu w celu lepszego wyświetlania na urządzeniach moblinych -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <div class="col-md-6">  
                    <input type="text" class="form-control" placeholder="Szukaj">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Szukaj</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="foto_all.php"><i class="fa fa-picture-o fa-fw"></i>Przeglądanie zdjęć</a></li>
            <li><a href="#"><i class="fa fa-film fa-fw"></i>Przeglądanie filmów</a></li>
            <li><a href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Edycja zdjęć</a></li>
            <li><a href="#"><i class="fa fa-cog fa-fw"></i>Zarządzanie</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ulubione<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="youtube.php"><i class="fa fa-youtube fa-fw"></i>You Tube</a></li>
                <li><a href="ajax.php">AJAX</a></li>
                <li><a href="#">Edycja zdjęć</a></li>
                <li class="divider"></li>
                <li><a href="#">Zarządzanie</a></li>
                <li class="divider"></li>
                <li><a href="#">Galeria</a></li>
                <li class="divider"></li>
                <li><a id="tło" href="#">Zmiana tła</a></li>
              </ul>
            </li>
            <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
</nav>