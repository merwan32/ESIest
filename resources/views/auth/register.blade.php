<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>register</title>
</head>
<body>
        <img src="{{asset('images/auth/sign up background.png')}}" alt="" class="bg">
        <img src="{{asset('images/auth/Become one of us!.png')}}" alt="" class="txt">
            <form action="{{ route('register') }}" method="post" class="form">
                @csrf
                <div class="np">
                    <div><input type="text" name="nom" placeholder="First name" value="{{ old('nom') }}" ></div>
                    <div><input type="text" name="prenom" placeholder="Last name" value="{{ old('prenom') }}"></div>
                </div>
                <div class="ag">
                    <select name="annee" class="annee">
                        <option value="1">1st year</option>
                        <option value="2">2nd year</option>
                    </select>
                    <select name="groupe" class="group">
                        <option value="1">groupe 1 </option>
                        <option value="2">groupe 2 </option>
                        <option value="3">groupe 3 </option>
                        <option value="4">groupe 4 </option>
                        <option value="5">groupe 5 </option>
                        <option value="6">groupe 6 </option>
                        <option value="7">groupe 7 </option>
                        <option value="8">groupe 8 </option>
                        <option value="9">groupe 9 </option>
                        <option value="10">groupe 10 </option>
                        <option value="11">groupe 11 </option>
                        <option value="12">groupe 12 </option>
                    </select>
                </div>
                
                <div class="inpt"><input type="email" name="email" placeholder="Username@esi-sba.dz" value="{{old('email')}}"></div>
                <div class="inpt"><input type="password" name="password" id="pass1" placeholder="Password"></div>
                <div class="inpt"><input type="password" name="repassword" placeholder="Confirm password"></div>
            </div>
               <div class="btn2"><button type="submit" class="btn" > <div class="s1">  Si</div><div class="s2">gn </div><div class="s3"> up</div></button></div>
                
                <p>Already have an account ?<a href="{{ route('login')}}">  log in</a></p>
            </form>
    @error('repassword')
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
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    <script src="{{ asset('js/auth.js') }}" defer></script>
</html>