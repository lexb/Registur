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
    	
    	
		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="reveal" align="center">
			<div style="height: 120px; width:100%;">
				<img src="imagenes/cinta_bacalar.png" height="100%" width="100%">
			</div>
			<div class="contenedor">
			<div style="width:90%" align="left" >
			
        			<p>Hola Bacalar,</p>
			        Soy&nbsp;
			        <input class="textinput" id="nombre" value="" placeholder="Nombre" size="20">
			        y tengo&nbsp;
			        <input class="textinput" id="edad" value="" placeholder="Edad" size="7">
			        &nbsp;años.&nbsp;
			        <br>Me enteré de ti a través de&nbsp;
			        <select class="dropdown">
						<option value="amigo">Amigo</option>
						<option value="familiar">Familiar</option>
						<option value="tv">T.V.</option>
						<option value="internet">Internet</option>
						<option value="redessociales">Redes Sociales</option>
						<option value="revista">Revista</option>
			        </select>
			        &nbsp;y te visito con&nbsp;
			        <input class="textinput"  value="" placeholder="#" size="3">&nbsp;
			        <select class="dropdown">
			          	<option>Amigos</option>
			          	<option>Familiares</option>
			        </select>desde
			        <select class="dropdown" style="width:300px">
			          	<option value="AF">Afganistán</option>
						<option value="AL">Albania</option>
						<option value="DE">Alemania</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antártida</option>
						<option value="AG">Antigua y Barbuda</option>
						<option value="AN">Antillas Holandesas</option>
						<option value="SA">Arabia Saudí</option>
						<option value="DZ">Argelia</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
						<option value="AT">Austria</option>
						<option value="AZ">Azerbaiyán</option>
						<option value="BS">Bahamas</option>
						<option value="BH">Bahrein</option>
						<option value="BD">Bangladesh</option>
						<option value="BB">Barbados</option>
						<option value="BE">Bélgica</option>
						<option value="BZ">Belice</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermudas</option>
						<option value="BY">Bielorrusia</option>
						<option value="MM">Birmania</option>
						<option value="BO">Bolivia</option>
						<option value="BA">Bosnia y Herzegovina</option>
						<option value="BW">Botswana</option>
						<option value="BR">Brasil</option>
						<option value="BN">Brunei</option>
						<option value="BG">Bulgaria</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="BT">Bután</option>
						<option value="CV">Cabo Verde</option>
						<option value="KH">Camboya</option>
						<option value="CM">Camerún</option>
						<option value="CA">Canadá</option>
						<option value="TD">Chad</option>
						<option value="CL">Chile</option>
						<option value="CN">China</option>
						<option value="CY">Chipre</option>
						<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
						<option value="CO">Colombia</option>
						<option value="KM">Comores</option>
						<option value="CG">Congo</option>
						<option value="CD">Congo, República Democrática del</option>
						<option value="KR">Corea</option>
						<option value="KP">Corea del Norte</option>
						<option value="CI">Costa de Marfíl</option>
						<option value="CR">Costa Rica</option>
						<option value="HR">Croacia (Hrvatska)</option>
						<option value="CU">Cuba</option>
						<option value="DK">Dinamarca</option>
						<option value="DJ">Djibouti</option>
						<option value="DM">Dominica</option>
						<option value="EC">Ecuador</option>
						<option value="EG">Egipto</option>
						<option value="SV">El Salvador</option>
						<option value="AE">Emiratos Árabes Unidos</option>
						<option value="ER">Eritrea</option>
						<option value="SI">Eslovenia</option>
						<option value="ES">España</option>
						<option value="US">Estados Unidos</option>
						<option value="EE">Estonia</option>
						<option value="ET">Etiopía</option>
						<option value="FJ">Fiji</option>
						<option value="PH">Filipinas</option>
						<option value="FI">Finlandia</option>
						<option value="FR">Francia</option>
						<option value="GA">Gabón</option>
						<option value="GM">Gambia</option>
						<option value="GE">Georgia</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GD">Granada</option>
						<option value="GR">Grecia</option>
						<option value="GL">Groenlandia</option>
						<option value="GP">Guadalupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GY">Guayana</option>
						<option value="GF">Guayana Francesa</option>
						<option value="GN">Guinea</option>
						<option value="GQ">Guinea Ecuatorial</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="HT">Haití</option>
						<option value="HN">Honduras</option>
						<option value="HU">Hungría</option>
						<option value="IN">India</option>
						<option value="ID">Indonesia</option>
						<option value="IQ">Irak</option>
						<option value="IR">Irán</option>
						<option value="IE">Irlanda</option>
						<option value="BV">Isla Bouvet</option>
						<option value="CX">Isla de Christmas</option>
						<option value="IS">Islandia</option>
						<option value="KY">Islas Caimán</option>
						<option value="CK">Islas Cook</option>
						<option value="CC">Islas de Cocos o Keeling</option>
						<option value="FO">Islas Faroe</option>
						<option value="HM">Islas Heard y McDonald</option>
						<option value="FK">Islas Malvinas</option>
						<option value="MP">Islas Marianas del Norte</option>
						<option value="MH">Islas Marshall</option>
						<option value="UM">Islas menores de Estados Unidos</option>
						<option value="PW">Islas Palau</option>
						<option value="SB">Islas Salomón</option>
						<option value="SJ">Islas Svalbard y Jan Mayen</option>
						<option value="TK">Islas Tokelau</option>
						<option value="TC">Islas Turks y Caicos</option>
						<option value="VI">Islas Vírgenes (EEUU)</option>
						<option value="VG">Islas Vírgenes (Reino Unido)</option>
						<option value="WF">Islas Wallis y Futuna</option>
						<option value="IL">Israel</option>
						<option value="IT">Italia</option>
						<option value="JM">Jamaica</option>
						<option value="JP">Japón</option>
						<option value="JO">Jordania</option>
						<option value="KZ">Kazajistán</option>
						<option value="KE">Kenia</option>
						<option value="KG">Kirguizistán</option>
						<option value="KI">Kiribati</option>
						<option value="KW">Kuwait</option>
						<option value="LA">Laos</option>
						<option value="LS">Lesotho</option>
						<option value="LV">Letonia</option>
						<option value="LB">Líbano</option>
						<option value="LR">Liberia</option>
						<option value="LY">Libia</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lituania</option>
						<option value="LU">Luxemburgo</option>
						<option value="MK">Macedonia, Ex-República Yugoslava de</option>
						<option value="MG">Madagascar</option>
						<option value="MY">Malasia</option>
						<option value="MW">Malawi</option>
						<option value="MV">Maldivas</option>
						<option value="ML">Malí</option>
						<option value="MT">Malta</option>
						<option value="MA">Marruecos</option>
						<option value="MQ">Martinica</option>
						<option value="MU">Mauricio</option>
						<option value="MR">Mauritania</option>
						<option value="YT">Mayotte</option>
						<option value="MX">México</option>
						<option value="FM">Micronesia</option>
						<option value="MD">Moldavia</option>
						<option value="MC">Mónaco</option>
						<option value="MN">Mongolia</option>
						<option value="MS">Montserrat</option>
						<option value="MZ">Mozambique</option>
						<option value="NA">Namibia</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepal</option>
						<option value="NI">Nicaragua</option>
						<option value="NE">Níger</option>
						<option value="NG">Nigeria</option>
						<option value="NU">Niue</option>
						<option value="NF">Norfolk</option>
						<option value="NO">Noruega</option>
						<option value="NC">Nueva Caledonia</option>
						<option value="NZ">Nueva Zelanda</option>
						<option value="OM">Omán</option>
						<option value="NL">Países Bajos</option>
						<option value="PA">Panamá</option>
						<option value="PG">Papúa Nueva Guinea</option>
						<option value="PK">Paquistán</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Perú</option>
						<option value="PN">Pitcairn</option>
						<option value="PF">Polinesia Francesa</option>
						<option value="PL">Polonia</option>
						<option value="PT">Portugal</option>
						<option value="PR">Puerto Rico</option>
						<option value="QA">Qatar</option>
						<option value="UK">Reino Unido</option>
						<option value="CF">República Centroafricana</option>
						<option value="CZ">República Checa</option>
						<option value="ZA">República de Sudáfrica</option>
						<option value="DO">República Dominicana</option>
						<option value="SK">República Eslovaca</option>
						<option value="RE">Reunión</option>
						<option value="RW">Ruanda</option>
						<option value="RO">Rumania</option>
						<option value="RU">Rusia</option>
						<option value="EH">Sahara Occidental</option>
						<option value="KN">Saint Kitts y Nevis</option>
						<option value="WS">Samoa</option>
						<option value="AS">Samoa Americana</option>
						<option value="SM">San Marino</option>
						<option value="VC">San Vicente y Granadinas</option>
						<option value="SH">Santa Helena</option>
						<option value="LC">Santa Lucía</option>
						<option value="ST">Santo Tomé y Príncipe</option>
						<option value="SN">Senegal</option>
						<option value="SC">Seychelles</option>
						<option value="SL">Sierra Leona</option>
						<option value="SG">Singapur</option>
						<option value="SY">Siria</option>
						<option value="SO">Somalia</option>
						<option value="LK">Sri Lanka</option>
						<option value="PM">St Pierre y Miquelon</option>
						<option value="SZ">Suazilandia</option>
						<option value="SD">Sudán</option>
						<option value="SE">Suecia</option>
						<option value="CH">Suiza</option>
						<option value="SR">Surinam</option>
						<option value="TH">Tailandia</option>
						<option value="TW">Taiwán</option>
						<option value="TZ">Tanzania</option>
						<option value="TJ">Tayikistán</option>
						<option value="TF">Territorios franceses del Sur</option>
						<option value="TP">Timor Oriental</option>
						<option value="TG">Togo</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad y Tobago</option>
						<option value="TN">Túnez</option>
						<option value="TM">Turkmenistán</option>
						<option value="TR">Turquía</option>
						<option value="TV">Tuvalu</option>
						<option value="UA">Ucrania</option>
						<option value="UG">Uganda</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistán</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela</option>
						<option value="VN">Vietnam</option>
						<option value="YE">Yemen</option>
						<option value="YU">Yugoslavia</option>
						<option value="ZM">Zambia</option>
						<option value="ZW">Zimbabue</option>
			        </select>del
			        <input class="textinput" type="date" value=""  size="8">
			        al
			        <input class="textinput" type="date" value="" size="8">
			        <br>Me gustaría realizar&nbsp;
			        <select class="dropdown">
			          	<option>Camping</option>
			          	<option>Snorkeling</option>
			          	<option>Diving</option>
			          	<option>Kayaking</option>
			          	<option>Exploring</option>
			        </select>
			        &nbsp;y puedes enviarme más información mediante&nbsp;
			        <select class="dropdown">
			          	<option>Correo</option>
			          	<option>Twitter</option>
			          	<option>Facebook</option>
			        </select> 
			        <input class="textinput"  value="" placeholder="correo">
			</div>
			</div>
			<button type="button" class="button">
				<span class="glyphicon glyphicon-send"></span>
			</button>
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
