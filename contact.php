<?php
$name=$_POST['name'];
$lastn=$_POST['lastn'];
$email=$_POST['email'];
$city=$_POST['city'];
$barrio=$_POST['barrio'];
$solicitud=$_POST['solicitud'];
$fichero="/solicitudes/";
$archivo=$solicitud.".pdf";
$file=$fichero.$solicitud.".pdf";
#$fullfile="/storage/ssd3/475/9152475/public_html".$file;




if (($name=="")||($lastn=="")||($email=="")||($city=="")||($barrio=="")||($solicitud==""))
{
	echo "Todos los campos son necesarios, complete <a href=\"\">el formulario</a> de nuevo.";  
}else{
		$link = '<a href="http://clyfsa.com'.$file.'" target="_blank"><font color="#ffffff" size="5" face="Arial Black"><img src="http://clyfsa.com/images/download-solid.png" width="5%">DESCARGAR SOLICITUD</font></a>';
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";			
		$headers .="From: $name<$email>\r\nReturn-path: $email";
		$message = '<html><body>';
		$message .= "<br>\n<table cellspacing='0' cellpadding='5' border='0' align='center' bgcolor='#eeeeee' width='100%' style='max-width: 1000px;'>";

		$message .= '<tr><td><table cellspacing="0" cellpadding="5" border="1" bordercolor="#dddddd" align="center" style="margin: auto;" width="70%">
		<tr><td colspan="2" height="80px" align="center" bgcolor="#eeeeee"><br><a href="http://clyfsa.com"><img src="http://clyfsa.com/images/0logo.png" width="30%"></a><br><br></td></tr>
		<tr><td colspan="2" align="center" valign="middle" bgcolor="#008bb9"><font color="#ffffff"><h2><br>Movimimento de Solicitudes - CLYFSA</h2></font></td></tr>
		<tr><td width="30%" >Solicitante: </td><td>'.$name.' '.$lastn.'</td></tr>';

		$message .= '<tr><td width="30%" >Email: </td><td>'.$email.'</td></tr>';
		$message .= '<tr><td width="30%" >Ciudad: </td><td>'.$city.'</td></tr>';
		$message .= '<tr><td width="30%" >Barrio: </td><td>'.$barrio.'</td></tr>';
		$message .= '<tr><td width="30%" >Tipo de Solicitud: </td><td><p style="color:#f40;">'.$solicitud.'</p></td></tr><tr><td colspan="2" height="150px" bgcolor="#008bb9" align="center">'.$link.'</td></tr>';
		$message .= '<tr><td colspan="2" border="0" bgcolor="#eeeeee" bordercolor="#eeeeee" height="50px"></td></tr>';
		$message .= '<tr><td bgcolor="#aaaaaa"  width="50%" align="center"><font size="8" face="Arial" color="#ffffff"><a href="tel:+59554142679" target="_blank"><font color="#ffffff"><h6><br>Contacto</h6></font></a></font></td><td bgcolor="#aaaaaa" width="50%" align="center" height="80px"><font color="#ffffff" size="8" face ="Arial"><a href="https://api.whatsapp.com/send?phone=595982305305&text=Hola! Tengo una consulta." target="_blank"><img src="http://clyfsa.com/images/whatsapp-brands.png" width="10%"></a></font</td></tr></table>';
		$message .= '</td></tr></table><br><br><br>';
		$message .= '</body></html>';

$subject="Mensaje enviado desde formulario Web $name";
//mail("cesarveramatz@gmail.com", $subject, $message, $headers);
mail($email, $subject, $message, $headers);
//$loc = "https://randomwsite.000webhostapp.com/forms.html";
$loc = "forms.html";
echo $message;
#header("Location: $loc");
die(0);}
?>
