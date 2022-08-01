<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/auth/email.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <title>Password reset</title>
</head>
<body>
    <img src="{{asset('images/auth/sign up background.png')}}" alt="">
<form action="{{ route('password.email') }}" method="post" id="main">
    @csrf
        <h1 id="title">
            You forgot your password!
        </h1>
        <h3>
            No worries
        </h3>
        <input type="email" placeholder="Enter your email adress" id="email" name="email" value="{{old('email')}}">
        <button type="submit">
            Send password reset link
        </button>
</form>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('status'))
                                     <div class="alert-success" role="alert">
                                         {{ session('status') }}
                                     </div>
                                @endif      
</body>
</html>

