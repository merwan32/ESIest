var  slideicon = document.querySelectorAll('.pr div');
var  teachers = document.querySelector('.p');
var  left = document.querySelector('.logoo1');
var  right = document.querySelector('.logoo7');
let currentSlide = 1 ;
function func(x){
 slideicon.forEach((icon) => {
     icon.classList.remove('act');
 });
 slideicon[x].classList.add('act');
 teachers.style.marginLeft= -x+"00vw";
}

slideicon.forEach((btn , i) => {
    btn.addEventListener('click',() => {
        currentSlide = i+1;
         func(i);
    })
});

left.addEventListener('click',() => {
    currentSlide--;
    if (currentSlide ==0) {
        currentSlide = 4;
    }
    func(currentSlide - 1);
})
right.addEventListener('click',() => {
    currentSlide++;
    if (currentSlide ==5) {
        currentSlide = 1;
    }
    func(currentSlide - 1);
})

setInterval(function()  {
    func(currentSlide - 1);
    currentSlide++;
    if (currentSlide ==5) {
        currentSlide = 1;
    }
}, 10000);

scrollBtn = document.querySelector('.scrollbtn');


window.addEventListener("scroll",()=>{
    if (window.pageYOffset > 100) {
     scrollBtn.style.opacity ="1";
    } else {
     scrollBtn.style.opacity ="0"; 
    }
 });
 
 var prevScrollpos = window.pageYOffset;
 window.onscroll = function() {
   
   if (window.pageYOffset > 100) {
    document.querySelector("nav").style.position="fixed";
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
     document.querySelector("nav").style.top = "0";
     } else {
     document.querySelector("nav").style.top = "-64px";
     }
    prevScrollpos = currentScrollPos;
   }else{
    document.querySelector("nav").style.position="relative";
   }
}