<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/auth/verify.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>verify email</title>
</head>
<body>
    <img src="{{asset('images/auth/sign up background.png')}}" alt="">
    @if(Session()->has('message'))
    <div class="alert alert-success">
        {{ Session()->get('message') }}
    </div>
@endif
    <form action="{{ route('verification.resend') }}" method="post" id="main">
                @csrf
       <h1 id="title"> Verify your email!</h1>
       <h3 id="text0">
        Before proceding, please check your email for a verification link.
       </h3>
       <p>
           If you did not receive an email
       </p>
       <button type="submit">
           Send request
       </button>
       </form>
</body>
</html>

