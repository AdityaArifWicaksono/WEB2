<?$ball = 'purple';   
//Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
if ($ball == 'red') {  $redbox = $ball;} 
elseif ($ball == 'yellow') {   $yellowbox = $ball;} 
elseif ($ball == 'blue') {   $bluebox = $ball;} 
elseif ($ball == 'green') {   $greenbox = $ball;} 
elseif ($ball == 'purple') { 
$purplebox = $ball;
} else { 
  $colorlessbox = $ball;
}
echo "red box : $redbox <br>\n";
echo "yellow box : $yellowbox <br>\n";
echo "blue box : $bluebox <br>\n";
echo "green box : $greenbox <br>\n";
echo "purple box : $purplebox <br>\n";
echo "colorless box : $colorlessbox <br>\n";
?>
<html>
<head>
	<title>contoh Penggunaan IF</title>
	</head>
	<body>
		<form> Besar Pembelian :  <input type=text name=total_beli><br><br> 
			<input type=submit value="Tentukan Diskon"></form><?php  
			if (isset($total_beli))  { $total_beli=intval($total_beli); $diskon=0;
				if($total_beli>=200000)
 	  $diskon=0.1;
 else if ($total_beli>=100000)
    $diskon= 0.05;
	else
	   $diskon=0.01;	   
	$diskon=$diskon * intval($total_beli);
	printf("Diskon	= %s <br>\n", $diskon);
 printf("Pembayaran = %s <br>\n", $total_beli-$diskon);
  }
?>
</body>
</html>
