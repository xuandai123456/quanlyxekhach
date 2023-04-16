let account=document.querySelector(".name_login")
let password=document.querySelector(".password_login")
const input_1=document.querySelector(".malichtrinh")
const input_2=document.querySelector(".sotoa")
const input_3=document.querySelector(".soghe")
$(".btn_login").click(function(){
    let link=`./client/login.php?account=${account.value}&password=${password.value}`
    this.href=link
    console.log(account,password)
    let url=this.href
    $(".error_login").load(url)
    return false
})
setInterval(()=>{
   const btn= document.querySelector(".login_success")
   if(btn){
    const a=document.createElement("a")
    if(input_1==null){
        a.href=`./index.php`;
    }else{
        a.href=`./thongtin.php?malichtrinh=${input_1.value}&sotoa=${input_2.value}&soghe=${input_3.value}`;
    }
    a.click();
   }
},100)