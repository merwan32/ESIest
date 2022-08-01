<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rambla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/QA.css')}}">
    <title>QnA</title>
</head>
<body>
    <img src="{{asset('images/accuel/QA.png')}}" class="bg">
    @foreach($qna as $key =>$q)
    <div class="qa">
      <div class="question">
        <button onclick="affich(this.id)" id="{{$key}}">+</button>
        <div>{{$q->question}}</div>
        
      </div>
      <div class="answer">
        <div>{{$q->answer}}</div>
      </div>
    </div>
    @endforeach

    
</body>
<script>
    answrs = document.querySelectorAll(".qa");
    aff = false;
    function affich(id) {
        answrs.forEach((item, index) => {
            item.childNodes[3].style.display = "none";
            item.childNodes[1].childNodes[1].innerText = '+';
})
if (aff) {
      answrs[id].childNodes[3].style.display = "none";
      answrs[id].childNodes[1].childNodes[1].innerText = '+';
      aff = false;
} else {
      answrs[id].childNodes[3].style.display = "block";
      answrs[id].childNodes[1].childNodes[1].innerText = '-';
      aff = true;
}
      
}
</script>
</html>