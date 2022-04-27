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

          @yield('content')
   
</div>
</body>
</html>





