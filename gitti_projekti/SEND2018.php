<!DOCTYPE html>
<html>
<body
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
// avataan tiedosto lukemista varten
	$myfile = fopen("kooprapo_1.txt", "r") or die("Ongelmia: Unable to open file!");
	$teksti="";// varmistetaan että ei ole mitään...
// Luetaan tiedot riveittäin
	while(!feof($myfile)) {
	$teksti .= fgets($myfile) . "<br>";
	}
 fclose($myfile);// suljetaan tiedosto
 echo $teksti;// näytetään vielä ruudulla mitä lähetetään 
// Lähetetään postia mutta
// PAKOLLISTA content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <koop.sovellus>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";
// Lähetetään vastaanottaja, aihe, viestin sisältö, 
// https://www.w3schools.com/php/func_mail_mail.asp
	mail($_POST['spostia'],"KOOPSOPIMUS",$teksti, "$headers" );	
echo "Viesti on nyt lähetetty: " . $_POST['spostia'] . " --> <br><br>  ";
echo "Tiedot ovat myös poistettu palvelimelta <br> Kiitos! " . " --> <br><br> VOIT NYT SULKEA IKKUNAN ";
}
?>
</body>
</html>

