<!DOCTYPE html>
<html>
<head>
	<title>Colima</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="shortcut icon" href="../imagenes/icono.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estados.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<script type="text/javascript">

		var cal = 0;
		var uno = 1;

		function ocultar(){
			document.getElementById("ocu").style.display="none";
			document.getElementById("exa").style.display="block"
		}
		function ocultar2(){
			document.getElementById("exa").style.display="none";
			document.getElementById("resul").style.display="block";
		}
		function mostrar(){
			location.reload();
		}
		function ocultar3(){
			document.getElementById("resul").style.display="none";
			location.reload();
		}
		function rojo(){
				document.getElementById("pres").style.background="red";
				document.getElementById("2").style.background="green";
				document.getElementById("1").onclick="";
				document.getElementById("2").onclick="";
		}
		function verde(){
				document.getElementById("pres").style.background="green";
				cal++;
		}
		function rojo1(){
				document.getElementById("press").style.background="red";
				document.getElementById("22").style.background="green";
				document.getElementById("11").onclick="";
				document.getElementById("22").onclick="";
		}
		function verde1(){
				document.getElementById("press").style.background="green";
				cal++;
		}
		function rojo2(){
				document.getElementById("presss").style.background="red";
				document.getElementById("222").style.background="green";
				document.getElementById("111").onclick="";
				document.getElementById("222").onclick="";
		}
		function verde2(){
				document.getElementById("presss").style.background="green";
				cal++;
		}
		function rojo3(){
				document.getElementById("pressss").style.background="red";
				document.getElementById("2222").style.background="green";
				document.getElementById("1111").onclick="";
				document.getElementById("2222").onclick="";
		}
		function verde3(){
				document.getElementById("presssss").style.background="green";
				cal++;
		}
		function rojo4(){
				document.getElementById("pressssss").style.background="red";
				document.getElementById("22222").style.background="green";
				document.getElementById("11111").onclick="";
				document.getElementById("22222").onclick="";
		}
		function verde4(){
				document.getElementById("pressssss").style.background="green";
				cal++;
		}

</script>

<body>

<header>
    <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../estados.html">Estados</a></li>
    </ul>
</header>

<center><div class="con" id="ocu">
	<h1>Colima</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7731909.068680628!2d-113.6191726316098!3d18.871715566641868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8425320dfe7025eb%3A0x2c1e40971f57690a!2sColima!5e0!3m2!1ses!2smx!4v1520527899457" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<p>
		Colima es uno de los treinta y un estados que, junto con la Ciudad de México, forman los Estados Unidos Mexicanos. Su capital y ciudad más poblada es Colima.<br><br>
		Está ubicado en la región oeste del país, limitando al norte con Jalisco, al sur con Michoacán y al oeste con el océano Pacífico. Con 711,235 habitantes en 2015, es el estado menos poblado, con 5,627 km², el cuarto menos extenso —por delante de Aguascalientes, Morelos y Tlaxcala, el menos extenso— y con 115.65 hab / km², el noveno más densamente poblado, por detrás del Estado de México, Morelos, Tlaxcala, Aguascalientes, Guanajuato, Puebla, Querétaro e Hidalgo. Fue fundado el 9 de diciembre de 1856.<br><br>
		Políticamente se divide en 10 municipios. Su capital recibe el mismo nombre: Colima. Otras localidades importantes son Manzanillo, Tecomán, Armería, Comala, Villa de Álvarez, Cuauhtémoc, Ixtlahuacán, Coquimatlán y Minatitlán.
	</p>
	<input type="button" value="Tomar Examen" class="boton" id="bo" onclick="ocultar()">
</div></center>

<center><div class="examen" id="exa" style="display: none;">
	<div class="pre" id="pres">
		<p class="pregunta">1.- ¿Cual Es La Capital De Colima?</p>
		<p class="re" id="1" onclick="rojo()">Manzanillo</p>
		<p class="re" id="1" onclick="rojo()">Armeria</p>
		<p class="re" id="2" onclick="verde()">Colima</p>
		<p class="re" id="1" onclick="rojo()">Minatitlan</p>
	</div>

	<div class="pre" id="press">
		<p class="pregunta">2.- ¿Cuantos Municipios Tiene Colima?</p>
		<p class="re" id="22" onclick="verde1()">10</p>
		<p class="re" id="11" onclick="rojo1()">5</p>
		<p class="re" id="11" onclick="rojo1()">20</p>
		<p class="re" id="11" onclick="rojo1()">8</p>
	</div>

	<div class="pre" id="presss">
		<p class="pregunta">3.- ¿Cuantos Habitantes Hay En Colima?</p>
		<p class="re" id="111" onclick="rojo2()">805,063</p>
		<p class="re" id="111" onclick="rojo2()">1,118,545</p>
		<p class="re" id="222" onclick="verde2()">711,235</p>
		<p class="re" id="111" onclick="rojo2()">711,254</p>
	</div>

	<div class="pre" id="pressss">
		<p class="pregunta">4.- ¿Estado conlindante al norte?</p>
		<p class="re" id="1111" onclick="rojo3()">Michoacan</p>
		<p class="re" id="1111" onclick="rojo3()">Chihuahua</p>
		<p class="re" id="1111" onclick="rojo3()">Guanajuato</p>
		<p class="re" id="2222" onclick="verde3()">Jalisco</p>
	</div>

	<div class="pre" id="pressssss">
		<p class="pregunta">5.- ¿Estado conlindante al sur?</p>
		<p class="re" id="11111" onclick="rojo4()">Michoacan</p>
		<p class="re" id="22222" onclick="verde4()">Jalisco</p>
		<p class="re" id="11111" onclick="rojo4()">Chihuahua</p>
		<p class="re" id="11111" onclick="rojo4()">Guanajuato</p>
	</div>

	<input type="button" value="Resultado" class="boton" id="bo" onclick="ocultar2()">
	<input type="button" value="Cancelar" class="boton" id="bo" onclick="mostrar()">

</div></center>

<center><div class="resultado" id="resul" style="display: none;">
	<h1>Calificación</h1>
	<p class="g">Tu Calificación Es <script>document.write(cal)</script>/5</p>
	<script>
		if (cal==0){
			document.write('<iframe src="https://giphy.com/embed/3o6wrvdHFbwBrUFenu" width="480" height="319" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>');
		}else if (cal==5) {
			document.write('<iframe src="https://giphy.com/embed/NXp9HM6YeuS0U" width="480" height="319" frameBorder="0" class="giphy-embed gif" allowFullScreen></iframe>');
		}else if (cal==4) {
			document.write('<iframe src="https://giphy.com/embed/10spcFioEOY7zG" width="480" height="319" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>')
		}else if (cal==3) {
			document.write('<iframe src="https://giphy.com/embed/DfdbTJZx6Yjra" width="480" height="319" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>')
		}else if (cal==2) {
			document.write('<iframe src="https://giphy.com/embed/TseBjMu53JgWc" width="473" height="319" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>')
		}else if (cal==1) {
			document.write('<iframe src="https://giphy.com/embed/ZebTmyvw85gnm" width="480" height="319" frameBorder="0" class="giphy-embed gif" allowFullScreen></iframe>')
		}
	</script>

	<input type="button" value="Volver" class="boton" id="bo" onclick="ocultar3()">

</div></center>


</body>
</html>