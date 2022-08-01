<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>Contact us</title>
</head>
<body>
  <img src="{{asset('images/contact/bg.png')}}" alt="" class="bg">
                                      @if(session()->has('message'))
                                                <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif
    <div class="box">
          <form action="{{ route('send.email') }}" method="post">
              @csrf
          <input type="email" name="email" required placeholder="Email">
          <input type="text"  name="subject" required placeholder="Subject">
          <textarea required  name="content" placeholder="Write your mail context here"></textarea>
          <button type="submit">send</button>
        </form>
      </div>
</body>
</html>