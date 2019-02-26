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
		file_put_contents( $file, $_POST['r5'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r6'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r7'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r8'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r9'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r10'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r11'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r12'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r13'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r14'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r15'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r16'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r17'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r18'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r19'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r20'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r21'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r22'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r23'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r24'] . " " . PHP_EOL, FILE_APPEND); 
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
<h1> KOOP -perustietojen keruu <br> Koulutussopimusta/ oppisopimusta varten </h1>
<h3> DATANOMI: Ohjelmistotuotannon osaamisala </h3>
<br>
<form action="KOOP2018.php" method="post">
<h3> Opiskelijan tiedot </h3>
Opiskelijan nimi<br><textarea   maxlength="50" placeholder="Sukunimi Etunimi" name="r1" rows="2" cols="85" ></textarea> <br>
Ryhmän tunnus<br><textarea maxlength="50" placeholder="Opiskelijaryhmän tunnus" name="r2" rows="2" cols="85" ></textarea> <br>
<!-- 1PVM <br><textarea maxlength="6" placeholder="PVM" name="r3" rows="1" cols="85" ></textarea> <br> -->
<!-- 2PVM <br><textarea maxlength="6" placeholder="PVM" name="r4" rows="1" cols="85" ></textarea> <br> -->
<h3> Opiskelijan osaamisen kehittäminen tutkinnon osittain</h3>
Tähän voidaan merkitä alustavia työtehtäviä joissa opiskelija harjaantuu...<br>
Kenttiin voidaan laittaa myös lyhyesti merkintä esimerkiksi Kyllä/Ei/Suoritettu. <br>
<a href="https://eperusteet.opintopolku.fi/#/fi/esitys/3328283/reformi/tutkinnonosat" target="_blank" >Lisätietoja: OPH-2699-2017</a> 
<br><br>
Palvelutehtävissä toimiminen - Näyttö, 25 osp
<br><textarea maxlength="250" placeholder="Kyllä/Ei" name="r5" rows="2" cols="85" ></textarea> <br>
Järjestelmän hankinta ja käyttöönotto - Näyttö, 20 osp
 <br><textarea maxlength="250" placeholder="Kyllä/Ei" name="r6" rows="2" cols="85" ></textarea> <br>
Ohjelmiston prototyypin toteuttaminen - Näyttö, 30 osp
<br><textarea maxlength="250" placeholder="Kyllä/Ei" name="r7" rows="2" cols="85" ></textarea> <br>
Ohjelmiston tuotantoversion toteuttaminen - Näyttö, 30 osp
<br><textarea maxlength="250" placeholder="Kyllä/Ei" name="r8" rows="2" cols="85" ></textarea> <br>
1. valinnainen tutkinnon osa Näyttö, 15 osp
<br><textarea maxlength="250" placeholder="Mikä? esim. Multimediatuotanto" name="r9" rows="2" cols="85" ></textarea> <br>
2. valinnainen tutkinnon osa Näyttö, 15 osp
<br><textarea maxlength="250" placeholder="Mikä? esim. Testaus" name="r10" rows="2" cols="85" ></textarea> <br>
MUUTIETO <br><textarea maxlength="250" placeholder="Lisätietoja: esimerkiksi osallistuminen opetukseen työskentelyjakson aikana" name="r11" rows="2" cols="85" ></textarea> <br>
<h3> Opiskelijan työskentelyn aloitus- ja lopetuspäivämäärät </h3>
SOPIMUS ALKAA <br><textarea maxlength="50" placeholder="Aloitus pvm xx.xx.xxxx" name="r12" rows="2" cols="85" ></textarea> <br>
SOPIMUS PÄÄTTYY <br><textarea maxlength="50" placeholder="Lopetus pvm xx.xx.xxxx" name="r13" rows="2" cols="85" ></textarea> <br>
SOPIMUKSEN TYYPPI KO=koulutussopimus (palkaton) / OP=oppisopimus (palkallinen) <br><textarea maxlength="50" placeholder="KO=koulutus / OP=oppisopimus " name="r14" rows="2" cols="85" ></textarea> <br>
Mahdollisia etuja <br><textarea maxlength="50" placeholder="Esim. tarjotaanko lounas? Kyllä/Ei" name="r15" rows="2" cols="85" ></textarea> <br>
Työtunnit / vko <br><textarea maxlength="50" placeholder="Työtunnit min-max 30-40 h/vko" name="r16" rows="2" cols="85" ></textarea> <br>
<h3> Työpaikan tiedot </h3>
Työpaikan nimi   
<br><textarea    maxlength="50" placeholder="Työpaikan nimi" name="r17" rows="2" cols="85" ></textarea> <br>
Y-tunnus
<br><textarea    maxlength="50" placeholder="Y-tunnus" name="r18" rows="2" cols="85" ></textarea> <br>
Työpaikan osoite  
<br><textarea maxlength="50" placeholder="Osoite" name="r19" rows="2" cols="85" ></textarea> <br>
Työpaikan edustaja(ja sopimuksen allekirjoittaja)  
<br><textarea   maxlength="50" placeholder="Työpaikan edustajan etunimi sukunimi" name="r20" rows="2" cols="85" ></textarea> <br>
Puhelin   
<br><textarea   maxlength="50" placeholder="puhelin" name="r21" rows="2" cols="85" ></textarea> <br>
Sähköposti    
<br><input   type="email" maxlength="150" placeholder="sähköposti" name="r22" size="84" rows="2" cols="84" ><br>
Käyntiosoite  
<br><textarea maxlength="50" placeholder="käyntiosoite jos eri kuin yllä" name="r23" rows="2" cols="85" ></textarea> <br>
Työpaikkaohjaaja 
<br><textarea maxlength="50" placeholder="Työpaikkaohjaaja jos eri kuin edellä" name="r24" rows="2" cols="85" ></textarea> <br>
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

