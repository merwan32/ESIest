<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rambla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard/notes.css')}}">
    <title>My notes</title>
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
                    <img src="{{asset('images/dashboard/image 51a.png')}}">
                    <p class="active">
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
</div>
        <div class="body">
        <div class="semester">
        <div >First semester</div>
        <div class="d2">Second semester</div>
    </div>
    <div class="graph" >
        <canvas id="graph1" ></canvas>
        <p>General view</p>
    </div>
    <div class="graph1">
        <div class="notes">
            <div class="p1">Best Mark:</div>
            <div class="p2">{{$best[0]->module}} : {{$best[0]->moyenne}}</div>
            <div class="p3">worst Mark:</div>
            <div class="p4">{{$worst[0]->module}} : {{$worst[0]->moyenne}}</div>
            <div class="p5">Semester average:</div>
            <?php 
            $moyenne = 0;
            $cof=0;
            ?>
            @foreach($notes as  $note)
            <?php  $moyenne += $note->moyenne * $note->coefficient;
               $cof += $note->coefficient ?>
            @endforeach
            <?php $moy = round($moyenne/$cof,2) ?>
            <div class="p6">{{$moy}}</div>
        </div>
    <div class="graph2" >
        <canvas id="graph2" ></canvas>
        <p>Statistics</p>
    </div>
    <div class="notes">
            <div class="p7">Module: 
                <select name="module" class="module">
                   @foreach($notes as  $note)
                    <option value="{{$note->module}}">{{$note->module}}</option>
                   @endforeach
                </select> 
            </div>
            <div class="p8">TD : <span></span></div>
            <div class="p9">EMD1: <span></span></div>
            <div class="p10">EMD2 :<span></span> </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0-rc.1/chartjs-plugin-datalabels.min.js" integrity="sha512-+UYTD5L/bU1sgAfWA0ELK5RlQ811q8wZIocqI7+K0Lhh8yVdIoAMEs96wJAIbgFvzynPm36ZCXtkydxu1cs27w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

modul = document.querySelector('.module');
let moduleOk = '{{$notes[0]->module}}';
document.querySelector('.p8 span').textContent = {{$notes[0]->TD}};
document.querySelector('.p9 span').textContent = {{$notes[0]->EMD1}};
document.querySelector('.p10 span').textContent = {{$notes[0]->EMD2}}


const ctx = document.getElementById('graph1').getContext('2d');
const gradientBg = ctx.createLinearGradient(0,0,0,360);
var modules = [];
var notes = [8];
var notes2 = [];
var notes1 = [];
@foreach($notes as  $note)
         modules.push('','{{$note->module}}');
         notes1.push(0,{{$note->moyenne}});
         notes2.push({{$note->moyenne}});
@endforeach
notes2.forEach(function(note, index) {
     if (note < notes2[index+1]) {
          notes.push(note,note-1);
     } else {
          notes.push(note,notes2[index+1]-2);
     }
});
notes.pop();
notes.push(8);
modules.push('');
gradientBg.addColorStop(0, '#f77f00');
gradientBg.addColorStop(0.4, '#f77f0000');
var data = {
    labels:modules,
    datasets:[{
        data:notes,
        tension:0.4,
        borderColor:'#f77f00',
        pointRadius:0,
        backgroundColor: gradientBg,
        fill: true,
        datalabels:{
            color:'transparent',
         },
    },
    {
    data:notes1,
    datalabels:{
            color:['transparent','black'],
            anchor:'end',
            align:'top',
            offset:6
    },
    type: 'bar',
    backgroundColor: '#6801D2',
    barThickness: 1,
}]
}
var options={
    responsive:true,
    plugins:{   
        legend: {
          display: false
                },
             },
        scales: {
        x: {
            ticks:{
                color:'#6801D2',
                autoSkip: false,
                    maxRotation: 0,
                    minRotation: 0
            },
            grid: {
                display: false,
              }
          },
        y: {
          display: false,
          beginAtZero: true
        }
    },
}
var config = {
    type : 'line',
    data: data,
    plugins:[ChartDataLabels],
    options: options
}
var graph1 = new Chart(ctx,config)
var notes3 = [];


const ctx2 = document.getElementById('graph2').getContext('2d');
var modules2 = ['TD','EMD1','EMD2'];
var data2 = {
    labels:modules2,
    datasets:[{
        data:notes3,
        borderColor:'#219EBC',
        pointRadius:5,
        backgroundColor: '#219EBC66',
        fill: true,
        fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
    }]
}
var options2={
    responsive:true,
    plugins: {
      legend: {
        display: false
      }
    },
    scale: {
        beginAtZero: true,
        max: 20,
        min:0,
        stepSize: 5
    },
    scales: {
            r: {
                pointLabels:{
                    color: '#219EBC',
                    font: {
                                    size: 20,
                                  }
                },
            }
}
}
var config2 = {
    type : 'radar',
    data: data2,
    options: options2,
}
@foreach($notes as  $note)
         if (moduleOk == '{{$note->module}}') {
             notes3.push({{$note->TD}},{{$note->EMD1}},{{$note->EMD2}});
         }
     @endforeach  
modul.onclick = ()=>{  
     moduleOk = modul.value;
     @foreach($notes as  $note)
         if (moduleOk == '{{$note->module}}') {
             notes3.pop();notes3.pop();notes3.pop();
             notes3.push({{$note->TD}},{{$note->EMD1}},{{$note->EMD2}});
            document.querySelector('.p8 span').textContent = {{$note->TD}};
            document.querySelector('.p9 span').textContent = {{$note->EMD1}};
            document.querySelector('.p10 span').textContent = {{$note->EMD2}}
         }
         graph1.update();
     @endforeach 
} 
var graph1 = new Chart(ctx2,config2)
</script>
</html>