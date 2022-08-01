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
    <link rel="stylesheet" href="{{asset('css/dashboard/ranking2.css')}}">
    <title>ranking</title>
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
                    <img src = "{{asset('images/dashboard/image 48.png')}}">
                    <p>
                        Modules
                    </p>
                </a>
                <a  href="{{route('ranking')}}">
                    <img src = "{{asset('images/dashboard/image 49a.png')}}">
                    <p class="active">
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
        <div class="sidebar">
            <div class="first">
                 First Semester
            </div>
            <div class="Second">
                Second Semester
            </div>
        </div>
        <div class="remarque">
            <div class="best">
                <img src="{{asset('images/dashboard/best.png')}}" alt="">
                <p>Best</p>
            </div>
            <div class="worst">
                <p>Worst</p>
                <img src="{{asset('images/dashboard/worst.png')}}" alt="">
            </div>
        </div>

        <div class="classement">
            <div class="part1">
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 18.png')}}" alt="">
                        <p class="p1">Moyenne</p>
                    </div>
                    <p class="p2">{{$bestm[0]->module}}</p>
                    <p class="p3">{{$bestm[0]->moyenne}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 18.png')}}" alt="">
                        <p class="p1">EMD1</p>
                    </div>
                    <p class="p2">{{$bestEmd1[0]->module}}</p>
                    <p class="p3">{{$bestEmd1[0]->EMD1}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 18.png')}}" alt="">
                        <p class="p1">EMD2</p>
                    </div>
                    <p class="p2">{{$bestEmd2[0]->module}}</p>
                    <p class="p3">{{$bestEmd2[0]->EMD2}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 18.png')}}" alt="">
                        <p class="p1">TD</p>
                    </div>
                    <p class="p2">{{$bestTd[0]->module}}</p>
                    <p class="p3">{{$bestTd[0]->TD}}</p>
                </div>
            </div>
            <div class="part2">
                <div class="container44">
                    <div class="modulefirst">{{$bestm[1]->module}}</div>
                    <div class="modulesecond">{{$bestm[0]->module}}</div>
                    <div class="modulethird">{{$bestm[2]->module}}</div>
                    @foreach($classment1 as $key=>$c)
                      @if($c->email == Auth::user()->email)
                        <div class="cfirst">{{$key+1}}
                            @if($key == 0)
                            st 
                            @elseif($key == 1)
                            nd 
                            @elseif($key == 2)
                            rd 
                            @else
                            th 
                            @endif
                        </div>
                      @endif
                    @endforeach
                    @foreach($classment0 as $key=>$c)
                      @if($c->email == Auth::user()->email)
                        <div class="csecond">{{$key+1}}
                        @if($key == 0)
                            st 
                            @elseif($key == 1)
                            nd 
                            @elseif($key == 2)
                            rd 
                            @else
                            th 
                            @endif
                        </div>
                      @endif
                    @endforeach
                    @foreach($classment2 as $key=>$c)
                      @if($c->email == Auth::user()->email)
                        <div class="cthird">{{$key+1}}
                        @if($key == 0)
                            st 
                            @elseif($key == 1)
                            nd 
                            @elseif($key == 2)
                            rd 
                            @else
                            th 
                            @endif
                        </div>
                      @endif
                    @endforeach
                    <img src="{{asset('images/dashboard/Group 46.png')}}" alt="">
                </div>
                <div class="circle">
                <?php 
            $moyenne = 0;
            $cof=0;
            ?>
            @foreach($notes as  $note)
            <?php  $moyenne += $note->moyenne * $note->coefficient;
               $cof += $note->coefficient ?>
            @endforeach
            <?php $moy = round($moyenne/$cof,2) ?>
            @if($moy >= 10)
            <p class="p">100%</p>
            <p class="p">Passed</p>
            <hr>
            <p class="f">0%</p>
            <p class="f">Failed</p>
            @else
            <p class="p">0%</p>
            <p class="p">Passed</p>
            <hr>
            <p class="f">100%</p>
            <p class="f">Failed</p>
            @endif
            
                </div>
            </div>
            <div class="part3">
            <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 21.png')}}" alt="">
                        <p class="p1">Moyenne</p>
                    </div>
                    <p class="p2">{{$worstm[0]->module}}</p>
                    <p class="p4">{{$worstm[0]->moyenne}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 21.png')}}" alt="">
                        <p class="p1">EMD1</p>
                    </div>
                    <p class="p2">{{$worstEmd1[0]->module}}</p>
                    <p class="p4">{{$worstEmd1[0]->EMD1}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 21.png')}}" alt="">
                        <p class="p1">EMD2</p>
                    </div>
                    <p class="p2">{{$worstEmd2[0]->module}}</p>
                    <p class="p4">{{$worstEmd2[0]->EMD2}}</p>
                </div>
                <div class="mark">
                    <div class="container">
                        <img src="{{asset('images/dashboard/Polygon 21.png')}}" alt="">
                        <p class="p1">TD</p>
                    </div>
                    <p class="p2">{{$worstTd[0]->module}}</p>
                    <p class="p4">{{$worstTd[0]->TD}}</p>
                </div>
            </div>
        </div>
        <!--write code here-->
        <div class="ranking">
                <a href="{{route('ranking')}}">
                    <div class="personal-ranking">
                    General ranking
                </div></a>
                <a href="{{route('rankingp')}}">
                <div class="general-ranking">
                    Personal ranking
                </div>
                </a>
                
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