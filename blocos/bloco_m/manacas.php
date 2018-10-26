<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
        <title>Laboratório Manacas</title>
    </head>
    <body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "pi";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        @mysql_select_db($db) or die(mysql_error());
        
        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time1_manacas'];
            $ter = $_POST['day3time1_manacas'];
            $qua = $_POST['day4time1_manacas'];
            $qui = $_POST['day5time1_manacas'];
            $sex = $_POST['day6time1_manacas'];
            $sab = $_POST['day7time1_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('7:30 - 8:20','$seg','$ter','$qua','$qui','$sex','$sab','07:30:00','08:19:00','Manacas','Bloco M')");
        } 

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time2_manacas'];
            $ter = $_POST['day3time2_manacas'];
            $qua = $_POST['day4time2_manacas'];
            $qui = $_POST['day5time2_manacas'];
            $sex = $_POST['day6time2_manacas'];
            $sab = $_POST['day7time2_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('8:20 - 9:10','$seg','$ter','$qua','$qui','$sex','$sab','08:20:00','09:10:00','Manacas','Bloco M')");
        } 

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time3_manacas'];
            $ter = $_POST['day3time3_manacas'];
            $qua = $_POST['day4time3_manacas'];
            $qui = $_POST['day5time3_manacas'];
            $sex = $_POST['day6time3_manacas'];
            $sab = $_POST['day7time3_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('9:20 - 10:10','$seg','$ter','$qua','$qui','$sex','$sab','09:20:00','10:09:00','Manacas','Bloco M')");
        } 

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time4_manacas'];
            $ter = $_POST['day3time4_manacas'];
            $qua = $_POST['day4time4_manacas'];
            $qui = $_POST['day5time4_manacas'];
            $sex = $_POST['day6time4_manacas'];
            $sab = $_POST['day7time4_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('10:10 - 11:00','$seg','$ter','$qua','$qui','$sex','$sab','10:10:00','10:59:00','Manacas','Bloco M')");
        } 

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time5_manacas'];
            $ter = $_POST['day3time5_manacas'];
            $qua = $_POST['day4time5_manacas'];
            $qui = $_POST['day5time5_manacas'];
            $sex = $_POST['day6time5_manacas'];
            $sab = $_POST['day7time5_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:00 - 11:50','$seg','$ter','$qua','$qui','$sex','$sab','11:00:00','11:49:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time6_manacas'];
            $ter = $_POST['day3time6_manacas'];
            $qua = $_POST['day4time6_manacas'];
            $qui = $_POST['day5time6_manacas'];
            $sex = $_POST['day6time6_manacas'];
            $sab = $_POST['day7time6_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:50 - 12:40','$seg','$ter','$qua','$qui','$sex','$sab','11:50:00','12:39:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time7_manacas'];
            $ter = $_POST['day3time7_manacas'];
            $qua = $_POST['day4time7_manacas'];
            $qui = $_POST['day5time7_manacas'];
            $sex = $_POST['day6time7_manacas'];
            $sab = $_POST['day7time7_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('12:40 - 13:30','$seg','$ter','$qua','$qui','$sex','$sab','12:40:00','13:29:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time8_manacas'];
            $ter = $_POST['day3time8_manacas'];
            $qua = $_POST['day4time8_manacas'];
            $qui = $_POST['day5time8_manacas'];
            $sex = $_POST['day6time8_manacas'];
            $sab = $_POST['day7time8_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('13:30 - 14:20','$seg','$ter','$qua','$qui','$sex','$sab','13:30:00','14:19:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time9_manacas'];
            $ter = $_POST['day3time9_manacas'];
            $qua = $_POST['day4time9_manacas'];
            $qui = $_POST['day5time9_manacas'];
            $sex = $_POST['day6time9_manacas'];
            $sab = $_POST['day7time9_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('14:20 - 15:10','$seg','$ter','$qua','$qui','$sex','$sab','14:20:00','15:09:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time10_manacas'];
            $ter = $_POST['day3time10_manacas'];
            $qua = $_POST['day4time10_manacas'];
            $qui = $_POST['day5time10_manacas'];
            $sex = $_POST['day6time10_manacas'];
            $sab = $_POST['day7time10_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('15:10 - 16:00','$seg','$ter','$qua','$qui','$sex','$sab','15:10:00','16:00:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time11_manacas'];
            $ter = $_POST['day3time11_manacas'];
            $qua = $_POST['day4time11_manacas'];
            $qui = $_POST['day5time11_manacas'];
            $sex = $_POST['day6time11_manacas'];
            $sab = $_POST['day7time11_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('16:10 - 17:00','$seg','$ter','$qua','$qui','$sex','$sab','16:10:00','16:59:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time12_manacas'];
            $ter = $_POST['day3time12_manacas'];
            $qua = $_POST['day4time12_manacas'];
            $qui = $_POST['day5time12_manacas'];
            $sex = $_POST['day6time12_manacas'];
            $sab = $_POST['day7time12_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:00 - 17:50','$seg','$ter','$qua','$qui','$sex','$sab','17:00:00','17:49:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time13_manacas'];
            $ter = $_POST['day3time13_manacas'];
            $qua = $_POST['day4time13_manacas'];
            $qui = $_POST['day5time13_manacas'];
            $sex = $_POST['day6time13_manacas'];
            $sab = $_POST['day7time13_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:50 - 18:40','$seg','$ter','$qua','$qui','$sex','$sab','17:50:00','18:40:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time14_manacas'];
            $ter = $_POST['day3time14_manacas'];
            $qua = $_POST['day4time14_manacas'];
            $qui = $_POST['day5time14_manacas'];
            $sex = $_POST['day6time14_manacas'];
            $sab = $_POST['day7time14_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('18:50 - 19:40','$seg','$ter','$qua','$qui','$sex','$sab','18:50:00','19:39:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time15_manacas'];
            $ter = $_POST['day3time15_manacas'];
            $qua = $_POST['day4time15_manacas'];
            $qui = $_POST['day5time15_manacas'];
            $sex = $_POST['day6time15_manacas'];
            $sab = $_POST['day7time15_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('19:40 - 20:30','$seg','$ter','$qua','$qui','$sex','$sab','19:40:00','20:30:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time16_manacas'];
            $ter = $_POST['day3time16_manacas'];
            $qua = $_POST['day4time16_manacas'];
            $qui = $_POST['day5time16_manacas'];
            $sex = $_POST['day6time16_manacas'];
            $sab = $_POST['day7time16_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('20:40 - 21:30','$seg','$ter','$qua','$qui','$sex','$sab','20:40:00','21:29:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time17_manacas'];
            $ter = $_POST['day3time17_manacas'];
            $qua = $_POST['day4time17_manacas'];
            $qui = $_POST['day5time17_manacas'];
            $sex = $_POST['day6time17_manacas'];
            $sab = $_POST['day7time17_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('21:30 - 22:20','$seg','$ter','$qua','$qui','$sex','$sab','21:30:00','22:19:00','Manacas','Bloco M')");
        }

        if(isset($_POST['day2time1_manacas'])){ 
            $day2time1_manacas=$_POST['day2time1_manacas']; 
            $seg = $_POST['day2time18_manacas'];
            $ter = $_POST['day3time18_manacas'];
            $qua = $_POST['day4time18_manacas'];
            $qui = $_POST['day5time18_manacas'];
            $sex = $_POST['day6time18_manacas'];
            $sab = $_POST['day7time18_manacas'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('22:20 - 23:10','$seg','$ter','$qua','$qui','$sex','$sab','22:20:00','23:10:00','Manacas','Bloco M')");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='7:30 - 8:20' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='8:20 - 9:10' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='9:20 - 10:10' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='10:10 - 11:00' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:00 - 11:50' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:50 - 12:40' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='12:40 - 13:30' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='13:30 - 14:20' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='14:20 - 15:10' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='15:10 - 16:00' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='16:10 - 17:00' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:00 - 17:50' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:50 - 18:40' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='18:50 - 19:40' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='19:40 - 20:30' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='20:40 - 21:30' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='21:30 - 22:20' and laboratorio = 'Manacas'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='22:20 - 23:10' and laboratorio = 'Manacas'");
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