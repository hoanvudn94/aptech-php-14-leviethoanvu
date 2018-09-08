var tat = false;
function thayDoi(){
    var light = document.getElementById("myImage");
    tat = !tat;
    
    if (tat == true){
        light.src="https://www.w3schools.com/js/pic_bulbon.gif";
        console.log('dung roi')
       
    } else   {
        light.src='https://www.w3schools.com/js/pic_bulboff.gif';
        console.log('sai roi')
      
       
    }
    
    
    
    
}
    