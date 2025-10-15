var email_inp = document.getElementById("email");
var pass_inp = document.getElementById("password");

var username = "franco@gmail.com";
var password = "franco123";

 function loginFunction(){
    var getamail = email_inp.value;
    var getpass = pass_inp.value;

    if(getamail == username && getpass == password){
        window.location.href = "activitycard.html";
    }else{
        alert("Account Incorrect");
        email_inp.style="border-color: red; color: red";
        pass_inp.style="border-color: red; color: red";
    }

 }