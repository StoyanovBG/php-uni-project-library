<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Начало</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link href="./bootstrap-4.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
         
            <strong>Библиотека</strong>
          </a>    
             <a href="./about.html" class="navbar-brand d-flex align-items-center">
         
            <strong>За нас</strong>
          </a>    
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Библиотека - Явор Стоянов СИТ 2к 4Б група 20621620</h1>
          <p class="lead text-muted">Мини проект WEB програмиране - библиотека</p>
          <p>
            <a href="./users/signin/readerUser.php" class="btn btn-primary my-2">Влез тук</a>
            <a href="./users/registration/userRegistration.php" class="btn btn-secondary my-2">Регистрация</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Вход за читатели - petar@abv.bg petrov</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./users/signin/readerUser.php" class="btn btn-secondary my-2">Влез</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Вход за служители + справки - ivan ivanov</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./users/signin/employeeUser.php" class="btn btn-secondary my-2">Влез</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">Вход за администратор - admin admin</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="./users/signin/admin.php" class="btn btn-secondary my-2">Влез</a>
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
<?php
include './db/db_create.php';
include './db/config.php';
?>