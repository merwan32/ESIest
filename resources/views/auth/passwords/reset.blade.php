<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/auth/reset.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Password reset</title>
</head>
<body>
    <img src="{{asset('images/auth/Group 48.png')}}" alt="">
    <form id="main" action="{{ route('password.update') }}" method="post">
    @csrf
            <h2 id="title">Change your password</h2>
            <input type="hidden" name="token" value="{{ $token }}">
                    <input type="email" id="email" class="champ" name="email" placeholder="Enter your email adress" value="{{old('email')}}">
                    <input type="password" class="champ" name="password" placeholder="Enter your new password">
                    <input type="password" class="champ" name="password_confirmation" placeholder="Confirm your new password">
                    <input id="submit" type="submit" value="Reset Password">
</form>
                @if (session('status'))
                        <div class="alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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


