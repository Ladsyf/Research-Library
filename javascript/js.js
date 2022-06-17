var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }w
}
function cont(){
document.getElementById('cont').style.display = 'none';
document.getElementById('con').style.display = 'block';
}

function back(){
document.getElementById('con').style.display = 'none';
document.getElementById('cont').style.display = 'block';
}
 
function qwe(){
document.getElementById('rt').style.display = 'none';
document.getElementById('rt1').style.display = 'block';
}

function asd(){
document.getElementById('rt1').style.display = 'none';
document.getElementById('rt').style.display = 'block';
}