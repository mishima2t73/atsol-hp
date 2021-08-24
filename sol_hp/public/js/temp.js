const sliderImages = document.querySelectorAll('.image');
const arrowRight = document.getElementById('arrow-right');
const arrowLeft = document.getElementById('arrow-left');


console.log(sliderImages);
let current = 0;
function startSlide(){
    sliderImages[0].style.display = 'block';
}
arrowRight.addEventListener('click',function(){
    //document.getElementById().className = "fadein";
    // フェードイン
    //document.getElementById("idshow2").className = "fadeout";
    sliderImages[current].style.display = "none";

    if(current === sliderImages.length - 1){
        current =-1;
    }
    sliderImages[current + 1].style.display = "block";
    current++;
    
})
arrowLeft.addEventListener('click',function(){
    sliderImages[current].style.display = "none";

    if(current === 0){
        current = sliderImages.length;
    }
    sliderImages[current - 1].style.display = "block";
    current--;
})

startSlide();
