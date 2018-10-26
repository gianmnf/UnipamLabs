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
		<title>Em Aula!</title>
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
        <img class="imagem" title="Unipam" alt="Unipam" src="imagens/logounipam.png">
        <br><br>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "pi";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        @mysql_select_db($db) or die(mysql_error());

        date_default_timezone_set('America/Sao_Paulo');

        ?><table border="1" class="demo-table"><?php
        
        $start = new DateTime('07:30:00');
        $end = new DateTime('08:19:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '07:30' and horafinal <= '8:19' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<tr><th>Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</th></tr>'; 
                }
            } 
            else {
        echo '<td>Nenhuma aula no momento</td>';
        } 
        }

        $start = new DateTime('08:20:00');
        $end = new DateTime('09:10:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '08:20' and horafinal <= '09:10' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<tr><th>Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</tr></th>'; 
                }
            }  
            else {
        echo '<td>Nenhuma aula no momento</td>';
        } 
        }

        $start = new DateTime('09:20:00');
        $end = new DateTime('10:09:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '09:20' and horafinal <= '10:09' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('10:10:00');
        $end = new DateTime('10:59:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '10:10' and horafinal <= '10:59' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('11:00:00');
        $end = new DateTime('11:49:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '11:00' and horafinal <= '11:49' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('11:50:00');
        $end = new DateTime('12:39:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '11:50' and horafinal <= '12:39' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('12:40:00');
        $end = new DateTime('13:29:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '12:40' and horafinal <= '13:29' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>';  
                }
            }   
        }

        $start = new DateTime('13:30:00');
        $end = new DateTime('14:19:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '13:30' and horafinal <= '14:19' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('14:20:00');
        $end = new DateTime('15:09:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '14:20' and horafinal <= '15:09' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('15:10:00');
        $end = new DateTime('16:00:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '15:10' and horafinal <= '16:00' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('16:10:00');
        $end = new DateTime('16:59:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '16:10' and horafinal <= '17:59' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('17:00:00');
        $end = new DateTime('17:49:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '17:00' and horafinal <= '17:49' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('17:50:00');
        $end = new DateTime('18:40:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '17:50' and horafinal <= '18:40' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>';  
                }
            }   
        }

        $start = new DateTime('18:50:00');
        $end = new DateTime('19:39:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '19:50' and horafinal <= '18:39' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('19:40:00');
        $end = new DateTime('20:30:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '19:40' and horafinal <= '20:30' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('20:40:00');
        $end = new DateTime('21:29:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '20:40' and horafinal <= '21:29' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('21:30:00');
        $end = new DateTime('22:19:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '21:30' and horafinal <= '22:19' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }

        $start = new DateTime('22:20:00');
        $end = new DateTime('23:10:00');
        $now = new DateTime('now');
        if ( $start <= $now && $now <= $end ){
            $result = mysql_query("SELECT * FROM `horarios` WHERE horainicial >= '22:20' and horafinal <= '23:10' and day5 != ''");
            if (mysql_num_rows($result) > 0) {
                while($row = mysql_fetch_assoc($result)) {
                echo '<div class="dispo">Laboratório '.$row['laboratorio'].' - Professor '.$row['day5'].'</div>'; 
                }
            }   
        }
        
        
       
        ?>
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