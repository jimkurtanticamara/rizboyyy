var selectInput = document.getElementById("selector");
var imageHolder = document.getElementById("imgHolder");

function changepicMeth(value){
     
    if(value=="1"){
        imageHolder.src ="ML.png"
    }else if(value == "2"){
        imageHolder.src = "https://mediaproxy.tvtropes.org/width/1200/https://static.tvtropes.org/pmwiki/pub/images/valo2.png"
    }
}   