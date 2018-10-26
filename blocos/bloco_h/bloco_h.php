<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
		<script src="../../js/jquery-3.2.0.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>
		<title>Bloco H</title>
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
        <img class="imagem" title="Unipam" alt="Unipam" src="../../imagens/logounipam.png">
    	<p>
    		<div align="center">
    			<form>
    				<a href="gaia.php"class="btn btn-primary btn-lg active" role="button">Laboratório Gaia</a>
    				<a href="urano.php"class="btn btn-primary btn-lg active" role="button">Laboratório Urano</a>
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