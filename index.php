<!DOCTYPE html>
<html>
	<head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
		<script src="js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Página Inicial</title>
	</head>
	<body>				
		<br>	
		<div class="relogio" align="center">
			<SPAN ID="Clock">00:00:00</SPAN>
			<SCRIPT LANGUAGE="JavaScript">
	  			var Elem = document.getElementById("Clock");
	  			function Horario(){ 
	    		var Hoje = new Date(); 
	    		var Horas = Hoje.getHours(); 
	   			 if(Horas < 10){ 
	     		 Horas = "0"+Horas; 
	   			 } 
	    		var Minutos = Hoje.getMinutes(); 
	   			 if(Minutos < 10){ 
	    		  Minutos = "0"+Minutos; 
	   			 } 
	    		var Segundos = Hoje.getSeconds(); 
	   			 if(Segundos < 10){ 
	     		 Segundos = "0"+Segundos; 
	   			 } 
	    		Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
	    		} 
	    		window.setInterval("Horario()",1000);
			</SCRIPT>
		</div>
		<br>
		<div class="mensagem">
			<div align="center">
				<?php
					function datahora()
					{
					date_default_timezone_set('America/Sao_Paulo');
					$hr = date(" H:i:s ");
					if($hr >= 12 && $hr<18) {
					$resp = '<font size=5><font color=white><i> Centro Universitário de Patos de Minas - Boa tarde!</i>';}
					else if ($hr >= 0 && $hr <12 ){
					$resp = '<font size=5><font color=white><i> Centro Universitário de Patos de Minas - Bom dia!</i>';}
					else {
					$resp = '<font size=5><font color=white><i> Centro Universitário de Patos de Minas - Boa noite!</i>';}
					echo "$resp";
					echo date(" d/m/y"); 
					}	
					datahora ();
				?>
			</div>
		</div>
		<img class="imagem" title="Unipam" alt="Unipam" src="imagens/logounipam.png">
			<p>
				<div align="center">
					<form>
						<a href="blocos/blocos.php" class="btn btn-primary btn-lg active" role="button">Localizar Laboratórios</a>
						<br><br>
						<a href="aula.php" class="btn btn-primary btn-lg active" role="button">Em Aula!</a>
						<br><br>
						<a href="disponiveis.php" class="btn btn-primary btn-lg active" role="button">Disponíveis Agora!</a>
					</form>	
				</div>
			</p>
		<section>
	      	<div class="rodape">
	      		<div class="container">
		        	<div class="col-md-12">
		        		<div class="contato">
		        			<ul style="list-style-type:none">
						  		<li>Rua Major Gote, 1000</li>
						  		<li>Centro, Patos de Minas - MG</li>
						  		<li>(34) 3823-0300</li>
							</ul>
		      			</div>
		        	</div>
	      		</div>
	      	</div>
	    </section>
	    <section>
	      	<div class="rodape2">
	      		<div class="container">
	      			<ul style="list-style-type:none">
	      				<li>Copyright© 2017</li>
	      			</ul>
	      		</div>
	     	</div>
	    </section>
	</body>
</html>