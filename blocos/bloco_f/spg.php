<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
        <title>Laboratório SPG</title>
    </head>
    <body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "pi";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        @mysql_select_db($db) or die(mysql_error());
        
        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time1_spg'];
            $ter = $_POST['day3time1_spg'];
            $qua = $_POST['day4time1_spg'];
            $qui = $_POST['day5time1_spg'];
            $sex = $_POST['day6time1_spg'];
            $sab = $_POST['day7time1_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('7:30 - 8:20','$seg','$ter','$qua','$qui','$sex','$sab','07:30:00','08:19:00','SPG','Bloco F')");
        } 

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time2_spg'];
            $ter = $_POST['day3time2_spg'];
            $qua = $_POST['day4time2_spg'];
            $qui = $_POST['day5time2_spg'];
            $sex = $_POST['day6time2_spg'];
            $sab = $_POST['day7time2_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('8:20 - 9:10','$seg','$ter','$qua','$qui','$sex','$sab','08:20:00','09:10:00','SPG','Bloco F')");
        } 

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time3_spg'];
            $ter = $_POST['day3time3_spg'];
            $qua = $_POST['day4time3_spg'];
            $qui = $_POST['day5time3_spg'];
            $sex = $_POST['day6time3_spg'];
            $sab = $_POST['day7time3_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('9:20 - 10:10','$seg','$ter','$qua','$qui','$sex','$sab','09:20:00','10:09:00','SPG','Bloco F')");
        } 

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time4_spg'];
            $ter = $_POST['day3time4_spg'];
            $qua = $_POST['day4time4_spg'];
            $qui = $_POST['day5time4_spg'];
            $sex = $_POST['day6time4_spg'];
            $sab = $_POST['day7time4_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('10:10 - 11:00','$seg','$ter','$qua','$qui','$sex','$sab','10:10:00','10:59:00','SPG','Bloco F')");
        } 

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time5_spg'];
            $ter = $_POST['day3time5_spg'];
            $qua = $_POST['day4time5_spg'];
            $qui = $_POST['day5time5_spg'];
            $sex = $_POST['day6time5_spg'];
            $sab = $_POST['day7time5_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:00 - 11:50','$seg','$ter','$qua','$qui','$sex','$sab','11:00:00','11:49:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time6_spg'];
            $ter = $_POST['day3time6_spg'];
            $qua = $_POST['day4time6_spg'];
            $qui = $_POST['day5time6_spg'];
            $sex = $_POST['day6time6_spg'];
            $sab = $_POST['day7time6_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('11:50 - 12:40','$seg','$ter','$qua','$qui','$sex','$sab','11:50:00','12:39:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time7_spg'];
            $ter = $_POST['day3time7_spg'];
            $qua = $_POST['day4time7_spg'];
            $qui = $_POST['day5time7_spg'];
            $sex = $_POST['day6time7_spg'];
            $sab = $_POST['day7time7_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('12:40 - 13:30','$seg','$ter','$qua','$qui','$sex','$sab','12:40:00','13:29:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time8_spg'];
            $ter = $_POST['day3time8_spg'];
            $qua = $_POST['day4time8_spg'];
            $qui = $_POST['day5time8_spg'];
            $sex = $_POST['day6time8_spg'];
            $sab = $_POST['day7time8_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('13:30 - 14:20','$seg','$ter','$qua','$qui','$sex','$sab','13:30:00','14:19:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time9_spg'];
            $ter = $_POST['day3time9_spg'];
            $qua = $_POST['day4time9_spg'];
            $qui = $_POST['day5time9_spg'];
            $sex = $_POST['day6time9_spg'];
            $sab = $_POST['day7time9_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('14:20 - 15:10','$seg','$ter','$qua','$qui','$sex','$sab','14:20:00','15:09:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time10_spg'];
            $ter = $_POST['day3time10_spg'];
            $qua = $_POST['day4time10_spg'];
            $qui = $_POST['day5time10_spg'];
            $sex = $_POST['day6time10_spg'];
            $sab = $_POST['day7time10_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('15:10 - 16:00','$seg','$ter','$qua','$qui','$sex','$sab','15:10:00','16:00:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time11_spg'];
            $ter = $_POST['day3time11_spg'];
            $qua = $_POST['day4time11_spg'];
            $qui = $_POST['day5time11_spg'];
            $sex = $_POST['day6time11_spg'];
            $sab = $_POST['day7time11_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('16:10 - 17:00','$seg','$ter','$qua','$qui','$sex','$sab','16:10:00','16:59:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time12_spg'];
            $ter = $_POST['day3time12_spg'];
            $qua = $_POST['day4time12_spg'];
            $qui = $_POST['day5time12_spg'];
            $sex = $_POST['day6time12_spg'];
            $sab = $_POST['day7time12_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:00 - 17:50','$seg','$ter','$qua','$qui','$sex','$sab','17:00:00','17:49:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time13_spg'];
            $ter = $_POST['day3time13_spg'];
            $qua = $_POST['day4time13_spg'];
            $qui = $_POST['day5time13_spg'];
            $sex = $_POST['day6time13_spg'];
            $sab = $_POST['day7time13_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('17:50 - 18:40','$seg','$ter','$qua','$qui','$sex','$sab','17:50:00','18:40:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time14_spg'];
            $ter = $_POST['day3time14_spg'];
            $qua = $_POST['day4time14_spg'];
            $qui = $_POST['day5time14_spg'];
            $sex = $_POST['day6time14_spg'];
            $sab = $_POST['day7time14_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('18:50 - 19:40','$seg','$ter','$qua','$qui','$sex','$sab','18:50:00','19:39:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time15_spg'];
            $ter = $_POST['day3time15_spg'];
            $qua = $_POST['day4time15_spg'];
            $qui = $_POST['day5time15_spg'];
            $sex = $_POST['day6time15_spg'];
            $sab = $_POST['day7time15_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('19:40 - 20:30','$seg','$ter','$qua','$qui','$sex','$sab','19:40:00','20:30:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time16_spg'];
            $ter = $_POST['day3time16_spg'];
            $qua = $_POST['day4time16_spg'];
            $qui = $_POST['day5time16_spg'];
            $sex = $_POST['day6time16_spg'];
            $sab = $_POST['day7time16_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('20:40 - 21:30','$seg','$ter','$qua','$qui','$sex','$sab','20:40:00','21:29:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time17_spg'];
            $ter = $_POST['day3time17_spg'];
            $qua = $_POST['day4time17_spg'];
            $qui = $_POST['day5time17_spg'];
            $sex = $_POST['day6time17_spg'];
            $sab = $_POST['day7time17_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('21:30 - 22:20','$seg','$ter','$qua','$qui','$sex','$sab','21:30:00','22:19:00','SPG','Bloco F')");
        }

        if(isset($_POST['day2time1_spg'])){ 
            $day2time1_spg=$_POST['day2time1_spg']; 
            $seg = $_POST['day2time18_spg'];
            $ter = $_POST['day3time18_spg'];
            $qua = $_POST['day4time18_spg'];
            $qui = $_POST['day5time18_spg'];
            $sex = $_POST['day6time18_spg'];
            $sab = $_POST['day7time18_spg'];

            $sql = mysql_query("INSERT INTO horarios(time,day2, day3, day4, day5, day6, day7, horainicial, horafinal, laboratorio, bloco) VALUES ('22:20 - 23:10','$seg','$ter','$qua','$qui','$sex','$sab','22:20:00','23:10:00','SPG','Bloco F')");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='7:30 - 8:20' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='8:20 - 9:10' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='9:20 - 10:10' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='10:10 - 11:00' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:00 - 11:50' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='11:50 - 12:40' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='12:40 - 13:30' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='13:30 - 14:20' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='14:20 - 15:10' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='15:10 - 16:00' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='16:10 - 17:00' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:00 - 17:50' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='17:50 - 18:40' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='18:50 - 19:40' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='19:40 - 20:30' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='20:40 - 21:30' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='21:30 - 22:20' and laboratorio = 'SPG'");
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
                        $sql = mysql_query("SELECT day2,day3,day4,day5,day6,day7 FROM `horarios` WHERE time='22:20 - 23:10' and laboratorio = 'SPG'");
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