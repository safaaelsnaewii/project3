let btn=document.getElementById("btn");
window.onscroll=function(){
if(scrollY>=100){

btn.style.display="block";

}else{
btn.style.display="non";
}

}
btn.onclick=function(){
    scroll(
{left:0,
    top:0,
    behavior:"smooth"
}

    )


}