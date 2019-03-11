<!doctype html>
<html>
<header>
<style>
	body {
		text-align: left; // center;
		background-color: white;
	}	
	textarea {
		background-color: white;
	}
	
</style>
</header>

<?php // 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 		
	$file = 'kooprapo_1.txt'; 
	if (is_writable($file)) 
		{
		// Ensin tyhjätään tiedot...
		file_put_contents( $file, "xls" . PHP_EOL); 
		
		// Laitetaan uudet TIEDOT xls:n jälkeen alapuolelle
		$KirjausPVM = date("Y/m/d"). " kello:" . date("h:i:s") ;
		file_put_contents( $file, $KirjausPVM .  " KOULUTUS/OPPISOPIMUSAIHIO" . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, "KERÄTYT TIEDOT:" .    " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r1'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r2'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, "pp.kk.vv"   . " " . PHP_EOL, FILE_APPEND); //Exceliä varten 
		file_put_contents( $file, "pp.kk.vv"   . " " . PHP_EOL, FILE_APPEND); //Exceliä varten		
		file_put_contents( $file, $_POST['r21'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r22'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r23'] . " " . PHP_EOL, FILE_APPEND);  
		file_put_contents( $file, $_POST['r25'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r26'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r27'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, "*LOPPU* Voit viedä tiedot esim. Exceliin tästä" . " " . PHP_EOL, FILE_APPEND);
		}
	else { print 'Suojausongelmia?';} 	
		print '****************************** <br>' ;
		print '...Tiedot ovat nyt tallessa...  <br>' ;
		print '****************************** <br><br>' ;
		print '<form action="" id="form1">';
		print '<h1> Voit tarkastaa tiedot ... </h1>' ;
		print '<br> Paina tästä tarkastaaksesi tiedot  <button formtarget="_blank" type="submit" formaction="kooprapo_1.txt" > Tiedot näkyviin! </button>';
		print '<br> (Voit palata takasin ja lähettää tiedot sen jälkeen eteenpäin) ' ;
		print '<h1> Voit siirtyä takaisin ja tallentaa uudet tiedot...</h1>' ;
		print '<br> Paina tästä siirtyäksesi takaisin  <button formtarget="_parent" type="submit"  > Takaisin! </button>';
		print '</form>';
		print '<h1> Lopuksi voit lähettää tiedot haluamaasi s-postiin...</h1>' ;		
		print '<form action="SEND2018.php" method="post" id="sendme" >';
		print '<br> <br> <input name="spostia" type="email" maxlength="55" placeholder="esimerkiksi burot@bc.fi" size="25" > ';
		print '<input type="submit" name="submit" value="Lähetä s-posti tästä!" form="sendme" >';
		print '</form>';
		
		print '<br> *-*';
} 
else 
{
?>
<h1> VAAK <br> Opinto Tehtävä </h1>
<h3> Gitti Projekti  </h3>
<br>
<form action="KOOP2018.php" method="post">
<h3> Opiskelijan tiedot </h3>
Opiskelijan nimi<br><textarea   maxlength="50" placeholder="Sukunimi Etunimi" name="r1" rows="2" cols="85" ></textarea> <br>
Ryhmän tunnus<br><textarea maxlength="50" placeholder="Opiskelijaryhmän tunnus" name="r2" rows="2" cols="85" ></textarea> <br>
<!-- 1PVM <br><textarea maxlength="6" placeholder="PVM" name="r3" rows="1" cols="85" ></textarea> <br> -->
<!-- 2PVM <br><textarea maxlength="6" placeholder="PVM" name="r4" rows="1" cols="85" ></textarea> <br> -->
	  
Puhelin<br><textarea   maxlength="50" placeholder="puhelin" name="r21" rows="2" cols="85" ></textarea> <br>
Sähköposti    
<br><input   type="email" maxlength="150" placeholder="sähköposti" name="r22" size="84" rows="2" cols="84" ><br>
Käyntiosoite  
<br><textarea maxlength="50" placeholder="käyntiosoite jos eri kuin yllä" name="r23" rows="2" cols="85" ></textarea> <br>
Puhelin 
<br><textarea maxlength="50" placeholder="puhelin" name="r25" rows="2" cols="85" ></textarea> <br>
Sähköposti  
<br><input type="email" maxlength="50" placeholder="sähköposti" name="r26" size="84"  ><br>
MUUTA    
<br><textarea maxlength="50" placeholder="...lisätietoja..." name="r27" rows="2" cols="85" ></textarea> <br>
<br>
JATKA PAINAMALLA TÄSTÄ! <input type="submit" name="submit" value="PAINA" />
<?php 
}  
?>

</html>