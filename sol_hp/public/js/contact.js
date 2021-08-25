window.addEventListener('DOMcontentLoaded',()=>{
    const submit = document.querySelector('.confirm');
    submit.addEventListener('click',(e) =>{},false);
    console.log(submit);
    //check
    const name = document.querySelector('#name');
    console.log(name);
    //error 
    const errMsgname = document.querySelectorA(".err-msg-name");

    if(!name.value){
        errMsgname.classList.remove("d-none");
        errMsgname.textContent("会社名・名前が入力されていません。");
        return;
    }

})