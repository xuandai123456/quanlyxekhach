
const input={
    userName:document.querySelectorAll(".info_client")[0],
    cmnd:document.querySelectorAll(".info_client")[1],
    date:document.querySelectorAll(".info_client")[2],
    phone:document.querySelectorAll(".info_client")[3],
    mail:document.querySelectorAll(".info_client")[4],
    password :document.querySelectorAll(".info_client")[5],
    password_cf:document.querySelectorAll(".info_client")[6]
}
const btn_confirm=document.querySelector(".btn_confirm")

function validate_form(lsit_input){
    let confirm_true=false;

    function show_error(input,text){
        input.style.border="1px solid red"
        let error=input.parentElement.querySelector(".errors")
        error.innerHTML=text;
        input.focus();
        confirm_true=false;
    }
    function show_succes(input){
        input.style.border="1px solid black"
        let error=input.parentElement.querySelector(".errors")
        error.innerHTML="";
        confirm_true=true;
    }

    function fill(input,text){
        let istrue=false;
        if(input.value==""){
            show_error(input,text);
        }else{
          istrue=  show_succes(input);
        }
        return istrue;
    }
    function phone(input,text){
        let istrue=false;
        let regex_phone=/(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
        if(!regex_phone.test(input.value)){
            show_error(input,text)
        }else{
           istrue= show_succes(input);
        }
        return istrue;
    }
    function mail(input,text){
        let istrue=true;
        var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if(!emailReg.test(input.value)){
            show_error(input,text)
        }else{
          istrue=  show_succes(input);
        }
        return istrue;
    }
    function block_error(input){
        input.addEventListener("click",e=>{
            show_succes(input);
        })
    }
    function confirm_password(input_1,input_2,text){
        if(input_2.value==input_1.value && input_2.value!=""){
            show_succes(input_2)
        }else{
            show_error(input_2,text)
        }
    }
    fill(lsit_input.userName,"Không được bỏ trống tên")
    fill(lsit_input.cmnd,"không được bỏ trống CMND")
    fill(lsit_input.date,"Không được bỏ trống ngày sinh")
    fill(lsit_input.password,"Không được bỏ trống mat khau")
    mail(lsit_input.mail,"sai định dạng mail")
    phone(lsit_input.phone,"Sai định dạng số điện thoại")
    confirm_password(input.password,input.password_cf,"Mật khẩu không trùng khớp")
    block_error(input.password)
    block_error(input.password_cf)
    block_error(lsit_input.userName)
    block_error(lsit_input.cmnd)
    block_error(lsit_input.date)
    block_error(lsit_input.mail)
    block_error(lsit_input.phone)
    return confirm_true;
}

btn_confirm.addEventListener("click",e=>{
    let confirm=validate_form(input);
    !confirm && 
    e.preventDefault()
  
})  