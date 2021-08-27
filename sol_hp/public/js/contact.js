let submit = document.getElementById('confirm');

function clickBtn2() {
    const p2 = document.getElementById("p2");
    const p3 = document.getElementById("p3");
    const error_messaged = document.getElementById('err-msg-name');
    
    if (p2.textContent === "赤") {
      p2.textContent = "青";
      p3.style.visibility = "hidden"; //非表示
      error_messaged.textContent = "blue";
    } else {
      p2.textContent = "赤";
      p3.style.visibility = "visible"; //表示
    }
  }
function clickBtn1(form){
    const error = document.getElementById('err-msg-name');
    const error_message = document.getElementById('err-msg');
    const name = document.contact.name.value;
    const address = document.contact.address.value;
    const email = document.contact.email.value;
    const content = document.contact.content.value;
    let error_array = [];

    if(!name){
        error_array.push("会社名/ご氏名が入力されていません。");
        //console.log(error_array);
    }
    if(!address){
        error_array.push("住所が入力されていません。");
    }
    if(!email){
        error_array.push("メールアドレスが入力されていません。");
    }
    else{
        const Seiki=/[!#-9A-~]+@+[a-z0-9]+.+[^.]$/i;
            if(!email.match(Seiki)){
                error_array.push("メールアドレスの形式が不正です。");
            }
        }
    if(!content){
        error_array.push("内容が入力されていません。");
    }
    if(!error_array.length){
        console.log("ok");
        form.submit();
        return true;    
    }
    error.classList.add('alert-danger');
    error_message.textContent = error_array;
    window.scrollTo(0, 0);
    return false;
    //error_message.textContent = "入力内容を確認してください";
}


function test(){
    const error_messaged = document.getElementById('err-msg-name');
    const error_message = document.getElementById('err_msg');
    console.log(error_messaged);
    console.log(error_message);
    error_messaged.classList.remove('d-none');
    error_message.textContent='henko';
    console.log(error_messaged);
    console.log(error_message);
}
function confirm(){
    const error_messaged = document.getElementById('err-msg-name');
    const error_message = document.getElementById('err_msg');
    console.log(error_messaged);
    console.log(error_message);
    const name = document.contact.name.value;
    const address = document.contact.address.value;
    const email = document.contact.email.value;
    const content = document.contact.content.value;
    
    //let error_array = new Array();
    let error_array = [];

    if(!name){
        error_array.push("会社名/ご氏名が入力されていません。<br>");
        //console.log(error_array);
    }
    if(!address){
        error_array.push("住所が入力されていません。");
    }
    if(!email){
        error_array.push("メールアドレスが入力されていません。");
    }
    else{
        const Seiki=/[!#-9A-~]+@+[a-z0-9]+.+[^.]$/i;
            if(!str.match(Seiki)){
                error_array.push("メールアドレスの形式が不正です。");
            }
        }
    if(!content){
        error_array.push("内容が入力されていません。");
    }
        //error_message.textContent =error_array;
    //error_message.textContent ="入力内容を確認";
    console.log(error_message);
    if(error_message){
        console.log(error_array);
        console.log(error_message);
        error_message.classList.remove('d-none');
        error_message.textContent ="入力内容を確認";
        console.log("エラーがあります danger");
        return false;
    }
        return true;
    
    //alert(error_array);

}

