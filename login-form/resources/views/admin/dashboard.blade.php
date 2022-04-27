<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body class="dark bg-dark">
       <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                
              <a class="navbar-brand">Navbar</a>
            
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                {{-- <a class="navbar-brand">   <td> {{$LoggedUserInfo['name']}}</td></a> --}}
              </form>
            </div>
          </nav>
    {{-- <div class="container">
       
        <div class="row h-100 justify-content-center align-items-center align-content-center flex-column">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="pt-5">Dashboard</h4><hr>
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{$LoggedUserInfo['name']}}</td>
                            <td>{{$LoggedUserInfo['email']}}</td>
                            <td><a href=" {{ route('auth.logout')}}">Logout</a></td>
                        </tr>
                    </tbody>
                </table>

                <ul>
                    <li><a href="/admin/dashboard">dashboard</a></li>
                    <li><a href="/admin/profile">profile</a></li>
                    <li><a href="/admin/settings">settings</a></li>
                    <li><a href="/admin/staff">staff</a></li>
                </ul>
            </div>
        </div>
    </div> --}}

     
    <div class="container pad_menu " >
     
        <div>
            <h1 class="text-center p-4 text-white">Top Rated Movies</h1>
        </div>
 
        {{-- card components for top rated --}}
        <div class="row row-cols-3 row-cols-md-4 g-5">
          @foreach($data as $movie) 
          <div class="col">
    
              <x-movie-card :movie="$movie" :genres="$genres" />
    
          </div>
          @endforeach
          </div>
  


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
</body>
</html>





