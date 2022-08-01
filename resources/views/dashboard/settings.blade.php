<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rambla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard/setting.css')}}">
    <title>settings</title>
</head>
<body>
<div id="dashboard">
      <a href="{{route('home')}}"><img id="logo" src="{{asset('images/logo.png')}}"></a>
            
            <div class="liens">
                <a href="{{route('profile')}}">
                    <img  src="{{asset('images/dashboard/image 57.png')}}">
                   <p >
                       Dashboard
                   </p>
                </a>
                <a  href="{{route('notes')}}">
                    <img src="{{asset('images/dashboard/image 51.png')}}">
                    <p>
                        My marks
                    </p>
                </a>
                <a href="{{route('emploi')}}">
                    <img src = "{{asset('images/dashboard/image 45.png')}}">
                    <p>
                        Schedule
                    </p>
                </a>
                <a  href="{{route('module')}}">
                    <img src = "{{asset('images/dashboard/image 48.png')}}">
                    <p>
                        Modules
                    </p>
                </a>
                <a  href="{{route('ranking')}}">
                    <img src = "{{asset('images/dashboard/image 49.png')}}">
                    <p>
                        Ranking
                    </p>
                </a>
                <a  href="{{route('settings')}}" >
                    <img src="{{asset('images/dashboard/image 50a.png')}}">
                    <p class="active">
                        Settings
                    </p>
                </a>
                @admin 
                <a  href="{{route('add')}}">
                    <img src="{{asset('images/dashboard/admin.png')}}">
                    <p class="admin">
                        Add
                    </p>
                </a>
                @endadmin
              </div>
               <div id="email">
                <img src="{{asset('images/dashboard/background.png')}}" alt="" id="sendEmail">
               <a href="{{route('contact')}}" id="e">
                    <img src ="{{asset('images/dashboard/image 43.png')}}">
                    <p >
                        Send Email
                    </p>
                </a>
           
            </div>
</div>
<div class="body">
            
<div class="title">
    <p>Settings</p>
    <img src="{{asset('images/dashboard/image 50.png')}}" alt="">
</div>
<img src="{{asset('images/dashboard/arrows 2.png')}}" alt="" class="arrows">
<form action="{{ route('update-username') }}" class="change-username" method="post">
    @csrf
    <input type="text" name="name" value="{{Auth::user()->prenom}}" class="txt">
    <img src="{{asset('images/dashboard/stelo.png')}}" alt="" class="stelo">
    <input type="submit" value="change username" id="submit">
    <div class="btn"></div>
</form>
<form action="{{ route('update-pic') }}" class="change-pic" method="post" enctype="multipart/form-data">
    @csrf
    <label for="im">
        <div class="ch">
            <img src="{{asset('images/dashboard/camera.png')}}" alt="">
        </div>
       <input type="file" name="image" id="im" accept="image/*">
    </label>
    <div  class="imge">
    <img src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}" >
    </div>
    <input type="submit" value="change profile pic" id="submit">
    <div class="btn"></div>
</form>
<div class="f">
    <img src="{{asset('images/dashboard/engarab.png')}}" alt="">
    <a href="{{asset('/password/reset')}}" ><input type="submit" value="change password" id="submit" ><div class="btn2"></div><img src="{{asset('images/dashboard/cle.png')}}" alt="" class="cle"></a>
    <div class="btn"></div>
</div>
    

</div>
        
    
    <div id = "sidediv">
        <div class="account">
            <div class="acc"><p id="text0">
                Hello {{Auth::user()->prenom}}
            </p>
            <a id="logOut" href="{{ route('logout')}}">
                <p id="logText">
                    Log Out
                </p>
                <img src="{{asset('images/dashboard/log out.png')}}" alt="log out icon" id="logimg">
            </a></div>
            
            <img src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}" id="pp">
        </div>
        
        <p id="text10">
            What's HOT
        </p>
        <div class="eamils">
            @foreach($emails as $email)
            <div id="not1">
                <div id="notTitle1">
                @foreach($teachers as $teacher)
                      @if($teacher->email == $email->prof)
                         @if($teacher->image == 1)
                         <img src="{{asset('images/profs/'.$teacher->teacherID.'.jpg')}}" id="notimg1">
                         @else
                         <img src="{{asset('images/profs/none.png')}}" id="notimg1">
                         @endif
                      @endif
                    @endforeach
                <h2 >
                    {{$email->titre}}
                </h2>
                </div>
                <p id="text11">
                    {{$email->text}}
                </p>
                <a href="#">
                         <img src="{{asset('images/dashboard/mail.png')}}" class="mail">
                </a>
            </div>
            @endforeach
           
        </div>
        
        <p id="title13">
            New course added !
        </p>
        <?php if (count($courses) != 0) { ?>
        <div id="course">
            <p id="title100">
                {{$courses[0]->module}}
            </p>
            <p id="text100">
            {{$courses[0]->titre}}
            </p>
            
            <a href="{{$courses[0]->link}}">
            <img id="courseImg" src="{{asset('images/dashboard/course.png')}}">
            </a>
        </div>
        <?php } ?>
        <img src="{{asset('images/dashboard/bottom right corner.png')}}" id="bg">
        
    </div>
    

    
</body>
</html>