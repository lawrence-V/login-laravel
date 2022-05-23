<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style class="type/css">
        body{
            background: url('https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
        }

    
        </style>
</head>
<body>

    <div class="container ">
        <div class="row h-100 justify-content-center align-items-center align-content-center flex-column" style="margin-top: 45px">
            <div class="col-6">
                <h1 class="text-white font-weight-bold  text-center">Register</h1>
                <hr>
                <form action="{{ route('auth.save') }}" method="post">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::get('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="" class="text-white font-weight-bold h4">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your Name" value="{{ old('name')}}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group pt-2">
                        <label for="" class="text-white font-weight-bold h4">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email')}}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group pt-2">
                        <label for="" class="text-white font-weight-bold h4">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password" >
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class=" d-flex justify-content-center align-items-center mt-3 m-5">
                        <div class="m-4">
                             <button type="submit" class="btn btn-block btn-primary " style="margin-top: 45px" > <i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
                        </div>
                   
                    <div class="mt-5">
                          <a href="{{ route('auth.login')}}" class="text-decoration-none pt-4 h5 text-dark text-white font-weight-bold"><i class="fa fa-sign-in" aria-hidden="true"></i> I Already have an account , sign in</a>
                    </div>
                  

                     </div>

                             
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>