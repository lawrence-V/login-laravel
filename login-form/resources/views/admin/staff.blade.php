<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staff </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>
 
    <div class="container pad_menu">
     
        <div>
            <h1 class="text-center p-4">Top Rated Movies</h1>
        </div>
   
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $item) 
            <div class="col">


              <div class="card h-100">
               <img src="{{'https://image.tmdb.org/t/p/w780/'.$item['backdrop_path']}}"class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item['title'] }}</h5>
                  <p class="card-text">{{ $item['overview'] }}</p>
                  <p class="card-text">Rating: {{ $item['vote_average'] }}</p>
                  <span>{{\Carbon\Carbon ::parse($item['release_date'])->format('M d, Y') }}</span>
                </div>
              </div>

            </div>
            @endforeach
       
    </div>
</body>
</html>