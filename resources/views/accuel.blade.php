<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/accuel.css')}}">
</head>
<body>

  <section class="page" id="top">
    <nav>
       <a class="logo"><img src="{{asset('images/logo.png')}}" alt="logo" href="top"></a>
       <ul class="menu">
         <li><a href="#about">about us</a></li>
         <li><a href="#libary">libary</a></li>
         <li><a href="#faculty"> faculty</a></li>
         <li><a href="#Q/A">Q/A</a></li>
         <li><a href="#contacts">contacts</a></li>
       </ul>
      
        @guest 
        <div class="buttom">
           <a href="{{route('login')}}" class="btn1">login</a>
           <a href="{{route('register')}}" class="btn2">sign up</a>
        </div>
        @endguest
        @Auth
          <div class="auth">
          
             <a href="{{route('profile')}}"><img src="{{asset('storage/images/users')}}/{{Auth::user()->picture}}" class="user"></a>
             <a href="{{route('logout')}}">Log out</a>
             <a href="{{route('logout')}}"><img src="{{asset('images/dashboard/log out.png')}}" alt=""></a>
          </div>
        @endauth
     </nav> 

  </section> 
  <section class="loli"> 
      <img src="{{asset('images/accuel/header background.jpg')}}" alt="">  
  </section>
        <a class="about" id="about"> About us</a>
        <section class="pic">
          <img src="{{asset('images/accuel/about us background.jpg')}}" alt="">
          <p>your guid to know everything about ESI SBA , join us to begin your journey here.</p>
        </section>
        <img src="{{asset('images/accuel/background.png')}}" class="bg">
        <img src="{{asset('images/accuel/background2.png')}}" class="bg2">
        <section class="pic2" id="libary">
          <a class="text">get started</a>
          <div class="logo2">
            <img src="{{asset('images/accuel/curved arrow.png')}}" alt="">
          </div>

          <div class="modules">
            <div class="modul">
              <div  >
                <img src="{{asset('images/accuel/electronique.png')}}" alt="">
              </div>
              <div   >
                <a href="https://drive.google.com/drive/folders/163c8Pv4GUDhns5Hd6oJfuG-A7dLwEyEN">Electronique</a>
              </div>
            </div>
            <div class="modul">
              <div   class="x">
                <a href="https://drive.google.com/drive/folders/13sBrfzPYl7cWxcU_JDpP45CtQXxusnU4">algeber 3</a>
              </div>
              <div  >
                <img src="{{asset('images/accuel/algeber.png')}}" alt="">
              </div>
              
            </div>
            <div class="modul">
              <div  >
                <img src="{{asset('images/accuel/analyse.png')}}" alt="">
              </div>
              <div   >
                <a href="https://drive.google.com/drive/folders/18OK1wi24FzSQuaOYwpUJVt5wenPeWKT1?usp=sharing">Analyse 4</a>
              </div>
            </div>
            <div class="modul">
              <div  class="x" >
                <a href="https://drive.google.com/drive/folders/1JMdHtBTNN9kn3bzPxfFID_eCT3W3kFve">Algotithmique</a>
              </div>
              <div  >
                <img src="{{asset('images/accuel/algo.png')}}" alt="">
              </div>
              
            </div>
            <div class="modul">
              <div  >
                <img src="{{asset('images/accuel/archi.png')}}" alt="">
              </div>
              <div   >
                <a href="https://drive.google.com/drive/folders/15bCBZK9mo3OVHKmJk06iw_eViAazy7LJ">Architecture</a>
              </div>
            </div>
          </div>
          
        </section>
       
         <div  class="logo8">
           <img src="{{asset('images/accuel/right-arrow 1.png')}}" alt="">
         </div>
         <div class="logo88">
            <a href="https://esilib.tech/">view libary</a>
         </div>
       <section id="faculty">
         <div class="logo9">
           <img src="{{asset('images/accuel/curved arrow 2.png')}}" alt="">
         </div>
         <div class="logo99">
          <a href="">Faculty cast</a>
         </div>
       </section> 
         <div class="profs" >
          <div class="logoo1">
            <img src="{{asset('images/accuel/arrow_New1.png')}}" alt="">
          </div>
          <div class="p">
          @foreach($teachers as $teacher)
            @if($loop->iteration == 1 || $loop->iteration ==6 || $loop->iteration ==11 || $loop->iteration ==16)
               <div class="prfs">
             @endif
             <div class="prof">
                  <img src="{{asset('images/profs/'.$teacher->teacherID.'.jpg')}}" height="228px" alt="">
             </div>
             @if($loop->iteration == 5 || $loop->iteration ==10 || $loop->iteration ==15 || $loop->iteration ==20)
             </div>
             @endif
          @endforeach
          </div>
          <div class="logoo7">
            <img src="{{asset('images/accuel/arrow.png')}}" alt="">
          </div>
         </div>

         <div class="pr">
           <div class="act"></div>
           <div></div>
           <div></div>
           <div></div>
         </div>
          
          <div class="view1">
            <a href="https://www.esi-sba.dz/fr/index.php/annuaire/annuaire-enseignant/">view libary</a>
            <img src="{{asset('images/accuel/right-arrow 2.png')}}" alt="">
          </div>




          <div class="ask"></div>
            <div class="ask1" id="Q/A"><p>Frequently asked</p></div>


           <div class="img2">
             <img src="{{asset('images/accuel/frequently asked background.jpg')}}" alt="">
           </div> 
           <div class="qustions">
             @foreach($qna as $q)
             <div class="loli3">
              <a> {{$q->question}}</a>
              <p>{{$q->answer}}</p>
               <a href="{{route('QA')}}"><img src="{{asset('images/accuel/arrow (1).png')}}" alt=""></a>
            </div>
             @endforeach
            
           
            
          </div>
          <div class="more">
            <img src="{{asset('images/accuel/arrow-1.png')}}" alt="">
            <a href="{{route('QA')}}"> learn more</a>
            
          </div>
          <div class="ligne1"></div>


          
          <div class="final1"> 
           <a>Upcoming events</a>
           <img src="{{asset('images/accuel/curved arrow 3.png')}}" alt="">
          </div> 


          <div class="evenement">
          <?php $i = 0 ?>
            <div class="right">
              @foreach($events as $event)
              <?php $i++ ?>
              @if($i == 5)
             </div>
             <div class="left">
              @endif
              <div class="even">
                <a href="{{$event->link}}"><div>{{date('d', strtotime($event->date))}}</div><div class="a">{{date('F', strtotime($event->date))}}</div>{{date('Y', strtotime($event->date))}}</a>
                <p>{{$event->description}}</p>
              </div>
              @endforeach
             </div>
          </div>
      
  <div class="emploi">
   <p> Emploi du temps</p>
    <div class="empl1"><a href="https://www.esi-sba.dz/fr/wp-content/uploads/2022/02/Emploi_temps_1cpi2sem_2021_2022_definitif.pdf">Emploi du temps de la 1CPI</a>
    <div class="pic3"><a href="https://www.esi-sba.dz/fr/wp-content/uploads/2022/02/Emploi_temps_1cpi2sem_2021_2022_definitif.pdf"><img src="{{asset('images/accuel/arrow-1.png')}}" alt=""> </a></div>
   </div>
