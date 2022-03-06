<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>staff </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
    <div class="container ">
        <div class="row h-100 justify-content-center align-items-center align-content-center flex-column">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="pt-5">Dashboard</h4><hr>

                <div class="row">
          
                    @foreach($datas as $item)
                   
                    <div class="col-6 card  text-white bg-primary mb-3 px-2">
                        
                        <li>{{$item['author']}}</li>
                    </div>
                    <div class=" col-6 card text-dark bg-info mb-3 px-2">
                        
                        <li>{{$item['title']}}</li>
                    </div>
                    @endforeach
                  </div>
            </div>
        </div>
    </div>
</body>
</html>