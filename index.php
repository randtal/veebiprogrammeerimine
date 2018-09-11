<?php
	//echo "See on minu esimene PHP!";
	$firstName = "Rando";
	$lastName = "Talviste";
	$dateToday = date("d.m.Y");
	$hourNow = date("G.");
	$partOfDay = "";
	if ($hourNow < 8) {
		$partOfDay = "varane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "Koolipäev";
	}
	if ($hourNow >= 8) {
		$partOfDay = "Koolipäev";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
					echo $firstName;
					echo " ";
					echo $lastName;
			?>
			, Õppetöö</title>
	</head>
	<body>
		<h1>
			<?php
			echo $firstName." ".$lastName;
			?>, IF18</h1>
		<p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
		<p>See on minu esimene ülikooli veebileht</p>
		<?php
		 echo "<p>Täna kuupäev on: ". $dateToday .".</p> \n";
		 echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") ." . Käes oli " . $partOfDay .".</p>\n";
		?>
		<!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">-->
		
		<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">
		<p>Mul on ka sõber, kes teeb oma <a href="../../~kriskel/" target="_blank">Veebi</a>.</p>
	</body>
</html>