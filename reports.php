<?php

$solicitud=$_POST['solicitud'];
$coduser=$_POST['coduser'];
$space= str_replace(' ', '%20', $solicitud);

if (($solicitud=="")||($coduser==""))
{
echo "Todos los campos son necesarios, complete <a href=\"\">el formulario</a> de nuevo.";  
header("Location: reports.html");
//header("Location: https://randomwsite.000webhostapp.com/reports.html");
}
else{
		$link = 'https://wa.me/595982305305?text=Hola%20tengo%20un%20inconveniente.%20REPORTE:%20'.$space.'%20CÓDIGO%20DE%20USUARIO:%20'.$coduser.'%20';

header("Location: $link");
}
?>
