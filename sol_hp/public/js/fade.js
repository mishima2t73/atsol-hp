//fadeIn("#tr",250,()=>{
//    handler();
//});
function fadeIn()
const FADEIN_ELEM=document.getElementById('tr');
window.addEventListener('scroll',()=>{
    const FADEIN_ELEM_TOP=FADEIN_ELEM.getBoundingClientRect().top;
    const WINDOW_HEIGHT=window.innerHeight;
    if(WINDOW_HEIGHT>(FADEIN_ELEM_TOP+200)){
        FADEIN_ELEM.classList.add('fadein-after');
        }else{
            FADEIN_ELEM.classList.remove('fadein-after');
        }
});