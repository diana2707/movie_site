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
  <div class="page-container">
    <div class="content-wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Diana</a>
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
    <div class="container">
      <h1>Movies</h1>
      <div class="row align-items-start">
      
      <?php
   
   $movies = array(
      array (
        'title'=>'Shrek',
        'poster'=>'https://static.cinemagia.ro/img/db/movie/00/02/36/shrek-488112l.jpg?ts=1253268939',
        'desc'=>'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back',
        'permalink'=>'movie_1.php',
      ),
      array (
          'title'=>'Wall-E',
          'poster'=>'https://static.cinemagia.ro/img/resize/db/movie/01/91/07/walle-254963l-1600x1200-n-a310794c.jpg',
          'desc'=>'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind',
          'permalink'=>'movie_2.php',
      ),
      array (
            'title'=>'Finding Nemo',
            'poster'=>'https://static.cinemagia.ro/img/resize/db/movie/00/39/87/finding-nemo-271661l-1600x1200-n-72e6b914.jpg',
            'desc'=>'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home',
            'permalink'=>'movie_3.php',
      )
      );

      $i=0;

   foreach($movies as $movie){ ?>
         <div class="col-4" id="<?php echo ++$i;?>">
            <div class="card">
              <img 
                src="<?php echo $movie['poster'];?>" 
                class="card-img-top" 
                alt="<?php $movie['title'];?>"/>
             
              <div class="card-body">
                <h5 class="card-title"><?php echo $movie['title'];?></h5>
                <p class="card-text"><?php echo $movie['desc'].'...' ;?></p>
                <a href="<?php echo $movie['permalink'];?>" class="btn btn-primary">Read more</a>
              </div>
            </div>
         </div>
  <?php  

}; ?>

        </div>
    </div>
    </div>
      <div class="footer">Copyright, toate drepturile rezervate.</div>
    </div>
</body>
</html>