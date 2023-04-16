const btn_get=document.querySelector(".btn_get_info")

btn_get.addEventListener("click",e=>{
    const sotoa=document.querySelector("#sotoa").value
    const soghe=document.querySelector("#startPoint").value
    btn_get.href=`index?page=login&malichtrinh=1&sotoa=${sotoa}&soghe=${soghe}`
})