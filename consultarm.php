 <?php
$nis="asdfasdf";
$fichero="https://randomwsite.000webhostapp.com/facturas/";
$archivo=$nis.".pdf";
$file=$fichero.$nis.".pdf";
$ban="yes";
if ($nis=="")
{
	die();
echo "Todos los campos son necesarios, ingrese de nuevo de nuevo.";  
}
else{
	#if(strpos($file,"200")){
	$siteHeader = @get_headers($file , 1); if ($siteHeader > 1) { 
	#$valid = @fsockopen($file, 80, $errno, $errstr, 30);
	#if ($valid==true){
		echo("thisss");
	}else{
		echo ("nope");
	}
	if (!file_exists($file)== true) {
		echo("WORKS");
		echo($file);
		echo(realpath($file));
		
	}else{
		echo ("no data");
		#$link = '<a href="'.$file.'" target="_blank"><buttom>DESCARGAR FACTURA</buttom></a>';
		echo($file);
		
		#echo($link);
		
		
	}
 
}

?>