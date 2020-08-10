/* --------------------------- 
   | JAVASCRIPT MASTER FILE  |
   ---------------------------
*/

// JQUERY SCRIPT

$(document).ready(function(){
    
    // SOME OF MY PROJECTS
    $('.main-section .owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    })
});

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

