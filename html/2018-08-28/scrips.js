function loadData (){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
    if (request.readyState === 4 && request.status === 200){
        var data = JSON.parse(request.response);
        renderData(data);
      
        
    }
};
    request.open('GET','data.json',true);
    request.send();
}
function renderData(data){
    //var para = document.createElement('h1');
    //var node = document.createTextNode(data.name)
    //para.appendChild(node);
    //var elment = document.getElementById('js-paragraph');
    ///elment.appendChild(para);
    //var usersdemo = data.users;
  
    usersdemo.forEach(function(user,) {
      var para = document.createElement('p');
      var node = document.createTextNode(user.id);
      para.appendChild(node);
      var elementid = document.getElementById('js-paragraph');
      elementid.appendChild(para);
    
    //document.getElementById('js-paragraph').innerHTML = data.name;
}