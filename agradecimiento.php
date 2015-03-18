<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>RegisTur</title>

		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<script type="text/javascript" src="js/funciones.js"></script>
		

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/default.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="lib/css/estilos.css">

		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" media="all" rel="stylesheet">
    	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" rel="stylesheet">
    	
		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div >
			
		
				<section>
				<div style="height: 115px; width:100%;">
						<img src="imagenes/cinta_bacalar.png" height="115px" width="100%">
					</div>
					<h1>¡GRACIAS POR VISITAR BACALAR!</h1>
					<h3>DISFRUTE SU ESTANCIA</h3>
					<div style="margin: 50px">
							<!-- <input type="button" name="btn_guardar" value="GUARDAR" class="button4" OnClick="Guardar()"/> -->
					</div>
				</section>

			</div>

		</div>
    <script src="js/jquery-1.10.2.min.js"></script>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/none

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }
					
				]
			});
			Reveal.addEventListener('slidechanged', function(event){
				
				if(event.indexh==2){
					
					if( Validar_Contenido($("#nombre").val(), /^[a-zñáéíóú][a-zñáéíóú\s]*$/i, "Nombre") == false ) {
						$("#nombre").focus();
						Reveal.slide(event.indexh-1);
					}

 					else if( Validar_Contenido($("#apellidos").val(), /^[a-zñáéíóú][a-zñáéíóú\s]*$/i, "Apellido") == false ) {
						$("#apellidos").focus();
						Reveal.slide(event.indexh-1);
					}
					else if( Validar_Contenido($("#edad").val(), /^[0-9]{2}$/, "Edad") == false ) {
						$("#edad").focus();
						Reveal.slide(event.indexh-1);
					}
				
					else if( Validar_Contenido($("#pais").val(), /^[a-zñáéíóú][a-zñáéíóú\s]*$/i, "Pais") == false ) {
						$("#pais").focus();
						Reveal.slide(event.indexh-1);
					}
					else if( Validar_Contenido($("#dias").val(), /^[0-9]{1,2}$/, "Dias de estancia") == false ) {
						$("#dias").focus();
						Reveal.slide(event.indexh-1);
					}
					
				}

				if(event.indexh==3){					
					if( Validar_Contenido($("#adultos").val(), /^[0-9]{1,3}$/, "Adultos") == false ) {
						$("#adultos").focus();
						Reveal.slide(event.indexh-1);
					}
					else if( Validar_Contenido($("#ninios").val(), /^[0-9]{1,3}$/, "Niños") == false ) {
						$("#ninios").focus();
						Reveal.slide(event.indexh-1);
					}
					else if( Validar_Contenido($("#email").val(), /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$/, "E-mail") == false ) {
						$("#email").focus();
						Reveal.slide(event.indexh-1);
					}
					else if(document.getElementById('twitter').value!=''){
						if(Validar_Contenido($("#twitter").val(), /^\@[A-Za-z0-9_]{1,32}$/, "Twitter") == false){
							$("#twitter").focus();
							Reveal.slide(event.indexh-1);}
					}
					
				}
			
				if(event.indexh==4){	
					if( Validar_Seleccion($("#motivo").val(), "Motivo de su visita") == false ) {
						$("#motivo").focus();
						Reveal.slide(event.indexh-1);
					}				
					else if( Validar_Seleccion($("#difusion").val(), "Difusión") == false ) {
						$("#difusion").focus();
						Reveal.slide(event.indexh-1);
					}
					else if(!document.getElementById('1').checked && !document.getElementById('2').checked && !document.getElementById('3').checked && !document.getElementById('4').checked
						&& !document.getElementById('5').checked &&!document.getElementById('6').checked && !document.getElementById('7').checked &&!document.getElementById('8').checked
						&& !document.getElementById('9').checked &&!document.getElementById('10').checked && !document.getElementById('11').checked &&!document.getElementById('12').checked){
							alert('No ha seleccionado ninguna Actividad a realizar');
							Reveal.slide(event.indexh-1);
					}

				}
				
			});

		</script>


		<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/js/bootstrap.min.js"></script>

	    <script src="js/jquery.backstretch.min.js"></script>

		<script type="text/javascript">
		$(function(){
            var imagenes = [
                "imagenes/imagen1.jpg"
                , "imagenes/imagen2.jpg"
                , "imagenes/imagen3.jpg"
                , "imagenes/imagen4.jpg"
                , "imagenes/imagen5.jpg"
            ];
 
            // Precarga de todas la imagenes
            $(imagenes).each(function(){
                $("<img/>")[0].src = this; 
            });
 
            // Almacena cual imagen esta activa
            var index = 0;
 
            // Aplicamos la primera imagen del arreglo 
            // y lo configuramos para que realice un efecto de transición (fadeIn) 
            // de 500 milisegundos entre cada cambio imagen
            $.backstretch(imagenes[index], {speed: 2000});
 
            // setInterval es una funcion que se repite determinado tiempo
            // en este caso cada 5000 milisegundos incrementando el index
            // y aplicando una nueva imagen
            setInterval(function() {
                index = (index >= imagenes.length - 1) ? 0 : index + 1;
                $.backstretch(imagenes[index]);
            }, 7000);
        });
 	
		var pagina="index.php"
		function Guardar() 
		{
			$.post("alta.php",
			{
			nombre:$("#nombre").val(),
			apellidos:$("#apellidos").val(),
			edad:$("#edad").val(),
			estado:$("#estado").val(),
			pais:$("#pais").val(),
			dias:$("#dias").val(),
			adultos:$("#adultos").val(),
			ninios:$("#ninios").val(),
			email:$("#email").val(),
			twitter:$("#twitter").val(),
			facebook:$("#facebook").val(),
			difusion:$("#difusion").val(),
			actividades:$("#actividades").val(),
			comentarios:$("#comentarios").val(),
			},
			function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			});
			location.href=pagina
		} 

    </script>
    <script src="js/handlebars.js"></script>
    <script src="js/typeahead.bundle.js"></script>
    <script src="js/paises.js"></script>

	</body>
</html>
