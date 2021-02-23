<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ URL::to('/') }}/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body style="background: url('img/student-background.jpg');background-size:100% 640px;background-repeat:no-repeat;">
    <div class="container wrapper">
        @if(session()->has('invalid'))
            <div class="alert alert-danger mt-3 alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session()->get('invalid')}}
            </div>
        @endif
        <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        
            @csrf
    
            <div class="form-group">
                <label for="email" class="text-white">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd" class="text-white">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
            </div>
            <a href="{{ route('register.form') }}" class="text-dark">You don't have an account, click me!</a>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>