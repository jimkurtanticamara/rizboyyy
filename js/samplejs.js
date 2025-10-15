var mynode= document.querySelector("#changingcolors");

function turnColor (){
    var turnColor= mynode.children[1].value;
    mynode.children[0].style.color=turnColor;
    

}