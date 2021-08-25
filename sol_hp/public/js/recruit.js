window.onload = function(){
    // page
    fadeIn("#fade", 80, ()=>{
        console.log("done");
    });
    };
    function fadeIn(id,time,callback=null){
        const elem = document.querySelector(id)
        let i = 0.0;
    
        const timerid = setInterval(()=>{
            //opacty
            elem.style.opacity = i
            i += 0.1
    
            if(i>=1.0){
                clearInterval(timerid)
                if(typeof callback === "function"){
                    callback(elem)                
                }
            }
        },time)
    }