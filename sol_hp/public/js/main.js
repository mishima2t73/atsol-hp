console.log("main");
/*
$(document).ready(function(){
    $("#open_nav").on('click',function(){
        $("#rnav").toggleClass('show');
    })
})
*/
let $ham = document.getElementById("open_nav")
let $rnav = document.getElementById("rnav")
open_nav.addEventListener('click',function(){
    if (rnav.classList.contains('show')){
        rnav.classList.remove('show')
        rnav.classList.add('hid')
        open_nav.classList.remove('active')
        
        
    }else{
        rnav.classList.add('show')
        rnav.classList.remove('hid')
        open_nav.classList.add('active')
    }
}
)

$(window).scroll(function(){
    var top = $("open_nav").offset().top;
    var position = top - $(window).heigt(100);
    if($(window).scrollTop()>position){
        $ham.style.display= "";
    }else{
        $ham.style.display= "none";
    }
})