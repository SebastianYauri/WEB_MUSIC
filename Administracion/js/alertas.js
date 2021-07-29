function sign1()
{
	let nombre=document.getElementById("nombre").value;
	let correo=document.getElementById("correo").value;
	let contrasena=document.getElementById("contrasena").value;
	let rcontrasena=document.getElementById("rcontrasena").value;

	if(nombre==null || correo==null || contrasena==null || rcontrasena==null){
		window.alert("Los casilleros no puedes estar en blanco");
	if(contrasena != rcontrasena)
		window.alert("Las contraseñas no coinsiden");
}
}