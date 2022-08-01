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
    <link rel="stylesheet" href="{{asset('css/dashboard/ranking.css')}}">
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
        <div class="bottons">
            <div class="first"> <a href="#"> First Semester</a></div>
            <div class="second"> Second Semester </div>
        </div>
        <div class="module">
            <div class="module-title">
                <button class="dec"><img src="{{asset('images/dashboard/1.png')}}" ></button>
                <p>{{$modules[0]->module}}</p>
                <button class="inc"><img src="{{asset('images/dashboard/2.png')}}" ></button>
            </div>
            <div class="emd-container">
                <button onclick="emd1()" class="act">Emd1</button>
                <button onclick="emd2()">Emd2</button>
                <button onclick="td()">TD</button>
            </div>
        </div>
        <div class="classment-container">
            <div class="emd1">
            <div class="classment">
                <div class="cl1">
                @if($emd10[1]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 50.png')}}">
                    <p class="name">{{$emd10[1]->nom}} {{$emd10[1]->prenom}}</p>
                    <p class="moyenn">{{$emd10[1]->EMD1}}</p>
                </div>
                <div class="cl2">
                @if($emd10[0]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 49.png')}}">
                    <p class="name">{{$emd10[0]->nom}} {{$emd10[0]->prenom}}</p>
                    <p class="moyenn">{{$emd10[0]->EMD1}}</p>
                </div>
                <div class="cl3">
                @if($emd10[2]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 47.png')}}">
                    <p class="name">{{$emd10[2]->nom}} {{$emd10[2]->prenom}}</p>
                    <p class="moyenn">{{$emd10[2]->EMD1}}</p>
                </div>
            </div>
            <div class="self-classment">
                <p class="p1">you have placed</p>
                <p class="p2">
                    @foreach($emd10 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach
                </p>
            </div>
            </div>
            <div class="emd2">
            <div class="classment">
                <div class="cl1">
                @if($emd20[1]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 50.png')}}">
                    <p class="name">{{$emd20[1]->nom}} {{$emd20[1]->prenom}}</p>
                    <p class="moyenn">{{$emd20[1]->EMD2}}</p>
                </div>
                <div class="cl2">
                @if($emd20[0]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 49.png')}}">
                    <p class="name">{{$emd20[0]->nom}} {{$emd20[0]->prenom}}</p>
                    <p class="moyenn">{{$emd20[0]->EMD2}}</p>
                </div>
                <div class="cl3">
                @if($emd20[2]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 47.png')}}">
                    <p class="name">{{$emd20[2]->nom}} {{$emd20[2]->prenom}}</p>
                    <p class="moyenn">{{$emd20[2]->EMD2}}</p>
                </div>
            </div>
            <div class="self-classment">
                <p class="p1">you have placed</p>
                <p class="p2">
                    @foreach($emd20 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach
                </p>
            </div>
            </div>
            <div class="td">
            <div class="classment">
                <div class="cl1">
                @if($td0[1]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 50.png')}}">
                    <p class="name">{{$td0[1]->nom}} {{$td0[1]->prenom}}</p>
                    <p class="moyenn">{{$td0[1]->TD}}</p>
                </div>
                <div class="cl2">
                @if($td0[0]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 49.png')}}">
                    <p class="name">{{$td0[0]->nom}} {{$td0[0]->prenom}}</p>
                    <p class="moyenn">{{$td0[0]->TD}}</p>
                </div>
                <div class="cl3">
                @if($td0[2]->email == Auth::user()->email)
                <img class=img1 src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}">
                @else
                <img class=img1 src="{{asset('images/dashboard/usern.png')}}">
                @endif
                    <img class=img2 src="{{asset('images/dashboard/Group 47.png')}}">
                    <p class="name">{{$td0[2]->nom}} {{$td0[2]->prenom}}</p>
                    <p class="moyenn">{{$td0[2]->TD}}</p>
                </div>
            </div>
            <div class="self-classment">
                <p class="p1">you have placed</p>
                <p class="p2">
                    @foreach($td0 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach
                </p>
            </div>
            </div>
            
            <div class="ranking">
                <a href="{{route('ranking')}}">
                    <div class="general-ranking">
                    General ranking
                </div></a>
                <a href="{{route('rankingp')}}">
                <div class="personal-ranking">
                    Personal ranking
                </div>
                </a>
                
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
    btn = document.querySelectorAll('.emd-container button');
    function emd1() {
        document.querySelector('.emd2').style.display = 'none';
        document.querySelector('.td').style.display = 'none';
        document.querySelector('.emd1').style.display = 'flex';
        document.querySelector('.emd1').style.justifyContent= 'center';
        btn[0].classList.add("act");
        btn[1].classList.remove("act");
        btn[2].classList.remove("act");
    }
    function emd2() {
        document.querySelector('.emd1').style.display = 'none';
        document.querySelector('.td').style.display = 'none';
        document.querySelector('.emd2').style.display = 'flex';
        document.querySelector('.emd2').style.justifyContent= 'center'; 
        btn[1].classList.add("act");
        btn[0].classList.remove("act");
        btn[2].classList.remove("act");
    }
    function td() {
        document.querySelector('.emd2').style.display = 'none';
        document.querySelector('.emd1').style.display = 'none';
        document.querySelector('.td').style.display = 'flex';
        document.querySelector('.td').style.justifyContent= 'center';
        btn[2].classList.add("act");
        btn[1].classList.remove("act");
        btn[0].classList.remove("act");
    }
    var i=0;
    document.querySelector('.inc').setAttribute('onclick',  'increment(i)');
    document.querySelector('.dec').setAttribute('onclick',  'decrement(i)');
    function increment(i) {
        if (i ==0) {
            if ('{{$emd11[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd11[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd11[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[1]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(1)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(1)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd11[1]->nom}} {{$emd11[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd11[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd11[0]->nom}} {{$emd11[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd11[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd11[2]->nom}} {{$emd11[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd11[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td1[1]->nom}} {{$td1[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td1[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td1[0]->nom}} {{$td1[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td1[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td1[2]->nom}} {{$td1[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td1[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd21[1]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd21[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd21[0]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd21[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd21[2]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd21[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd11 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd21 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td1 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==1){
            
            if ('{{$emd12[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd12[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd12[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[2]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(2)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(2)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd12[1]->nom}} {{$emd12[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd12[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd12[0]->nom}} {{$emd12[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd12[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd12[2]->nom}} {{$emd12[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd12[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td2[1]->nom}} {{$td2[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td2[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td2[0]->nom}} {{$td2[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td2[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td2[2]->nom}} {{$td2[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td2[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd22[1]->nom}} {{$emd22[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd22[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd22[0]->nom}} {{$emd22[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd22[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd22[2]->nom}} {{$emd22[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd22[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd12 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd22 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td2 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==2) {
            
            if ('{{$emd13[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd13[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd13[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[3]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(3)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(3)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd13[1]->nom}} {{$emd13[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd13[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd13[0]->nom}} {{$emd13[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd13[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd13[2]->nom}} {{$emd13[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd13[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td3[1]->nom}} {{$td3[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td3[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td3[0]->nom}} {{$td3[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td3[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td3[2]->nom}} {{$td3[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td3[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd23[1]->nom}} {{$emd23[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd23[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd23[0]->nom}} {{$emd23[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd23[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd23[2]->nom}} {{$emd23[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd23[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd13 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd23 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td3 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==3) {
            
            if ('{{$emd14[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd14[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd14[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[4]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(4)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(4)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd14[1]->nom}} {{$emd14[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd14[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd14[0]->nom}} {{$emd14[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd14[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd14[2]->nom}} {{$emd14[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd14[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td4[1]->nom}} {{$td4[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td4[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td4[0]->nom}} {{$td4[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td4[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td4[2]->nom}} {{$td4[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td4[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd24[1]->nom}} {{$emd24[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd24[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd24[0]->nom}} {{$emd24[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd24[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd24[2]->nom}} {{$emd24[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd24[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd14 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd24 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td4 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==4) {
            
            if ('{{$emd15[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd15[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd15[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[5]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(5)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(5)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd15[1]->nom}} {{$emd15[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd15[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd15[0]->nom}} {{$emd15[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd15[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd15[2]->nom}} {{$emd15[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd15[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td5[1]->nom}} {{$td5[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td5[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td5[0]->nom}} {{$td5[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td5[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td5[2]->nom}} {{$td5[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td5[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd25[1]->nom}} {{$emd25[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd25[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd25[0]->nom}} {{$emd25[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd25[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd25[2]->nom}} {{$emd25[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd25[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd15 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd25 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td5 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==5) {
            
            if ('{{$emd16[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd16[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd16[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[6]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(6)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(6)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd16[1]->nom}} {{$emd16[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd16[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd16[0]->nom}} {{$emd16[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd16[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd16[2]->nom}} {{$emd16[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd16[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td6[1]->nom}} {{$td6[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td6[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td6[0]->nom}} {{$td6[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td6[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td6[2]->nom}} {{$td6[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td6[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd26[1]->nom}} {{$emd26[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd26[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd26[0]->nom}} {{$emd26[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd26[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd26[2]->nom}} {{$emd26[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd26[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd16 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
            @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd26 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
            @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td6 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
            @endforeach`;
        }else if(i ==6) {
            
            if ('{{$emd17[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd17[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd17[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[7]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(7)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(7)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd17[1]->nom}} {{$emd17[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd17[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd17[0]->nom}} {{$emd17[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd17[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd17[2]->nom}} {{$emd17[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd17[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td7[1]->nom}} {{$td7[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td7[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td7[0]->nom}} {{$td7[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td7[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td7[2]->nom}} {{$td7[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td7[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd27[1]->nom}} {{$emd27[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd27[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd27[0]->nom}} {{$emd27[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd27[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd27[2]->nom}} {{$emd27[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd27[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd17 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd27 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td7 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==7) {
            
            if ('{{$emd10[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd10[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd10[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[0]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(0)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(0)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd10[1]->nom}} {{$emd10[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd10[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd10[0]->nom}} {{$emd10[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd10[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd10[2]->nom}} {{$emd10[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd10[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td0[1]->nom}} {{$td0[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td0[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td0[0]->nom}} {{$td0[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td0[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td0[2]->nom}} {{$td0[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td0[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd20[1]->nom}} {{$emd20[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd20[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd20[0]->nom}} {{$emd20[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd20[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd20[2]->nom}} {{$emd20[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd20[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd10 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd20 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td0 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }
    }
    
    function decrement(i) {
        if (i ==0) {
            
            if ('{{$emd17[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd17[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd17[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd27[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td7[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[7]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(7)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(7)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd17[1]->nom}} {{$emd17[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd17[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd17[0]->nom}} {{$emd17[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd17[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd17[2]->nom}} {{$emd17[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd17[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td7[1]->nom}} {{$td7[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td7[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td7[0]->nom}} {{$td7[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td7[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td7[2]->nom}} {{$td7[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td7[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd27[1]->nom}} {{$emd27[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd27[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd27[0]->nom}} {{$emd27[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd27[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd27[2]->nom}} {{$emd27[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd27[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd17 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd27 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td7 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==1){
            
            if ('{{$emd10[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd10[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd10[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd20[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td0[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[0]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(0)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(0)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd10[1]->nom}} {{$emd10[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd10[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd10[0]->nom}} {{$emd10[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd10[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd10[2]->nom}} {{$emd10[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd10[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td0[1]->nom}} {{$td0[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td0[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td0[0]->nom}} {{$td0[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td0[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td0[2]->nom}} {{$td0[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td0[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd20[1]->nom}} {{$emd20[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd20[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd20[0]->nom}} {{$emd20[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd20[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd20[2]->nom}} {{$emd20[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd20[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd10 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd20 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td0 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==2) {
            
            if ('{{$emd11[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd11[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd11[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd21[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td1[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[1]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(1)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(1)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd11[1]->nom}} {{$emd11[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd11[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd11[0]->nom}} {{$emd11[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd11[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd11[2]->nom}} {{$emd11[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd11[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td1[1]->nom}} {{$td1[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td1[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td1[0]->nom}} {{$td1[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td1[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td1[2]->nom}} {{$td1[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td1[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd21[1]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd21[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd21[0]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd21[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd21[2]->nom}} {{$emd21[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd21[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd11 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd21 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td1 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==3){
            
            if ('{{$emd12[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd12[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd12[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd22[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td2[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[2]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(2)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(2)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd12[1]->nom}} {{$emd12[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd12[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd12[0]->nom}} {{$emd12[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd12[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd12[2]->nom}} {{$emd12[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd12[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td2[1]->nom}} {{$td2[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td2[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td2[0]->nom}} {{$td2[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td2[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td2[2]->nom}} {{$td2[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td2[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd22[1]->nom}} {{$emd22[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd22[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd22[0]->nom}} {{$emd22[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd22[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd22[2]->nom}} {{$emd22[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd22[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd12 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd22 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td2 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==4) {
            
            if ('{{$emd13[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd13[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd13[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd23[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td3[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[3]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(3)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(3)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd13[1]->nom}} {{$emd13[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd13[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd13[0]->nom}} {{$emd13[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd13[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd13[2]->nom}} {{$emd13[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd13[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td3[1]->nom}} {{$td3[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td3[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td3[0]->nom}} {{$td3[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td3[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td3[2]->nom}} {{$td3[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td3[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd23[1]->nom}} {{$emd23[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd23[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd23[0]->nom}} {{$emd23[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd23[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd23[2]->nom}} {{$emd23[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd23[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd13 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd23 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td3 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==5) {
            
            if ('{{$emd14[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd14[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd14[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd24[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td4[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[4]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(4)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(4)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd14[1]->nom}} {{$emd14[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd14[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd14[0]->nom}} {{$emd14[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd14[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd14[2]->nom}} {{$emd14[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd14[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td4[1]->nom}} {{$td4[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td4[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td4[0]->nom}} {{$td4[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td4[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td4[2]->nom}} {{$td4[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td4[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd24[1]->nom}} {{$emd24[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd24[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd24[0]->nom}} {{$emd24[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd24[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd24[2]->nom}} {{$emd24[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd24[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd14 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd24 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td4 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==6) {
            
            if ('{{$emd15[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd15[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd15[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd25[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td5[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[5]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(5)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(5)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd15[1]->nom}} {{$emd15[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd15[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd15[0]->nom}} {{$emd15[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd15[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd15[2]->nom}} {{$emd15[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd15[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td5[1]->nom}} {{$td5[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td5[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td5[0]->nom}} {{$td5[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td5[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td5[2]->nom}} {{$td5[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td5[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd25[1]->nom}} {{$emd25[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd25[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd25[0]->nom}} {{$emd25[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd25[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd25[2]->nom}} {{$emd25[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd25[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd15 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd25 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td5 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }else if(i ==7) {
            
            if ('{{$emd16[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd16[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd16[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd1 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$emd26[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.emd2 .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[1]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl1 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl1 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[0]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl2 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl2 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            if ('{{$td6[2]->email}}' == '{{Auth::user()->email}}') {
                document.querySelector('.td .cl3 .img1').src ="{{asset('storage/images/users')}}/{{Auth::user()->picture}}";
            } else {
                document.querySelector('.td .cl3 .img1').src ="{{asset('images/dashboard/usern.png')}}";
            };
            document.querySelector('.module-title p').innerText = '{{$modules[6]->module}}';
            document.querySelector('.inc').setAttribute('onclick',  'increment(6)');
            document.querySelector('.dec').setAttribute('onclick',  'decrement(6)');
            document.querySelector('.emd1 .cl1 .name').innerText = '{{$emd16[1]->nom}} {{$emd16[1]->prenom}}';
            document.querySelector('.emd1 .cl1 .moyenn').innerText = '{{$emd16[1]->EMD1}}';
            document.querySelector('.emd1 .cl2 .name').innerText = '{{$emd16[0]->nom}} {{$emd16[0]->prenom}}';
            document.querySelector('.emd1 .cl2 .moyenn').innerText = '{{$emd16[0]->EMD1}}';
            document.querySelector('.emd1 .cl3 .name').innerText = '{{$emd16[2]->nom}} {{$emd16[2]->prenom}}';
            document.querySelector('.emd1 .cl3 .moyenn').innerText = '{{$emd16[2]->EMD1}}';
            document.querySelector('.td .cl1 .name').innerText = '{{$td6[1]->nom}} {{$td6[1]->prenom}}';
            document.querySelector('.td .cl1 .moyenn').innerText = '{{$td6[1]->TD}}';
            document.querySelector('.td .cl2 .name').innerText = '{{$td6[0]->nom}} {{$td6[0]->prenom}}';
            document.querySelector('.td .cl2 .moyenn').innerText = '{{$td6[0]->TD}}';
            document.querySelector('.td .cl3 .name').innerText = '{{$td6[2]->nom}} {{$td6[2]->prenom}}';
            document.querySelector('.td .cl3 .moyenn').innerText = '{{$td6[2]->TD}}';
            document.querySelector('.emd2 .cl1 .name').innerText = '{{$emd26[1]->nom}} {{$emd26[1]->prenom}}';
            document.querySelector('.emd2 .cl1 .moyenn').innerText = '{{$emd26[1]->EMD2}}';
            document.querySelector('.emd2 .cl2 .name').innerText = '{{$emd26[0]->nom}} {{$emd26[0]->prenom}}';
            document.querySelector('.emd2 .cl2 .moyenn').innerText = '{{$emd26[0]->EMD2}}';
            document.querySelector('.emd2 .cl3 .name').innerText = '{{$emd26[2]->nom}} {{$emd26[2]->prenom}}';
            document.querySelector('.emd2 .cl3 .moyenn').innerText = '{{$emd26[2]->EMD2}}';
            document.querySelector('.emd1 .p2').innerText = `
            @foreach($emd16 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.emd2 .p2').innerText = ` 
            @foreach($emd26 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
                    document.querySelector('.td .p2').innerText = ` 
            @foreach($td6 as $key=>$m)
                    @if($m->email == Auth::user()->email)
                      @if($key == 0)
                      {{$key +1}}st
                      @elseif($key == 1)
                      {{$key +1}}nd
                      @elseif($key == 2)
                      {{$key +1}}rd 
                      @else
                      {{$key +1}}th
                      @endif
                    @endif
                    @endforeach`;
        }
    }
</script>
</html>