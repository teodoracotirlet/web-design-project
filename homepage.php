<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

   


</head>
<body>
  

    <div class = "baraprincipala">

    <div class = "logo">
        <img src= "imaginihomepage/logo.png" width="25%">

    </div>
    
    <div class = "linkuriprincipale">
        
        <a href= "photographysite.php" class = "homebutton" >Home</a>
        <a href= "gallery.php" class = "gallerybutton" >Gallery</a>
        <a href= "account.php" class = "accountbutton" >Account</a>
        <a href= "shop.php" class = "shopbutton" >Shop</a>
        <a href= "about.php" class = "aboutbutton" >About</a>

    </div>

    </div>
    
    <div class="slideshow-container">



<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="imgcarusel/brasovcraciun.jpeg" style="width:100%">
  <div class="text">Brasov</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="imgcarusel/slanicmoldova1.jpeg" style="width:100%">
  <div class="text">Slanic Moldova</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="imgcarusel/slanicmoldova2.jpeg" style="width:100%">
  <div class="text">Slanic Moldova</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="imgcarusel/slanicmoldova3.jpeg" style="width:100%">
  <div class="text">Slanic Moldova</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>


</div>







</body>
</html>
