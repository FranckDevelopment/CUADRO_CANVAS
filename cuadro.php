<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <title>Creando un plano cartesiano</title>
</head>
<body>
    <center>
    <div class="dibujo-canvas">
        <canvas id="lienzo1" width="300" height="300"></canvas>
        <script type="text/javascript">

        var a1 = 180;
        var b1 = 10;

        var a2 = 20;
        var b2 = 300;

        var c1 = 110;
        var d1 = 10;

        var c2 = 200;
        var d2 = 300;
         

        ejercicio1(a1,a2,b1,b2,c1,c2,d1,d2);
        
        function ejercicio1(a1,a2,b1,b2,c1,c2,d1,d2){
            
            ej1=document.getElementById("lienzo1"); 
            lienzo1=ej1.getContext("2d");
            lienzo1.lineWidth=1;
            lienzo1.strokeStyle = '#000'; 
    
        //EJE X
            lienzo1.beginPath();

            lienzo1.moveTo(150,0); 
            lienzo1.lineTo(150,300);

            lienzo1.moveTo(0,146); 
            lienzo1.lineTo(0,154);

            lienzo1.moveTo(10,146); 
            lienzo1.lineTo(10,154);

            
            lienzo1.moveTo(20,146); 
            lienzo1.lineTo(20,154);

            lienzo1.moveTo(30,146); 
            lienzo1.lineTo(30,154);

            lienzo1.moveTo(40,146); 
            lienzo1.lineTo(40,154);

            lienzo1.moveTo(50,146); 
            lienzo1.lineTo(50,154);

            lienzo1.moveTo(60,146); 
            lienzo1.lineTo(60,154);

            lienzo1.moveTo(70,146); 
            lienzo1.lineTo(70,154);

            lienzo1.moveTo(80,146); 
            lienzo1.lineTo(80,154);

            lienzo1.moveTo(90,146); 
            lienzo1.lineTo(90,154);

            lienzo1.moveTo(100,146); 
            lienzo1.lineTo(100,154);

            lienzo1.moveTo(110,146); 
            lienzo1.lineTo(110,154);

            lienzo1.moveTo(120,146); 
            lienzo1.lineTo(120,154);

            lienzo1.moveTo(130,146); 
            lienzo1.lineTo(130,154);

            lienzo1.moveTo(140,146); 
            lienzo1.lineTo(140,154);

            //0 , 0

            lienzo1.moveTo(160,146); 
            lienzo1.lineTo(160,154);

            lienzo1.moveTo(170,146); 
            lienzo1.lineTo(170,154);

            lienzo1.moveTo(180,146); 
            lienzo1.lineTo(180,154);

            lienzo1.moveTo(190,146); 
            lienzo1.lineTo(190,154);

            lienzo1.moveTo(200,146); 
            lienzo1.lineTo(200,154);

            lienzo1.moveTo(210,146); 
            lienzo1.lineTo(210,154);

            lienzo1.moveTo(220,146); 
            lienzo1.lineTo(220,154);

            lienzo1.moveTo(230,146); 
            lienzo1.lineTo(230,154);

            lienzo1.moveTo(240,146); 
            lienzo1.lineTo(240,154);

            lienzo1.moveTo(250,146); 
            lienzo1.lineTo(250,154);

            lienzo1.moveTo(260,146); 
            lienzo1.lineTo(260,154);

            lienzo1.moveTo(270,146); 
            lienzo1.lineTo(270,154);

            lienzo1.moveTo(280,146); 
            lienzo1.lineTo(280,154);

            lienzo1.moveTo(290,146); 
            lienzo1.lineTo(290,154);

            lienzo1.moveTo(300,146); 
            lienzo1.lineTo(300,154);

            lienzo1.moveTo(0,160000);
            lienzo1.lineTo(300,0);

            lienzo1.moveTo(160000,0);
            lienzo1.lineTo(0,300);

             // ecuacion 1 
            lienzo1.moveTo(a1,b1); 
            lienzo1.lineTo(a2,b2);
            //ecuacion 2
            lienzo1.moveTo(c1,d1); 
            lienzo1.lineTo(c2,d2);

            lienzo1.stroke(); 
            lienzo1.closePath(); 
        //EJE Y
            lienzo1.beginPath(); 
            lienzo1.moveTo(0,150);
            lienzo1.lineTo(300,150);


            lienzo1.moveTo(146,0);
            lienzo1.lineTo(154,0);

            lienzo1.moveTo(146,10);
            lienzo1.lineTo(154,10);

            lienzo1.moveTo(146,20);
            lienzo1.lineTo(154,20);

            lienzo1.moveTo(146,30);
            lienzo1.lineTo(154,30);

            lienzo1.moveTo(146,40);
            lienzo1.lineTo(154,40);

            lienzo1.moveTo(146,50);
            lienzo1.lineTo(154,50);

            lienzo1.moveTo(146,60);
            lienzo1.lineTo(154,60);

            lienzo1.moveTo(146,70);
            lienzo1.lineTo(154,70);

            lienzo1.moveTo(146,80);
            lienzo1.lineTo(154,80);

            lienzo1.moveTo(146,90);
            lienzo1.lineTo(154,90);

            lienzo1.moveTo(146,100);
            lienzo1.lineTo(154,100);

            lienzo1.moveTo(146,110);
            lienzo1.lineTo(154,110);

            lienzo1.moveTo(146,120);
            lienzo1.lineTo(154,120);

            lienzo1.moveTo(146,130);
            lienzo1.lineTo(154,130);

            lienzo1.moveTo(146,140);
            lienzo1.lineTo(154,140);

            // 0 , 0

            lienzo1.moveTo(146,160);
            lienzo1.lineTo(154,160);

            lienzo1.moveTo(146,170);
            lienzo1.lineTo(154,170);

            lienzo1.moveTo(146,180);
            lienzo1.lineTo(154,180);

            lienzo1.moveTo(146,190);
            lienzo1.lineTo(154,190);

            lienzo1.moveTo(146,200);
            lienzo1.lineTo(154,200);

            lienzo1.moveTo(146,210);
            lienzo1.lineTo(154,210);

            lienzo1.moveTo(146,220);
            lienzo1.lineTo(154,220);
            
            lienzo1.moveTo(146,230);
            lienzo1.lineTo(154,230);

            lienzo1.moveTo(146,240);
            lienzo1.lineTo(154,240);

            lienzo1.moveTo(146,250);
            lienzo1.lineTo(154,250);

            lienzo1.moveTo(146,260);
            lienzo1.lineTo(154,260);

            lienzo1.moveTo(146,270);
            lienzo1.lineTo(154,270);

            lienzo1.moveTo(146,280);
            lienzo1.lineTo(154,280);

            lienzo1.moveTo(146,290);
            lienzo1.lineTo(154,290);

            lienzo1.moveTo(146,300);
            lienzo1.lineTo(154,300);



            lienzo1.moveTo(300,0);
            lienzo1.lineTo(0,0);

            lienzo1.moveTo(0,0);
            lienzo1.lineTo(0,300);


            lienzo1.stroke();
            lienzo1.closePath();
        }
        </script>
    </div>
    </center>
    <div>
        <center> <h1>Sistema de Ecuaciones 2 x 2 CRAMER</h1></center>
    </div>
    <center>
        <form action="cuadro.php" method="post">
            <table class="default">
                <tr>
                    <td><input type="number" name="S11"></td>
                    <td>X</td>
                    <td>+</td>
                    <td><input type="number" name="S12"></td>
                    <td>Y</td>
                    <td>=</td>
                    <td><input type="number" name="R1"></td>
                </tr>
                <tr>
                    <td><input type="number" name="S21"></td>
                    <td>X</td>
                    <td>+</td>
                    <td><input type="number" name="S22"></td>
                    <td>Y</td>
                    <td>=</td>
                    <td><input type="number" name="R2"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Resolver">
        </form>
    </center>
</body>
</html>
<?php

$S11 = $_POST['S11'];
$S12 = $_POST['S12'];
$S21 = $_POST['S21'];
$S22 = $_POST['S22'];
$R1 = $_POST['R1'];
$R2 = $_POST['R2'];
$D = Determinante($S11,$S12,$S21,$S22);
$Dx = Determinante($R1,$S12,$R2,$S22);
$Dy = Determinante($S11,$R1,$S21,$R2);

if($D != 0){
     
    echo "El valor de X es: ".$Dx."/".$D."<BR>";
    echo "El valor de Y es: ".$Dy."/".$D;
}

function Determinante($e1,$e2,$e3,$e4){
    $D = $e1*$e4-$e3*$e2;
    return $D;
}


?>