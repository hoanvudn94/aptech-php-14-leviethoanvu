var tat = false;
function thayDoi(){
    var light = document.getElementById("myImage");
    tat = !tat;
    
    if (tat == false){
        light.src="./pic_bulboff.gif";
       
    } else   {
        light.src='./pic_bulbon.gif';
       
    }
    
    console.log(light.src, tat)
}
