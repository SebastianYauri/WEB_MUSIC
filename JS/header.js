/*window.$ = $;
$(document).ready(function(){
	$(window).scroll(function(){
		if ( $(this).scrollTop() > 0 ) {
			$('header').addClass('header2');			
		}else{
			$('header').removeClass('header2');
		}
	});
});*/

$(document).ready(function(){
    $('.acercar').hover(function() {
        $(this).addClass('transicion');
    }, function() {
        $(this).removeClass('transicion');
    });
});


/*PAGINAS DE FACEBOOK INSTAGRAM Y TWITTER*/

function abrirventana(URL) {
	window.open(URL, "Nombre de la ventana", "width=600, height = 400, left = 100, top = 100");
}

/*ALERTA DE PAGINA DE INICIO*/

function alertaWin() {
  if (confirm("Desea ir a la pagina principal")) {
    window.location="../../Menu/Menu.php"
  } else {
    window.alert("Cancelaste la redirección");
  }
  document.getElementById("demo").innerHTML = txt;
}