<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in </title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    
         <div  class=" container ">
        <div class="row h-100 justify-content-center align-items-center align-content-center flex-column" style="margin-top: 45px">
            <div class="col-6 justify-content-center ">
                <h1 class="text-center font-weight-bolder text-white">Login</h1>
                <hr>
                <form action="{{ route('auth.checks') }}" method="post">
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
                        <label for="" class="text-white font-weight-bold h4">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                        <span class="text-danger" >@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-white font-weight-bold h4">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
     <div class=" d-flex justify-content-center align-items-center mt-5 m-5">
         <div class="m-4">
             <button type="submit" class="btn  btn-primary btn-lg "  style="margin-rigth: 45px"><i class="fa fa-sign-in" aria-hidden="true"></i>  SIGN IN</button>
           
         </div>
         <div>
                <a href="{{ route('auth.register')}}" type="button" class="btn  btn-primary btn-lg "><i class="fa fa-user-plus" aria-hidden="true"></i> SIGNUP</a>  
         </div>
              
     </div>

                </form>
            </div>
        </div>
    </div>  
</body>
</html>