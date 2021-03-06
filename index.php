<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diana Ruican</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  define('LOGO_NAME','DR');
  ?>
  <div class="page-container">
    <div class="content-wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><?php echo LOGO_NAME; ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="movies.php">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://static.cinemagia.ro/img/db/movie/00/02/36/shrek-488112l.jpg?ts=1253268939" class="d-block w-100" class="carousel" alt="Shrek poster">
        </div>
        <div class="carousel-item">
          <img src="https://static.cinemagia.ro/img/resize/db/movie/01/91/07/walle-254963l-1600x1200-n-a310794c.jpg" class="d-block w-100" class="carousel" alt="Wall-E poster">
        </div>
        <div class="carousel-item">
          <img src="https://static.cinemagia.ro/img/resize/db/movie/00/39/87/finding-nemo-271661l-1600x1200-n-72e6b914.jpg" class="d-block w-100" class="carousel" alt="Finding Nemo poster">
        </div>
      </div>
    </div>
      <div class="container" class="welcome">
        <p>Find the best animations right here</p>
        <a href="movies.php"><button type="button" class="btn btn-primary">Movies</button></a>
      </div>
    </div>
    <div class="footer"><?php echo LOGO_NAME.'. '; ?>Copyright, toate drepturile rezervate.</div>
  </div> 
</body>
</html>