<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
    <title>Login</title>
</head>
<body>
    <img src="{{asset('images/auth/login background.jpg')}}" class="background">
    <img src="{{asset('images/auth/Welcome.png')}}" alt="" class="welcome">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="first">
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
            <img src="{{asset('images/auth/email icon.png')}}" alt="">
        </div>
        <div class="second">
            <input type="password" name="password" placeholder="Password">
            <img src="{{asset('images/auth/password icons.png')}}" alt="">
        </div>
        <div class="border">
            <input type="submit" value="Login" class="submit">
        </div>
        <a href="{{ route('password.request') }}">Password reset</a>
        <p>You do not have an account ?</p>
        <a href="{{ route('register')}}">Sign up</a>
        
    </form>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</body>
</html>