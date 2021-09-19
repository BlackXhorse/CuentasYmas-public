function abrir() {
    document.getElementById("sobre").style.display = "block";
    document.getElementById("body").style.display = "none";
}

function cerrar() {
    document.getElementById("sobre").style.display = "none";
    document.getElementById("body").style.display = "block";
}

function login() {
    document.getElementById("login").style.display = "block";
    document.getElementById("cheteo1c").style.top = "-635px";
    document.getElementById("gtav").style.top = "-435px"

}

function loginot() {
    document.getElementById("login").style.display = "none";
    document.getElementById("cheteo1c").style.top = "-706.5px";
    document.getElementById("gtav").style.top = "-500px";
}
function cuentanueva() {
    document.getElementById("cuentanuevainfo").style.display = "block";
    document.getElementById("cuentanueva").style.maxWidth = "75%";
    document.getElementById("bottom").style.display = "none";
    document.getElementById("cuentaschetadas").style.display = "none";

}

function nuevainfocerrar() {
    document.getElementById("cuentanuevainfo").style.display = "none";
    document.getElementById("cuentanueva").style.maxWidth = "32%";
    document.getElementById("bottom").style.display = "block";
    document.getElementById("cuentaschetadas").style.display = "block";
    document.getElementById("cuentanuevainfo").style.transition = "1s";
}
function chetada(){
    document.getElementById("chetadainfo").style.display = "block";
    document.getElementById("cuentaschetadas").style.maxWidth = "65%";
    document.getElementById("cuentanueva").style.display = "none";
    document.getElementById("cuentaschetadas").style.top = "100px";
    document.getElementById("cuentaschetadas").style.left = "15%";
    document.getElementById("bottomc").style.display = "none";
}
function chetadacerrar(){
    document.getElementById("chetadainfo").style.display ="none";
    document.getElementById("cuentaschetadas").style.transition = "1s";
    document.getElementById("chetadainfo").style.transition = "1s";
    document.getElementById("cuentaschetadas").style.maxWidth = "32.2%";
    document.getElementById("cuentanueva").style.display = "block";
    document.getElementById("cuentaschetadas").style.top = "-150px";
    document.getElementById("cuentaschetadas").style.left = "60%";
    document.getElementById("cuentanueva").style.display = "block";
    document.getElementById("bottomc").style.display = "block";
}
