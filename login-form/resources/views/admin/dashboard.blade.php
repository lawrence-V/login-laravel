<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>
<body class="dark bg-dark">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
                
              <a class="navbar-brand fs-1 text fw-bolder ms-5">MOVIE APP</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard')}} ">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.logout')}} ">LOG-OUT</a>
                  </li>

                
                </ul>
              </div>

            <div>
              <livewire:search-form>
            </div>
             
           
            
          </nav>

         <div class="container pad_menu " >
     
        <div>
            <h1 class="text-center fs-1 text fw-bolder p-4 text-white">Top Rated Movies</h1>
        </div>
 
        {{-- card components for top rated --}}
        <div class="row row-cols-3 row-cols-md-4 g-5 ">
          @foreach($data as $movie) 
          <div class="col">
    
              <x-movie-card :movie="$movie" :genres="$genres" />
    
          </div>
          @endforeach
          </div>
          <hr>

        {{-- Card component for popular movie --}}
        <div>
          <h1 class="text-center p-4 text-white">Popular Movies</h1>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-5">
          @foreach($popularMovies as $movie) 
          <div class="col">

              <x-movie-card :movie="$movie" :genres="$genres" />

          </div>
          @endforeach
          </div>

</div>
@livewireScripts
</body>
</html>





