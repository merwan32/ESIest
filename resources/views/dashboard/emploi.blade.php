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
    <link rel="stylesheet" href="{{asset('css/dashboard/emploi.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/dycalendar.css')}}">
    <title>Schedule</title>
</head>
<body>
<div id="dashboard">

            <img id="logo" src="{{asset('images/logo.png')}}">
            <div class="liens">
                <a href="{{route('profile')}}">
                    <img  src="{{asset('images/dashboard/image 57.png')}}">
                   <p >
                       Dashboard
                   </p>
                </a>
                <a  href="{{route('notes')}}">
                    <img src="{{asset('images/dashboard/image 51.png')}}">
                    <p >
                        My marks
                    </p>
                </a>
                <a href="{{route('emploi')}}">
                    <img src = "{{asset('images/dashboard/image 45a.png')}}">
                    <p class="active">
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
            <div class="emploi">
                   @if(Auth::user()->annee == 1)
                  <img src="{{asset('images/dashboard/1-Annéé.png')}}" alt="">
                  @elseif(Auth::user()->groupe == 6 || Auth::user()->groupe == 7 || Auth::user()->groupe == 8 ||Auth::user()->groupe == 9)
                  <img src="{{asset('images/dashboard/2-Année-SectionB.png')}}" alt="">
                  @else
                  <img src="{{asset('images/dashboard/2-Année-SectionA.png')}}" alt="">
                  @endif
                  <div class="days">
                      <p >Sunday</p>
                      <p>Monday</p>
                      <p>Tuesday</p>
                      <p>Wednesday</p>
                      <p>Thursday</p>
                  </div>
                  <div class="courss">
                      <div class="time"></div>
                        <?php $day = $days[0]->Day ?>
                        <div class="sunday">
                         @foreach($days as  $sun)
                           @if($day != $sun->Day)
                           </div>
                           <div class="sunday">
                           <?php $day = $sun->Day ?>
                           @endif
                           @if($sun->courseType == 'Cours')
                           <div class="cou a">
                           @elseif($sun->courseType == '')
                           <div class="cou b">
                           @else
                           <div class="cou ">
                             @endif
                               <p>{{$sun->courseType}}</p>
                               <p>{{$sun->courseName}}</p>
                               <p> {{$sun->teacher->nom}}</p>
                           </div>
                         @endforeach
</div>
                  </div>
           </div>
           <div class="notic">   
                <form action="{{route('addabsence')}}" method="post" class="loc">
                    @csrf
                   <p class="p0"><span> Module :</span> <select name="module" class="module">
                   @foreach($notes as  $note)
                    <option value="{{$note->module}}">{{$note->module}}</option>
                   @endforeach
                   </select>
                   
                   
                   <input type="submit" value="+" class="submit">
                   <div class="check">justify : <input type="checkbox" name="justify" ></div>
                   <p><span >Absence count :</span><div class="c1">
                       @for($i=0;$i<3 ; $i++)
                         @if($i < $notes[0]->absence)
                           <div class="c">x</div>
                         @else
                           <div class="c"></div>
                         @endif
                       @endfor
                    </div></p>
                   <p class="p8"><span></span> justified</p>
                   <p class="p9"><span></span> non justified</p>
                </form>
               <div class="left">
                   <div class="td">
                       <div></div>
                       <p>7 TD’s/TP left</p>
                   </div>
                   <div class="cour">
                       <div></div>
                       <p>4 courses left</p>
                   </div>
               </div>
               <div class="not">
                   <p>Add a note</p>
                   <textarea name="" id="" placeholder="write a note or something usefull here
example: we have a test nex week"></textarea>
                    <img src="{{asset('images/dashboard/add email.png')}}" class="i1">
                    <img src="{{asset('images/dashboard/image 63.png')}}" class="i2">
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
            <div class="calendar">
               <div id="dycalendar"></div>
           </div>
            
        </div>
        <div id="text00"><img src="{{asset('images/dashboard/event.png')}}" alt="">
        <p >Upcomming events</p></div>
        <div class="text01">
            <p><span>May</span>12th - 14th </p> Alphabit club: Startup Weekend
        </div>
        <img src="{{asset('images/dashboard/Rectangle 198.png')}}" alt="">
        
        <img src="{{asset('images/dashboard/bottom right corner.png')}}" id="bg">
        
    </div>
    
 
</body>
<script src="{{asset('js/dycalendar.js')}}"></script>
<script>
    dycalendar.draw({
        target:`#dycalendar`,
        type:`month`,
        dayformat:`full`,
        monthformat:`full`,
        highlighttargetdate:true,
        prevnextbutton:`show`,
    });


    let day = new Date();
    let d = day.getDay();
    let dy = document.querySelectorAll('.days p');
    let t = document.querySelector('.time');
    
    let m = day.getHours()*60+day.getMinutes();
    if (m<480) {
        t.style.left = "0";
    } else if (m>960) {
        t.style.right = "0";
    } else{
        t.style.left = 785*(m-480)/480+"px";
    }
    if (dy.item(d) != null) {
        dy.item(d).classList.add('a');
    }
    



modul = document.querySelector('.module');
let moduleOk = '{{$notes[0]->module}}';
document.querySelector('.p8 span').textContent = {{$notes[0]->justified}};
document.querySelector('.p9 span').textContent = {{$notes[0]->absence }} -{{ $notes[0]->justified}};


modul.onclick = ()=>{  
     moduleOk = modul.value;
     const divx = document.createElement("div");
     divx.textContent = 'x';
     const div = document.createElement("div");
     div.classList.add("c");
     divx.classList.add("c");
     @foreach($notes as  $note)
         if (moduleOk == '{{$note->module}}') {
            document.querySelector('.p8 span').textContent = {{$note->justified}};
            document.querySelector('.p9 span').textContent = {{$note->absence }}-{{ $note->justified}};
            document.querySelector('.c1').innerHTML = "";
                      @for($i=0 ; $i<3 ; $i++)
                         @if($i < $note->absence)
                         document.querySelector('.c1').innerHTML += `<div class="c">x<div>`;
                         @else
                         document.querySelector('.c1').innerHTML += `<div class="c"><div>`;
                         @endif
                      @endfor
         }
     @endforeach 
} 
</script>
</html>