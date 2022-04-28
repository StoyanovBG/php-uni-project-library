<?php  
session_start(); 
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Читател панел</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link href="../../bootstrap-4.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
         
            <strong>Библиотека</strong>
          </a>      
                 <a href="../signin/logout.php" class="navbar-brand d-flex align-items-center">
         
            <strong>Изход</strong>
          </a>  
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Здравей, <?php   echo $_SESSION['red_name']; ?>!</h1>
          <p>Търсене/Заемане на книги по заглавие, автор, жанр</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Търсене/Заемане по:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./searchBy/title/title.php" class="btn btn-secondary my-2">заглавие</a>
                      <a href="./searchBy/author/author.php" class="btn btn-secondary my-2">автор</a>
                       <a href="./searchBy/genre/genre.php" class="btn btn-secondary my-2">жанр</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                                  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Виж всички книги</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./view/viewBooks.php" class="btn btn-secondary my-2">Виж</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Връщане на книги / Заети книги</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./returnBook/return.php" class="btn btn-secondary my-2">Върни</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           

          </div>
        </div>
      </div>

    </main>
  </body>
</html>