<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Movie app</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik" rel="stylesheet">
    



    <style class="type/css">
    body{
        font-family: 'Open Sans', sans-serif;
    }
 section{
     padding-top:4rem;
 }
    .jumbotron{
        background-image:url("landingPic.png");
        min-height:100vh;
        background-size:cover;
        background-position: center;
        background-attachment: fixed;
    }
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Rubik', sans-serif;
      }

    </style>
</head>
<body data-spy="scroll" data-target="#navbarScroll">

    <nav class="navbar navbar-dark bg-primary navbar-expand-md fixed-top">
        <a href="#" class="navbar-brand"><i class="fa fa-video-camera" aria-hidden="true"></i> Movie App</a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav" id="navbarScroll">
                <li class="nav-item"><a href="#section-jumbotron" class="nav-link active">To the top</a></li>
                <li class="nav-item"><a href="#section-Description" class="nav-link">Description</a></li>
                <li class="nav-item"><a href="#section-Trailer" class="nav-link">Trailer</a></li>
                <li class="nav-item"><a href="#section-Features" class="nav-link">Features</a></li>
            </ul>
        </div>
    </nav>
    <section id="section-jumbotron" class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-uppercase text-primary font-weight-normal">Movie App</h1>
            <h2 class="display-4 text-white">Browse Movie</h2>
            <p class="text-white lead font-weight-normal">Explore movies and watch later.</p>
            <p class="text-white"> <strong>SIGN-UP| LOG-IN now on:</strong> </p>
            <a href="{{ route('auth.login')}}" type="button" class="btn btn-lg btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</a>
            <a href="{{ route('auth.register')}}" type="button" class="btn btn-lg btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> SIGNUP</a>
         
            

        </div>

    </section>
  <div class="container">
    <section id="section-Description">
        <h1 class="text-center display-4">What is Movie App?</h1>
     
        <p class="text-center">Movie app has been designed to easily browse movies  and  to make sure you get the best browsing experience of movies 
            continuously improving the app with new features – this is just the beginning.</p>


    </section>


    </section>


    <section id="section-Features">
        <h2 class="display-4 mb-5 text-center"> Features</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                <div class="h1"><i class="fa fa-search mb-4 text-info" aria-hidden="true"></i></div>
                <h3 class="h4 mb-4 text-center">Search Movie</h3>
                <p>Easily to search movie title.</p>
                <a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
              </div>
            <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                <div class="h1"><i class="fa fa-info mb-4 text-info" aria-hidden="true"></i></div>
                <h3 class="h4 mb-4 text-center">Movie Details</h3>
                <p>Show movie information.</p>
                <a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                <div class="h1"><i class="fa fa-users mb-4 text-info" aria-hidden="true"></i></div>
                <h3 class="h4 mb-4 text-center">Actors</h3>
                <p>Show Movie Actors</p>
                <a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
              </div>
              <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                <div class="h1"><i class="fa fa-picture-o mb-4 text-info" aria-hidden="true"></i></div>
                <h3 class="h4 mb-4 text-center">Pictures</h3>
                <p>Show Mvie Pictures</p>
                <a href="#" class="btn btn-sm btn-info mt-auto">Read more...</a>
              </div>
        </div>

    </section>



    


  </div>
    

  <footer class="bg-light">
    <div class="container py-3 py-sm-5">

      <div class="row">
        <div class="col-12 col-sm-6 col-lg-9">
          <ul class="list-inline">
            <li class="list-inline-item">&copy; 2022 LawrenceDev, Inc.</li>
            <li class="list-inline-item">All rights reserved.</li>
            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#modal">Terms of use and privacy policy</a>.</li>
          </ul>
        </div>

      </div>
    </div>
  </footer>
 

  

    </body>
</html>