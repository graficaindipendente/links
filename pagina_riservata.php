<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header('Location: index.html');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>g[i] links tool</title>
	<link rel="shortcut icon" href="favicon.ico" /> 
	<link rel="icon" type="image/png" href="favicon-32.png" sizes="32x32"> 
	<link rel="apple-touch-icon" sizes="180x180" href="favicon-180-precomposed.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon-192.png">
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="UTF-8"></head>

<meta http-equiv="Set-Cookie" content="HttpOnly; Secure; SameSite=Strict">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

</head>
<body>
<iframe src="clock.html" class="site"></iframe>
<p style="font-weight: 800;">GESTIONALE
<a class="bluelink" href="https://graficaindipendente.com/gestionale/index.php/sessions/login" target="_blank">Gest©</a> • 
MAIL
<a class="bluelink" href="https://mail.google.com/mail/u/1/#inbox" target="_blank">info@graficaindipendente.com</a></p>

<br><br>
<a class="greylink" href="https://invoices.sumup.com/" target="_blank">SumUp Fatture</a>
	<a class="greylink" href="https://drive.google.com/drive/u/1/my-drive" target="_blank">google drive</a> • 
<a class="greylink" href="https://web.whatsapp.com" target="_blank">Whatsapp Web Business</a> • 
<a class="greylink" href="https://login.aruba.it/auth/realms/pec/protocol/openid-connect/auth" target="_blank">Aruba PEC</a>

<br><br><br>

<a class="greylink" href="http://185.181.136.34:8080/filestation/" target="_blank">file qnap<sup class="sr">ONLINE</sup></a>
<a class="greylink" href="http://185.181.136.34:8080/downloadstation/" target="_blank">download qnap<sup class="sr">ONLINE</sup></a> • 
<a class="greylink" href="http://192.168.1.139:8080/filestation/" target="_blank">file qnap<sup class="sg">LAN</sup></a>
<a class="greylink" href="http://192.168.1.139:8080/downloadstation/" target="_blank">download qnap<sup class="sg">LAN</sup></a> 
sito 
<a class="greylink" href="https://graficaindipendente.com/" target="_blank">sito g[i]</a>
<a class="greylink" href="https://analytics.google.com/analytics/web/?authuser=1#/" target="_blank">Google analytics</a>
<br><br><br>
admin 
<a class="greylink" href="https://web.urano.vhosting-it.com:8443/smb/account/show/id/916/" target="_blank">plesk host</a> • 
<a class="greylink" href="https://www.vhosting-it.com/clients/clientarea.php?action=productdetails&id=27796" target="_blank">admin host</a>
<a class="greylink" href="https://mailserver5.vhosting-it.com:2222/evo/" target="_blank">admin mail</a> • 
<a class="greylink" href="http://185.181.136.34:8080/cgi-bin/" target="_blank">admin qnap<sup class="sr">ONLINE</sup></a>
<a class="greylink" href="http://192.168.1.139:8080/cgi-bin/" target="_blank">admin qnap<sup class="sg">LAN</sup></a> • 
<a class="greylink" href="https://185.181.136.34/#/" target="_blank">fritz router<sup class="sr">ONLINE</sup></a> • 
<a class="greylink" href="http://192.168.1.1/" target="_blank">router<sup class="sg">LAN</sup></a>

<br><br><br>
<a class="grey2link" href="workflow.html" style="font-weight: 800;">g[i] workflow</a>
<a class="grey2link" href="main.html" style="font-weight: 800;">g[i] collection</a> • 
<a class="greylink" href="https://graficaindipendente.com/eliquid/links.html" style="font-weight: 800;">eliquid collection</a> • 
<a class="greylink" href="https://chat.openai.com/" target="_blank">chatGPT</a>
<a class="greylink" href="https://www.bing.com/search?q=Bing+AI&showconv=1&FORM=hpcodx" target="_blank">BingAI</a>
<a class="greylink" href="https://bard.google.com/" target="_blank">GoogleBard</a> • 
<a class="greylink" href="https://trends.google.com/trends/" target="_blank">Trends</a> 
<br><br><br>
search 
<a class="greylink" href="https://www.google.com/advanced_search" target="_blank">ricerca avanzata</a>
<a class="greylink" href="https://www.google.com/advanced_image_search" target="_blank">ricerca avanzata immagini</a> • 
<a class="greylink" href="https://duckduckgo.com/" target="_blank">duckduckgo</a> • 
<a class="grey2link" href="https://filecr.com/macos/" target="_blank">fileCR</a>
<br><br><br>
translate 
<a class="greylink" href="https://www.wordreference.com/" target="_blank">wordreference</a>
<a class="greylink" href="https://translate.google.com/?hl=it&tab=TT" target="_blank">translate</a>
<a class="greylink" href="https://www.deepl.com/it/translator" target="_blank">deepl</a>
<br><br><br>

