<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body class="dark bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
                
    <a class="navbar-brand fs-1 text fw-bolder ms-5" href="{{ route('admin.dashboard')}}">MOVIE APP</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.logout')}} ">LOG-OUT</a>
        </li>
        
      </ul>
    </div>
  
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

      {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
      {{-- <a class="navbar-brand">   <td> {{$LoggedUserInfo['name']}}</td></a> --}}
    </form>
 
  
</nav>

          @yield('content')
   
</div>
</body>
</html>





