<!doctype html>
<html>
<header>

<style>
	body {
    text-align: center;
// center;
    background-color: white;
    background-size: 137% auto;
    color: #FFFFFF;
    font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
    background-image: url(images/blinds-close-up-dark-586417.jpg);
	}	
	textarea {
    background-color: white;
    text-align: center;
	}
	
body div {
    margin-left: auto;
    margin-right: auto;
    width: 70%;
}
	.loader {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
</header>

<?php // 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 		
	$file = 'kooprapo_1.txt'; 
	if (is_writable($file)) 
		{
		// Ensin tyhj&#228;t&#228;&#228;n tiedot...
		file_put_contents( $file, PHP_EOL); 
		
		// Laitetaan uudet TIEDOT xls:n j&#228;lkeen alapuolelle
		file_put_contents( $file, $KirjausPVM .  "Asiakkaan tiedot" . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r1'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r2'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r22'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r23'] . " " . PHP_EOL, FILE_APPEND);  
		file_put_contents( $file, $_POST['r25'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r27'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, PHP_EOL, FILE_APPEND);
		}
	else { print 'Suojausongelmia?';} 	
	
		echo "<div id='google_translate_element'></div>

<script type='text/javascript'>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'fin'}, 'google_translate_element');
}
</script>

<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>";

		print '****************************** <br>' ;
		print '...Tiedot ovat nyt tallessa...  <br>' ;
		print '****************************** <br><br>' ;
		print '<form action="" id="form1">';
		print '<h1> Voit tarkastaa tiedot ... </h1>' ;
		print '<br> Paina t&#228;st&#228; tarkastaaksesi tiedot  <button formtarget="_blank" type="submit" formaction="kooprapo_1.txt" > Tiedot n&#228;kyviin! </button>';
		print '<br> (Voit palata takasin ja l&#228;hett&#228;&#228; tiedot sen j&#228;lkeen eteenp&#228;in) ' ;
		print '<h1> Voit siirty&#228; takaisin ja tallentaa uudet tiedot...</h1>' ;
		print '<br> Paina t&#228;st&#228; siirty&#228;ksesi takaisin  <button formtarget="_parent" type="submit"  > Takaisin! </button>';
		print '</form>';
		print '<h1> Lopuksi voit l&#228;hett&#228;&#228; tiedot haluamaasi s-postiin...</h1>' ;		
		print '<form action="SEND2018.php" method="post" id="sendme" >';
		print '<br> <br> <input name="spostia" type="email" maxlength="55" placeholder="S&#228;k&#246;posti osoitteesi" size="25" > ';
		print '<input type="submit" name="submit" value="L&#228;het&#228; s-posti t&#228;st&#228;!" form="sendme" >';
		print '</form>';
} 
else 
{
?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'fin'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	
	<div>
		<h1> K&#196;&#196;K </h1>
		<h1 class="trn">Anna meille tietosi</h1>
<h3 class="trn">Gitti Projekti</h3>
<br>
<form action="KOOP2018.php" method="post">
<h3 class="trn"> Sinun tiedot </h3>
<p class="trn">Nimesi</p><br><textarea   maxlength="50" name="r1" rows="2" cols="85" ></textarea> <br>
<!-- 1PVM <br><textarea maxlength="6" placeholder="PVM" name="r3" rows="1" cols="85" ></textarea> <br> -->
<!-- 2PVM <br><textarea maxlength="6" placeholder="PVM" name="r4" rows="1" cols="85" ></textarea> <br> -->
	  
<p class="trn">S&#228;hk&#246;posti</p>
<br><textarea   type="email" maxlength="150" name="r22" size="84" rows="2" cols="84" ></textarea><br>
<p class="trn">Osoite</p>  
<br><textarea maxlength="50" name="r23" rows="2" cols="85" ></textarea> <br>
<p class="trn">Puhelin-numero</p>
<br><textarea maxlength="50" name="r25" rows="2" cols="85" ></textarea> <br>
<p class="trn">MUUTA</p>  
<br><textarea maxlength="50" name="r27" rows="2" cols="85" ></textarea> <br>
<br>
<p class="trn">Jatka Painamalla T&#228;st&#228;!</p> <input type="submit" name="submit" value="PAINA" />
<?php 
}  
?>
</div>
</html>