/*INICIAR SESION*/
function sign1()
{
let correo,contrasena;
correo=document.formularioSIGN.correo.value;
contrasena=document.formularioSIGN.contrasena.value;

if(correo!=null && contrasena!=null){
window.alert("se esta comprobando en la base de datos si es correcta su contraseña");
else{ if (correo!=null && contrasena==null){
	window.alert("no se a colocado contraseña");
} else{if(correo==null && contrasena!=null){
	window.alert("no se a colocado el correo");
}else{
	window.alert("no a colocado su correo ni su contraseña")
}}}}
}


/*REGISTRARSE*/
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