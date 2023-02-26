<?

$Nombre = $_POST['Nombre'];
$Departamento = $_POST['Departamento'];
$Incidencia = $_POST['Incidencia'];
$Mensaje = $_POST['Mensaje'];

$destinatario = "aritbanon@gmail.com"
$asunto = "Incidencia"
$cuerpo = '
<html>
   <body>
    <h1>Incidencia</h1>
   <p>
        Contaco: '.$Nombre . ' - ' .$Departamento .' <br>
        Incidencia: ' . $Incidencia . ' <br>
        Mensaje: '.$Mensaje.'
   </p>
   </body>
<html>
';

$headers = "MIME-Version 1.0\r\n";
$headers .- "Content-type: text/html; charset=UTF8\r\n";

$headers .= "FORM: $Nombre\r\n";
mail($destinatario,$asunto, $cuerpo, $headers);
echo("Correo enviado");

?>
<a href="index.html"> Volver a inicio</a>