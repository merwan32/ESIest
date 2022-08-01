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
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Admin</title>
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
                <a  href="{{route('settings')}}">
                    <img src="{{asset('images/dashboard/image 50.png')}}">
                    <p>
                        Settings
                    </p>
                </a>
                @admin 
                <a  href="{{route('add')}}">
                    <img src="{{asset('images/dashboard/admin.png')}}">
                    <p class="active">
                        Admin
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
<img src="{{asset('images/dashboard/arrows.png')}}" alt="" class="arrows">
<div>
        
        <p>add course</p>
               <form action="{{route('addecourses')}}" method="post">
                @csrf
                <div>
                <select name="ann" class="ann" >
                            <option value="1">1er annee</option>
                            <option value="2">2eme annee</option>
                </select>
                <select name="type2" >
                            <option value="Cour">Cour</option>
                            <option value="TD">TD</option>
                </select>
                </div>
                
                <select name="module" class="module pr" >
                            <option value="ALG2">Algèbre 2</option>
                            <option value="ALSDD">ALSDD</option>
                            <option value="ANA2">Analyse 2</option>
                            <option value="ANG1">Anglais 1</option>
                            <option value="ELECF1">Electronique Fondamentale 1</option>
                            <option value="MECA">Mécanique du Point</option>
                            <option value="SYST2">Introduction au Système d’exploitation 2</option>
                            <option value="TEO">TEO</option>
                </select>
                <p>Name</p>
                <input type="text" name="titre3"  value="{{old('titre3')}}" placeholder="write here">
                <p>Link</p>
                <input type="text" name="link3"  value="{{old('link3')}}" placeholder="write here">
                <input type="submit" value="Submit">
               </form>
</div>
<div>
        

        <p>add notification</p>
      <form action="{{route('addnotification')}}" method="post">
        @csrf
        <p>Key word</p>
        <input type="text" name="type"  value="{{old('type')}}" placeholder="exp: Semainier , Cours , Notes...">
        <p>Context</p>
        <input type="text" name="titre"  value="{{old('titre')}}" placeholder="What is this notification about?">
        <p>Link</p>
        <input type="text" name="link2"  value="{{old('link2')}}" placeholder="write here">
        <input type="submit" value="Submit">
      </form>
</div>
<div>
        <p>Add an event</p>

       <form action="{{route('addevent')}}" method="post">
        @csrf
        <p>Name</p>
        <input type="text" name="description"  value="{{old('description')}}" placeholder="write here">
        <p>Date</p>
        <input type="date" name="date"  value="{{old('date')}}">
        <p>Link</p>
        <input type="text" name="link"  value="{{old('link')}}" placeholder="write here">
          <input type="submit" value="Submit">
       </form>
</div>
<div>
 <p>Hot mail</p>
       <form action="{{route('addhotemail')}}" method="post">
        @csrf
        <select name="anne">
                    <option value="1">1er annee</option>
                    <option value="2">2eme annee</option>
        </select>
        <p>Title</p>
        <input type="text" name="titre2"  value="{{old('titre2')}}" placeholder="write here">
        <p>Context</p>
        <input type="text" name="text"  value="{{old('text')}}" placeholder="write here">
        <select name="prof" class="pr">
                  @foreach($teachers as  $teacher)
                    <option value="{{$teacher->email}}">{{$teacher->email}}</option>
                   @endforeach
        </select>
        <input type="submit" value="Submit">
       </form>
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
<script src="{{ asset('js/admin.js') }}"></script>
</html>