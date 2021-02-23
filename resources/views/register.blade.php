<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        
            @csrf
            
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control {{ $errors->has('firstname') ? 'error' : '' }}" id="firstname" name="firstname">
                @if ($errors->has('firstname'))
                    <div class="error text-danger">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control {{ $errors->has('lastname') ? 'error' : '' }}" id="lastname" name="lastname">
                @if ($errors->has('lastname'))
                    <div class="error text-danger">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" id="email" name="email">
                @if ($errors->has('email'))
                    <div class="error text-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'error' : '' }}" id="password" name="password">
                @if ($errors->has('password'))
                    <div class="error text-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="confirm-password" class="text-white">Confirm password:</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
            </div>
            <a href="{{ route('login.form') }}" class="text-danger">You have an account, click me to login !</a>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>