<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
        <title>Laboratório Platina</title>
    </head>
    <body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "pi";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        @mysql_select_db($db) or die(mysql_error());
        
        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time1_platina'];
            $ter = $_POST['day3time1_platina'];
            $qua = $_POST['day4time1_platina'];
            $qui = $_POST['day5time1_platina'];
            $sex = $_POST['day6time1_platina'];
            $sab = $_POST['day7time1_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('7:30 - 8:20','$seg','$ter','$qua','$qui','$sex','$sab','07:30:00','08:19:00','Platina','Bloco G')");
        } 

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time2_platina'];
            $ter = $_POST['day3time2_platina'];
            $qua = $_POST['day4time2_platina'];
            $qui = $_POST['day5time2_platina'];
            $sex = $_POST['day6time2_platina'];
            $sab = $_POST['day7time2_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('8:20 - 9:10','$seg','$ter','$qua','$qui','$sex','$sab','08:20:00','09:10:00','Platina','Bloco G')");
        } 

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time3_platina'];
            $ter = $_POST['day3time3_platina'];
            $qua = $_POST['day4time3_platina'];
            $qui = $_POST['day5time3_platina'];
            $sex = $_POST['day6time3_platina'];
            $sab = $_POST['day7time3_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('9:20 - 10:10','$seg','$ter','$qua','$qui','$sex','$sab','09:20:00','10:09:00','Platina','Bloco G')");
        } 

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time4_platina'];
            $ter = $_POST['day3time4_platina'];
            $qua = $_POST['day4time4_platina'];
            $qui = $_POST['day5time4_platina'];
            $sex = $_POST['day6time4_platina'];
            $sab = $_POST['day7time4_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('10:10 - 11:00','$seg','$ter','$qua','$qui','$sex','$sab','10:10:00','10:59:00','Platina','Bloco G')");
        } 

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time5_platina'];
            $ter = $_POST['day3time5_platina'];
            $qua = $_POST['day4time5_platina'];
            $qui = $_POST['day5time5_platina'];
            $sex = $_POST['day6time5_platina'];
            $sab = $_POST['day7time5_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:00 - 11:50','$seg','$ter','$qua','$qui','$sex','$sab','11:00:00','11:49:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time6_platina'];
            $ter = $_POST['day3time6_platina'];
            $qua = $_POST['day4time6_platina'];
            $qui = $_POST['day5time6_platina'];
            $sex = $_POST['day6time6_platina'];
            $sab = $_POST['day7time6_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:50 - 12:40','$seg','$ter','$qua','$qui','$sex','$sab','11:50:00','12:39:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time7_platina'];
            $ter = $_POST['day3time7_platina'];
            $qua = $_POST['day4time7_platina'];
            $qui = $_POST['day5time7_platina'];
            $sex = $_POST['day6time7_platina'];
            $sab = $_POST['day7time7_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('12:40 - 13:30','$seg','$ter','$qua','$qui','$sex','$sab','12:40:00','13:29:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time8_platina'];
            $ter = $_POST['day3time8_platina'];
            $qua = $_POST['day4time8_platina'];
            $qui = $_POST['day5time8_platina'];
            $sex = $_POST['day6time8_platina'];
            $sab = $_POST['day7time8_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('13:30 - 14:20','$seg','$ter','$qua','$qui','$sex','$sab','13:30:00','14:19:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time9_platina'];
            $ter = $_POST['day3time9_platina'];
            $qua = $_POST['day4time9_platina'];
            $qui = $_POST['day5time9_platina'];
            $sex = $_POST['day6time9_platina'];
            $sab = $_POST['day7time9_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('14:20 - 15:10','$seg','$ter','$qua','$qui','$sex','$sab','14:20:00','15:09:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time10_platina'];
            $ter = $_POST['day3time10_platina'];
            $qua = $_POST['day4time10_platina'];
            $qui = $_POST['day5time10_platina'];
            $sex = $_POST['day6time10_platina'];
            $sab = $_POST['day7time10_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('15:10 - 16:00','$seg','$ter','$qua','$qui','$sex','$sab','15:10:00','16:00:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time11_platina'];
            $ter = $_POST['day3time11_platina'];
            $qua = $_POST['day4time11_platina'];
            $qui = $_POST['day5time11_platina'];
            $sex = $_POST['day6time11_platina'];
            $sab = $_POST['day7time11_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('16:10 - 17:00','$seg','$ter','$qua','$qui','$sex','$sab','16:10:00','16:59:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time12_platina'];
            $ter = $_POST['day3time12_platina'];
            $qua = $_POST['day4time12_platina'];
            $qui = $_POST['day5time12_platina'];
            $sex = $_POST['day6time12_platina'];
            $sab = $_POST['day7time12_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:00 - 17:50','$seg','$ter','$qua','$qui','$sex','$sab','17:00:00','17:49:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time13_platina'];
            $ter = $_POST['day3time13_platina'];
            $qua = $_POST['day4time13_platina'];
            $qui = $_POST['day5time13_platina'];
            $sex = $_POST['day6time13_platina'];
            $sab = $_POST['day7time13_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:50 - 18:40','$seg','$ter','$qua','$qui','$sex','$sab','17:50:00','18:40:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time14_platina'];
            $ter = $_POST['day3time14_platina'];
            $qua = $_POST['day4time14_platina'];
            $qui = $_POST['day5time14_platina'];
            $sex = $_POST['day6time14_platina'];
            $sab = $_POST['day7time14_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('18:50 - 19:40','$seg','$ter','$qua','$qui','$sex','$sab','18:50:00','19:39:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time15_platina'];
            $ter = $_POST['day3time15_platina'];
            $qua = $_POST['day4time15_platina'];
            $qui = $_POST['day5time15_platina'];
            $sex = $_POST['day6time15_platina'];
            $sab = $_POST['day7time15_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('19:40 - 20:30','$seg','$ter','$qua','$qui','$sex','$sab','19:40:00','20:30:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time16_platina'];
            $ter = $_POST['day3time16_platina'];
            $qua = $_POST['day4time16_platina'];
            $qui = $_POST['day5time16_platina'];
            $sex = $_POST['day6time16_platina'];
            $sab = $_POST['day7time16_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('20:40 - 21:30','$seg','$ter','$qua','$qui','$sex','$sab','20:40:00','21:29:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time17_platina'];
            $ter = $_POST['day3time17_platina'];
            $qua = $_POST['day4time17_platina'];
            $qui = $_POST['day5time17_platina'];
            $sex = $_POST['day6time17_platina'];
            $sab = $_POST['day7time17_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('21:30 - 22:20','$seg','$ter','$qua','$qui','$sex','$sab','21:30:00','22:19:00','Platina','Bloco G')");
        }

        if(isset($_POST['day2time1_platina'])){ 
            $day2time1_platina=$_POST['day2time1_platina']; 
            $seg = $_POST['day2time18_platina'];
            $ter = $_POST['day3time18_platina'];
            $qua = $_POST['day4time18_platina'];
            $qui = $_POST['day5time18_platina'];
            $sex = $_POST['day6time18_platina'];
            $sab = $_POST['day7time18_platina'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('22:20 - 23:10','$seg','$ter','$qua','$qui','$sex','$sab','22:20:00','23:10:00','Platina','Bloco G')");
        }

    ?> 

    <img class="imagem" title="Unipam" alt="Unipam" src="../../imagens/logounipam.png">
        <table border="1" class="demo-table">   
            <tr> 
                <th>Inicio</th> 
                <th>Seg.</th>
                <th>Ter.</th>
                <th>Qua.</th>
                <th>Qui.</th>
                <th>Sex.</th>
                <th>Sab.</th>
            </tr> 
            <tr> 
                <td>7:30 - 8:20</td> 
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='7:30 - 8:20' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr>
            <tr>
                <td>8:20 - 9:10</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='8:20 - 9:10' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>9:20 - 10:10</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='9:20 - 10:10' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>10:10 - 11:00</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='10:10 - 11:00' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>11:00 - 11:50</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:00 - 11:50' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>11:50 - 12:40</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:50 - 12:40' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>12:40 - 13:30</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='12:40 - 13:30' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>13:30 - 14:20</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='13:30 - 14:20' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>14:20 - 15:10</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='14:20 - 15:10' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>15:10 - 16:00</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='15:10 - 16:00' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>16:10 - 17:00</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='16:10 - 17:00' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>17:00 - 17:50</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:00 - 17:50' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>17:50 - 18:40</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:50 - 18:40' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>
                <td>18:50 - 19:40</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='18:50 - 19:40' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr>  
                <td>19:40 - 20:30</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='19:40 - 20:30' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr> 
                <td>20:40 - 21:30</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='20:40 - 21:30' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr> 
                <td>21:30 - 22:20</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='21:30 - 22:20' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr> 
            <tr> 
                <td>22:20 - 23:10</td>
                <td>
                    <?php 
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='22:20 - 23:10' and laboratorio = 'Platina'");
                        $resultado = mysql_fetch_assoc($sql);
                        echo $resultado["day2"];
                    ?>    
                </td>
     
                <td>
                    <?php 
                        echo $resultado["day3"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day4"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day5"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day6"];
                    ?>    
                </td>
                <td>
                    <?php 
                        echo $resultado["day7"];
                    ?>    
                </td>    
            </tr>
        </table>
    </body>
</html>