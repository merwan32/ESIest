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
    <link rel="stylesheet" href="{{asset('css/dashboard/module.css')}}">
    <title>module</title>
</head>
<body>
<div id="dashboard">
      <a href="{{route('home')}}"><img id="logo" src="{{asset('images/logo.png')}}"></a>
            
            <div class="liens">
                <a href="{{route('profile')}}">
                    <img  src="{{asset('images/dashboard/image 57.png')}}">
                   <p>
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
                    <img src = "{{asset('images/dashboard/image 48a.png')}}">
                    <p class="active">
                        Modules
                    </p>
                </a>
                <a  href="{{route('ranking')}}">
                    <img src = "{{asset('images/dashboard/image 49.png')}}">
                    <p >
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
        
        
<div class="main">
        <div class="bottons">
            <div class="Semester" onclick="S1()">First semester</div>
            <div class="Semester act" onclick="S2()">Second semester</div>
            <div class="share">
                <a href="https://esilib.tech/"><img src="{{asset('images/dashboard/vector 1.png')}}"></a>
                
            </div>
        </div>
        <div class="corner">
            <img src="{{asset('images/dashboard/Vector 114.png')}}">
            <p>consult esi library</p>
        </div>
        <div class="main-skills">
            @foreach($s2 as $module)
            <div class="card">
                <i class="fas"></i>
                <img src="{{asset('images/modules')}}/{{$module->module}}.png" alt="">
                @if($module->lastCour != 0)
                <P>cours {{$module->lastCour}} </P>
                <a href="{{$module->LastCourLink}}">{{$module->lastCourName}}</a>
                <div class="bar">
                    <div class="barcolor" style="width: {{$module->LastcourRead / $module->lastCour * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
                <hr>
                @if($module->lastTd != 0)
                <P>TD {{$module->lastTd}} </P>
                <a href="{{$module->LastTdLink}}">{{$module->lastTdName}}</a>
                <div class="bar">
                    <div class="barcolor2" style="width: {{$module->LasttdRead / $module->lastTd * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
            </div>
            @endforeach
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
    module = document.querySelector('.main-skills');
    s = document.querySelectorAll('.Semester')
    function S1() {
        s[0].classList.add("act");
        s[1].classList.remove("act");
        module.innerHTML = `
        @foreach($s1 as $module)
            <div class="card">
                <i class="fas"></i>
                <img src="{{asset('images/modules')}}/{{$module->module}}.png" alt="">
                @if($module->lastCour != 0)
                <P>cours {{$module->lastCour}} </P>
                <a href="{{$module->LastCourLink}}">{{$module->lastCourName}}</a>
                <div class="bar">
                    <div class="barcolor" style="width: {{$module->LastcourRead / $module->lastCour * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
                <hr>
                @if($module->lastTd != 0)
                <P>TD {{$module->lastTd}} </P>
                <a href="{{$module->LastTdLink}}">{{$module->lastTdName}}</a>
                <div class="bar">
                    <div class="barcolor2" style="width: {{$module->LasttdRead / $module->lastTd * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
            </div>
            @endforeach
        `;
    }
    function S2() {
        s[1].classList.add("act");
        s[0].classList.remove("act");
        module.innerHTML = `
        @foreach($s2 as $module)
            <div class="card">
                <i class="fas"></i>
                <img src="{{asset('images/modules')}}/{{$module->module}}.png" alt="">
                @if($module->lastCour != 0)
                <P>cours {{$module->lastCour}} </P>
                <a href="{{$module->LastCourLink}}">{{$module->lastCourName}}</a>
                <div class="bar">
                    <div class="barcolor" style="width: {{$module->LastcourRead / $module->lastCour * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
                <hr>
                @if($module->lastTd != 0)
                <P>TD {{$module->lastTd}} </P>
                <a href="{{$module->LastTdLink}}">{{$module->lastTdName}}</a>
                <div class="bar">
                    <div class="barcolor2" style="width: {{$module->LasttdRead / $module->lastTd * 100 }}%;"></div>
                </div>
                @else
                <p></p>
                <a href=""></a>
                @endif
            </div>
            @endforeach
        `;
    }
</script>
</html>