reference
<a class="greylink" href="https://mail.yahoo.com/" target="_blank">yahoo mail</a>
<a class="greylink" href="https://www.icloud.com/mail" target="_blank">iCloud mail</a>
<a class="greylink" href="https://mail.protonmail.com/inbox" target="_blank">proton mail</a> • 
<a class="greylink" href="https://mapgenie.io" target="_blank">mapgenie</a> • 
<a class="greylink" href="https://buyer.17track.net/it/myshipment?ob=1" target="_blank">17track</a>
<br><br><br><br>
brainstorming 
<a class="greylink" href="https://www.behance.net/alessandrographics/moodboards" target="_blank">behance</a>
<a class="greylink" href="https://www.artstation.com/graficaindipendente" target="_blank">artstation</a>
<a class="greylink" href="https://dribbble.com/shots/popular" target="_blank">dribbble</a>
<a class="greylink" href="https://www.pinterest.it/alessandrographics/" target="_blank">pinterest</a> • 
<a class="greylink" href="https://www.youtube.com/playlist?list=WL" target="_blank">youtube più tardi</a>
<br><br><br>		
 walkthrough 
 <a class="greylink" href="https://github.com/graficaindipendente?tab=stars" target="_blank">github</a>
<a class="greylink" href="https://gist.github.com/graficaindipendente" target="_blank">gist</a> • 
<a class="greylink" href="https://www.domestika.org/it" target="_blank">domestika</a>
<a class="greylink" href="https://www.udemy.com/home/my-courses/learning/" target="_blank">udemy</a> • 
<a class="greylink" href="https://graficaindipendente.com/links/youtube.html" target="_blank">youtube best channel</a> • W3s 
<a class="greylink" href="https://www.w3schools.com/html/default.asp" target="_blank">html</a>
<a class="greylink" href="https://www.w3schools.com/css/default.asp" target="_blank">css</a>
<a class="greylink" href="https://www.w3schools.com/js/default.asp" target="_blank">js</a>
<a class="greylink" href="https://www.w3schools.com/sql/default.asp" target="_blank">sql</a>
<br><br><br><br>
PS4 
<a class="greylink" href="https://graficaindipendente.com/exploit/">exploit</a> • 
<a class="greylink" href="https://graficaindipendente.com/catalogo/" target="_blank">catalogo</a>
<a class="greylink" href="https://graficaindipendente.com/catalogo/cheats.html" target="_blank">cheats list</a> • 
<a class="grey2link" href="https://dlpsgame.com/category/ps4/" target="_blank">dlps</a> • 
<a class="greylink" href="https://serialstation.com/" target="_blank">serial</a>
<a class="greylink" href="https://orbispatches.com/" target="_blank">orbies</a>
<a class="greylink" href="http://ps4trainer.com/Trainer/index.html" target="_blank">trainer</a> • 

<a class="greylink" href="https://streamingcommunity.codes/" target="_blank">streaming community</a>
<br><br><br>
<p style="font-weight: 800;">CALCOLATRICI</p>
<iframe src="quota.html" class="site"></iframe>
<br>
<p style="font-weight: 600;">SINONIMI e CONTRARI <br>Virgilio.it</p>
<iframe src="https://sapere.virgilio.it/parole/sinonimi-e-contrari/" class="virgilio"></iframe>
<br>
<p style="font-weight: 600;">WORDREFERENCE.com</p>
<iframe src="https://www.wordreference.com" class="virgilio"></iframe>
<div><br><a class="lin" href="https://graficaindipendente.com/" target="_blank">grafica[indipendente] ©2023</a></div> <br><br><br>



<!-- https://www.myqnapcloud.com/home?lang=it
https://my.jdownloader.org/login.html#logout

https://business.google.com/posts/l/06900522905936642888

https://www.unicredit.it/it/piccole-imprese.html
https://www.paypal.com/mep/dashboard

https://www.inipec.gov.it/cerca-pec
https://www.indicepa.gov.it/ipa-portale/

https://puntorigenera.com/ -->

</body>
</html>
