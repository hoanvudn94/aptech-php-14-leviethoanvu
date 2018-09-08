var hien = true ;
hien =! hien;
function thayDoi(){
    var hien = document.getElementById("block123");
  
    
    if (hien == false){
        hien.style.display ='block';
      console.log('1');
    } else   {
        hien.style.display ='none';
        console.log('2');
    }
}
