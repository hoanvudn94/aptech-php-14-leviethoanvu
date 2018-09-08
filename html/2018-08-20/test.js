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
// <div id="block123" style="display:block; height: 500px; width: 500px; background: rgb(247, 98, 98); ">qưeqweqwe</div>
//<button id="button" onclick="thayDoi()">Thaydoi</button>
//<script src="./test.js"></script>