var mymode=document.getElementById("g");

function change(){
    var name = mymode.children[1].value;
    var age = mymode.children[2].value;
    var birthday= mymode.children[3].value;
    
    var output="Pangalan nako kay" + name + "Ako ay" + age + "Ilan taon, Pinanganak ako" + birthday + "."
    document.getElementById("m").innerText = output;
}

function hider(){
    var nodestyle = mynode2.style.display;

}
