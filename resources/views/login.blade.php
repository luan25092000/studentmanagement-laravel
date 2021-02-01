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
        <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        
            @csrf
    
            <div class="form-group">
                <label for="username" class="text-white">Username:</label>
                <input type="username" class="form-control" placeholder="Enter username" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd" class="text-white">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <small style="color: white; font-size: 1.2rem;">Username: admin - Password: admin</small>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>