/* --------------------------- 
   | JAVASCRIPT MASTER FILE  |
   ---------------------------
*/

/*  
    ---------------------------------------------------------------------- 
    | SAVE THE THEME VALUE IN LOCAL STORAGE                              |
    | SO, THAT WHEN THE USER REFRESH THE PAGE THE SET COLOR              |
    | WILL RESTORE AGAIN AND NOT GONNA RETURN TO DEFAULT('LIGHT') THEME  |
    | I'LL USE THE LOCAL STORAGE TO SAVE INFORMATION IN THE BROWSER      |
    | INSPECT ELEMENT > APPLICATION > LOCAL STORAGE                      |
    ----------------------------------------------------------------------
*/
let theme = localStorage.getItem('theme')

/* 
   -----------------------------------------------
   | ON THE FIRST LOAD WE SET THE THEME TO LIGHT |
   -----------------------------------------------
*/
if (theme == null){
    setTheme('light')
} else {
    setTheme(theme)
}

let themeDots = document.getElementsByClassName('dot-theme')

for (var i=0; themeDots.length > i; i++){
    themeDots[i].addEventListener('click', function(){
        let mode = this.dataset.mode
        console.log('Option clicked:', mode)
        setTheme(mode)
    })
}

/* 
   --------------------------------------------------------------------
   | GRAB THE LINK ID (theme-style) IN index.html                     |
   | AND SET THE HREF PROPERTY TO WHATEVER THE MODE BEING SELECTED    |
   -------------------------------------------------------------------- 
*/
function setTheme(mode){
    if(mode == 'light'){
        document.getElementById('theme-style').href = 'css/index.css'
    }
    if(mode == 'blue'){
        document.getElementById('theme-style').href = 'css/blue.css'
    }
    if(mode == 'green'){
        document.getElementById('theme-style').href = 'css/army.css'
    }
    if(mode == 'purple'){
        document.getElementById('theme-style').href = 'css/purple.css'
    }
    localStorage.setItem('theme', mode)
}

/* 
   --------------------------------------------------------------------------
   | BOEBOT CAMPUS DIRECTORY PAGE SLIDING IMAGES AS OVERVIEW OF THE PROJECT |
   --------------------------------------------------------------------------
*/
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

/* 
   ---------------------------------------------
   | BOEBOT CAMPUS DIRECTORY READ MORE FUNCTION|
   ---------------------------------------------
*/

function moreFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var readmorebtn = document.getElementById("readmore-btn");

    if (dots.style.display === "none"){
        dots.style.display = "inline";
        readmorebtn.innerHTML = "read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        readmorebtn.innerHTML = "read less";
        moreText.style.display = "inline";
    }
}