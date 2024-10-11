 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>
 <body>
 <?php
$nombres= array('juan' => 8, 'Felix' => 6, 'Brihanna' => 10, 'Axel' => 9);

foreach ($nombres as $Alumno=>$Calificacion) {
    echo "la calificaciòn de " . $Alumno . " es: " . $Calificacion ."<br>";

echo"<p>";
}


rsort($nombres);
var_export($nombres);

 ?>
 </body>
 </html>