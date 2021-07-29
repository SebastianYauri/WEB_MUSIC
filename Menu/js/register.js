function registo(){
let nombre,apellido,correo,contrasena,rcontrasena;
nombre=document.registro.nombre.value;
apellido=document.registro.apellido.value;
correo=document.registro.correo.value;
contrasena=document.registro.contrasena.value;
rcontrasena=document.registro.rcontrasena.value;

if(contrasena==rcontrasena){
window.alert("se registro correctamente");}
else {
window.alert("las contrasena no coinsiden");}

}