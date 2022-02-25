<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center align-content-center flex-column">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="pt-5">Profile</h4><hr>
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
    </div>
</body>
</html>