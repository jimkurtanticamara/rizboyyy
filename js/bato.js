var selectInput = document.getElementById("selector");
var imgHolder = document.getElementById("imgHolder");

function changepic(value) {

    if (value == "1") {
        imgHolder.src = "bato ni bato.jpg"
    } else if (value == "2") {
        imgHolder.src = "papel.jpg"
    } else if (value == "3"){
        imgHolder.src = "gunting.jpg"
}
}

function play(){
    var player = document.getElementById("imgHolder");
    var computer = document.getElementById("imgHolder2");
    var AI = document.getElementById("AI");
    var gibutang = selectInput.value;
    var nilagay = Math.floor(Math.random() * 3) + 1;

    if(nilagay == 1){
        computer.src = "bato ni bato.jpg"
    }else if(nilagay == 2){
        computer.src = "papel.jpg"  
    }else if(nilagay == 3){
        computer.src = "gunting.jpg"
    }

    if(nilagay == gibutang){
      AI.innerHTML += "<h2>tie</h2>";
    }
    else if((gibutang == 1 && nilagay== 3) || (gibutang == 2 && nilagay == 1) || (gibutang == 3 && nilagay == 2)){
        AI.innerHTML += "<h2>daog</h2>";
    }
    else{
        AI.innerHTML += "<h2>lose</h2>";
    }
}

