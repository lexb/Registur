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

	</head>
	
	<body>
		<div class="reveal">
			<div >
					<div style="height: 120px; width:100%;">
						<img src="imagenes/cinta_bacalar.png" height="100%" width="100%">
					</div>
					<div align="center" style="width:100%;">
						<h1>RegisTur</h1>
						<h3>Módulo de información turística</h3>
					</div>
					<div align="center" id="google_translate_element"></div>
					<script>
						function googleTranslateElementInit() {
						 new google.translate.TranslateElement({
						 pageLanguage: 'es'
						 }, 'google_translate_element');
						}
					</script>
					<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					<button type="button" class="button" onclick="location='formulario.php'">
						<span class="glyphicon glyphicon-arrow-right"></span>
					</button>

				
							<!-- <input type="button" name="btn_guardar" value="GUARDAR" class="button4" OnClick="Guardar()"/> -->
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
 
    </script>

	</body>
</html>
