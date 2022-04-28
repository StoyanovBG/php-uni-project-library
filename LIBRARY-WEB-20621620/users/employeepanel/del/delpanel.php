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

    <title>Изтриване</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link href="../../../bootstrap-4.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
         
            <strong>Библиотека</strong>
          </a>      
             <a href="../employeepanel.php" class="navbar-brand d-flex align-items-center">
         
            <strong>Назад</strong>
          </a>      
                 <a href="../../signin/logout.php" class="navbar-brand d-flex align-items-center">
         
            <strong>Изход</strong>
          </a>  
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Здравей, <?php   echo $_SESSION['empl_name']; ?>!</h1>
           <p>Изтриване на книги, позиции, жанрове</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Книга</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./delBook/delBoo.php" class="btn btn-secondary my-2">Изтрий</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Позиция</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./delPosition/delPos.php" class="btn btn-secondary my-2">Изтрий</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Жанр</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./delGenre/delGen.php" class="btn btn-secondary my-2">Изтрий</a>
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