<div class="empl2"><a href="https://www.esi-sba.dz/fr/wp-content/uploads/2022/02/Emploi_temps_2cpi2sem_2021_2022_definitif.pdf">Emploi du temps de la 2CPI</a>
<div class="pic3"><a href="https://www.esi-sba.dz/fr/wp-content/uploads/2022/02/Emploi_temps_2cpi2sem_2021_2022_definitif.pdf"><img src="{{asset('images/accuel/arrow-1.png')}}" alt=""> </a></div>
</div>
<a href="#top" class="scrollbtn"><img src="{{asset('images/dashboard/top.png')}}" alt=""></a>

</div>


    <div class="end" id="contacts">
      <div>
        <div class="nmbr">
          <a href="#">+213 48 749 452</a>
          <img src="{{asset('images/accuel/Mask group-4.png')}}" alt=""> 
        </div>
  
        <div class="msg">
          <a href="#">contact@esi-sba.dz</a>
          <img src="{{asset('images/accuel/Mask group-3.png')}}" alt="">
        </div>
        <div class="by">
          <div class="copy2">esiest copyright 2022 <img src="{{asset('images/accuel/copyright logo.png')}}" alt=""></div>
        </div>
      </div>
      <div>
        <div class="copyright"><a href="#">copyright</a></div>
        <div class="prv"><a href="#">Privacy Policy</a></div>
        <div class="terms"><a href="#">Terms of Use</a></div>
      </div>
      <div>
        <img src="{{asset('images/accuel/Mask group.png')}}" alt="">
        <img src="{{asset('images/accuel/Mask group-2.png')}}" alt="">
      </div>
      <div>
        <img src="{{asset('images/accuel/Mask group-1.png')}}" alt="">
        <img src="{{asset('images/accuel/Mask group-1.png')}}" alt="">
      </div>
      
    </div>
    

   <script src="{{asset('js/accuel.js')}}"></script>
</body>
</html>
