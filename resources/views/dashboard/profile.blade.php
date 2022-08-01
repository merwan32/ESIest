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
    <link rel="stylesheet" href="{{asset('css/dashboard/dashboard.css')}}">
    <title>dashboard</title>
</head>
<body>
<div id="dashboard">
      <a href="{{route('home')}}"><img id="logo" src="{{asset('images/logo.png')}}"></a>
            
            <div class="liens">
                <a href="{{route('profile')}}">
                    <img  src="{{asset('images/dashboard/image 57a.png')}}">
                   <p class="active">
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
                <a  href="{{route('settings')}}">
                    <img src="{{asset('images/dashboard/image 50.png')}}">
                    <p>
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
            <div class="notification">
                <h1>Nice to see you back!</h1>
                @foreach($notifications as $notification)
                <div id="notification1" >
                    <img src="{{asset('images/dashboard/1_notification.png')}}" class="bell">
                    <p id="text1">
                        <span>{{$notification->type}}</span> {{$notification->titre}}
                    </p>
                    <a href="{{$notification->link}}">
                    <img class="arrow" src="{{asset('images/dashboard/490265-PHCMZE-801.jpg')}}"></a>
                </div>
                @endforeach
            </div>
        
        <div id="event">
            <img src="{{asset('images/dashboard/events.png')}}" id="events">
</div>
<div class="prog">
<div class="moyenne">
        <p>Is it set in stone? </p>
        <div class="c"><div class="c1"><div class="c3"><div class="c2">
            <p class="p1">Good job</p>
            <?php 
            $moyenne = 0;
            $cof=0;
            ?>
            @foreach($notes as  $note)
            <?php  $moyenne += $note->moyenne * $note->coefficient;
               $cof += $note->coefficient ?>
            @endforeach
            <?php $moy = round($moyenne/$cof,2) ?>
            <p>{{$moy}}</p>
        </div></div></div></div>
        
    </div>
    <div id="unread">
       
    <p id="title000">
       Unread courses
    </p>

    @foreach($courses as $cours)
    <div class="cours">
        <P class="text300">
            {{$cours->titre}}
        </P>
        <a href="{{ route('read',['id' => $cours->id]) }}"><img class="img" src="{{asset('images/dashboard/unread.png')}}"></a>
        
    </div>
    @endforeach
    
   <div id="more">
       <a href="{{route('module')}}" >
       <p id="mmodule">
           See modules
       </p>
       </a>
       <img src="{{asset('images/dashboard/Mask group.png')}}" id="moreImg">
   </div> 
</div>
<div class="semesterprogres">
        <p>Semester progress</p>
        <div class="stat">
            <div class="text">
                <p><span></span> % acheived</p>
                <p><span class="weeks"></span> weeks left</p>
            </div>
            <div class="cercle">
                <div class="cercle2"><p>30%</p></div>
            </div>
        </div>
    </div>
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
<script>
    var date1 = new Date('02/20/2022');
    var date2 = new Date('07/13/2022');
    var date3 = new Date();
    let d1= date3-date1;
    let d2=date2-date1;
    let x=100*d1/d2;
    x = x.toFixed(0);
    var cercle = document.querySelector('.cercle');
    var per = document.querySelector('.cercle2 p');
    var per2 = document.querySelector('.text span');
    var per3 = document.querySelector('.text .weeks');
    per.textContent = x+'%';
    per2.textContent = x;
    per3.textContent = ((d2-d1)/(1000*3600*24*7)).toFixed(1);
    cercle.style = `background: conic-gradient(
          #f77f00 `+x+`%,
          white `+x+`%
        );`;
    var c3 = document.querySelector('.c3');
    c3.style = `background: conic-gradient(
        transparent `+{{$moy*2.5}}+`%,
        #C4C4C4 `+{{$moy*2.5}}+`%
        );`;
</script>
</html>